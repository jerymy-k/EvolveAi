<?php

namespace App\Services\Ai;

require_once dirname(__DIR__, 3) . "/vendor/autoload.php";

use Exception;
use Dotenv\Dotenv;
use App\Repositories\OpportunityRepository;



if (empty($_ENV['GEMINI_API_KEY'])) {
    try {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__, 3));
        $dotenv->load();
    } catch (Exception $e) {
    }
}

final class AiService
{
    private static string $apiKey;
    private static string $endpoint;


    public static function init()
    {
        self::$apiKey = $_ENV['GEMINI_API_KEY'] ?? getenv('GEMINI_API_KEY') ?: '';

        if (empty(self::$apiKey)) {
            throw new Exception('Gemini API key is not configured. Please add GEMINI_API_KEY to your .env file.');
        }


        self::$endpoint = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent' . '?key=' . self::$apiKey;
    }


    public static function generateResponse(string $prompt): string
    {
        if (empty($prompt)) {
            throw new Exception('No prompt provided');
        }

        self::init();

        $payload = [
            'contents' => [
                [
                    'parts' => [
                        ['text' => $prompt]
                    ]
                ]
            ]
        ];

        $ch = curl_init(self::$endpoint);
        if (!$ch) {
            throw new Exception('Failed to initialize cURL');
        }

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
            CURLOPT_POSTFIELDS => json_encode($payload),
            CURLOPT_TIMEOUT => 45,
            CURLOPT_SSL_VERIFYPEER => false
        ]);

        $rawResponse = curl_exec($ch);

        if ($rawResponse === false) {
            $error = curl_error($ch);
            curl_close($ch);
            throw new Exception('cURL error: ' . $error);
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200) {
            throw new Exception('Gemini API error (HTTP ' . $httpCode . '): ' . $rawResponse);
        }

        $decoded = json_decode($rawResponse, true);

        if (!isset($decoded['candidates'][0]['content']['parts'][0]['text'])) {
            throw new Exception('Invalid Gemini response structure');
        }

        return $decoded['candidates'][0]['content']['parts'][0]['text'];
    }


    public static function generateOpportunities(array $qaPairs): array
    {
        $prompt = "Based on the following user profile questions and answers, suggest 5 realistic income-generating opportunities. 
        Return ONLY a JSON array of objects. 
        Each object should have: 
        - title (string)
        - description (string)
        - required_skill (string or array of skills)
        - money_gain (string, e.g., '500-1000$')
        - link (string, URL to a platform or resource)
        - status (string, default 'not_started')

        User Profile Data: " . json_encode($qaPairs, JSON_UNESCAPED_UNICODE);

        $responseText = self::generateResponse($prompt);

        $cleanJson = preg_replace('/^```json\s*|\s*```$/i', '', trim($responseText));

        $decoded = json_decode($cleanJson, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return [['error' => 'Failed to parse AI response', 'raw' => $responseText]];
        }

        return is_array($decoded) ? $decoded : [$decoded];
    }

    public static function generatePlan(array $opportunity): array
    {
        $prompt = "Based on the following selected opportunity, create a detailed action plan to achieve it.
        Return ONLY a JSON object.
        The object should have:
        - title (string)
        - goal (string)
        - aimed_skills (array of strings)
        - tasks (array of objects, each with 'name' (string) and 'task_order' (integer))

        Selected Opportunity: " . json_encode($opportunity, JSON_UNESCAPED_UNICODE);

        $responseText = self::generateResponse($prompt);

        $cleanJson = preg_replace('/^```json\s*|\s*```$/i', '', trim($responseText));

        $decoded = json_decode($cleanJson, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return ['error' => 'Failed to parse AI response', 'raw' => $responseText];
        }

        return $decoded;
    }

   
    public static function generateOpportunitiesFromSurvey(array $surveyData): array
    {
        
        $prompt = self::buildSurveyOpportunityPrompt($surveyData);

        $responseText = self::generateResponse($prompt);

        $cleanJson = preg_replace('/^```json\s*|\s*```$/i', '', trim($responseText));
        $cleanJson = preg_replace('/^```\s*|\s*```$/i', '', $cleanJson);

        $decoded = json_decode($cleanJson, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception('Failed to parse AI response: ' . json_last_error_msg() . '. Raw response: ' . substr($responseText, 0, 200));
        }

        if (!is_array($decoded)) {
            throw new Exception('AI response is not an array');
        }

        $opportunities = [];
        foreach ($decoded as $opp) {
            if (is_array($opp) && isset($opp['title'])) {
                $opportunities[] = self::normalizeOpportunity($opp);
            }
        }

        return $opportunities;
    }


    private static function buildSurveyOpportunityPrompt(array $surveyData): string{
        $mainGoal = $surveyData['main_goal'];
        $employmentStatus = $surveyData['employment_status'];
        $workSchedule = $surveyData['work_schedule'];
        $aiConfidence = $surveyData['ai_confidence'];
        $timeInvestment = $surveyData['daily_time_investment'];
        $ageRange = $surveyData['age_range'];
        // Build the prompt
        $prompt = <<<PROMPT
                    You are an expert AI career and income opportunity advisor specializing in identifying personalized, realistic income opportunities.

                    ANALYZE THIS USER PROFILE:

                    BASIC INFO:
                    - Age Range: {$ageRange}
                    - Main Goal: {$mainGoal}
                    - Employment Status: {$employmentStatus}
                    - Work Schedule: {$workSchedule}
                    - AI Confidence Level: {$aiConfidence}
                    - Available Time: {$timeInvestment} per day

                    PROMPT;

        $prompt .= "\n\nYOUR TASK:\n";
        $prompt .= "Generate EXACTLY 5 realistic, actionable income opportunities tailored to this user profile.\n\n";

        $prompt .= "REQUIREMENTS FOR EACH OPPORTUNITY:\n";
        $prompt .= "1. Must be achievable with their available time ({$timeInvestment})\n";
        $prompt .= "2. Must match their AI confidence level ({$aiConfidence})\n";
        $prompt .= "3. Must align with their main goal ({$mainGoal})\n";
        $prompt .= "4. Must consider their employment status ({$employmentStatus})\n";
        $prompt .= "5. Must be realistic and based on current market demand\n";
        $prompt .= "6. Must include specific platforms or marketplaces where applicable\n\n";

        $prompt .= "OUTPUT FORMAT:\n";
        $prompt .= "Return ONLY a valid JSON array. No explanations, no markdown formatting, just pure JSON.\n\n";

        $prompt .= "Each opportunity object must have these EXACT fields:\n";
        $prompt .= "{\n";
        $prompt .= "  \"title\": \"Clear, concise opportunity name (max 60 characters)\",\n";
        $prompt .= "  \"description\": \"Detailed description explaining what this involves, why it's suitable for them, and what they'll do (2-3 sentences)\",\n";
        $prompt .= "  \"PossibleGain\": \"Realistic income estimate (e.g., '50-100', '500-1000', '1500-3000') - numbers only, no currency symbols\",\n";
        $prompt .= "  \"skills\": [\"skill1\", \"skill2\", \"skill3\"],\n";
        $prompt .= "  \"link\": \"https://actual-platform-url.com - must be a real, working URL\",\n";
        $prompt .= "  \"status\": \"not_started\"\n";
        $prompt .= "}\n\n";

        $prompt .= "IMPORTANT RULES:\n";
        $prompt .= "1. Each opportunity should be UNIQUE and SPECIFIC\n";
        $prompt .= "2. Income estimates must be REALISTIC and based on market rates\n";
        $prompt .= "3. Links must be to REAL platforms (Upwork, Fiverr, Etsy, YouTube, etc.)\n";
        $prompt .= "4. Skills should be CONCRETE and learnable\n";
        $prompt .= "5. Descriptions should be ACTIONABLE and inspiring\n";
        $prompt .= "6. Consider the user's time constraints and current situation\n\n";

        $prompt .= "DIVERSITY:\n";
        $prompt .= "Include a mix of:\n";
        $prompt .= "- Freelance opportunities (if applicable)\n";
        $prompt .= "- Passive income ideas (if suitable)\n";
        $prompt .= "- AI-assisted opportunities (matching their AI confidence)\n";
        $prompt .= "- Quick wins and long-term builds\n\n";

        $prompt .= "Return ONLY the JSON array, starting with [ and ending with ]. No other text.";


        return $prompt;
    }

    private static function parsePostgresArray(string $pgArray): array
    {
        $cleaned = str_replace(['{', '}'], '', $pgArray);
        if (empty($cleaned)) {
            return [];
        }
        return array_map('trim', explode(',', $cleaned));
    }
    private static function normalizeOpportunity(array $opportunity): array
    {
        return [
            'title' => $opportunity['title'] ?? 'Untitled Opportunity',
            'description' => $opportunity['description'] ?? '',
            'PossibleGain' => $opportunity['PossibleGain'] ?? $opportunity['money_gain'] ?? '0',
            'skills' => $opportunity['skills'] ?? $opportunity['required_skill'] ?? [],
            'link' => $opportunity['link'] ?? '',
            'status' => $opportunity['status'] ?? 'not_started'
        ];
    }
}
