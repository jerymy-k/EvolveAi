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


    private static function buildSurveyOpportunityPrompt(array $surveyData): string
{
    $mainGoal = $surveyData['main_goal'];
    $interest_areas = $surveyData['interest_areas'];
    $used_device = $surveyData['used_device'];
    $employmentStatus = $surveyData['employment_status'];
    $current_career = $surveyData['current_career'];
    $previous_career = $surveyData['previous_career'];
    $workSchedule = $surveyData['work_schedule'];
    $aiConfidence = $surveyData['ai_confidence'];
    $timeInvestment = $surveyData['daily_time_investment'];
    $ageRange = $surveyData['age_range'];

    $prompt = <<<PROMPT
You are an expert AI career and income opportunity advisor specialized in identifying personalized, realistic income opportunities based on user constraints (time, device, experience, and confidence with AI tools).

ANALYZE THIS USER PROFILE:

BASIC INFO:
- Age Range: {$ageRange}
- Main Goal: {$mainGoal}
- Interest Areas: {$interest_areas}
- Used Device: {$used_device}
- Current Career: {$current_career}
- Employment Status: {$employmentStatus}
- Previous Career: {$previous_career}
- Work Schedule: {$workSchedule}
- AI Confidence Level: {$aiConfidence}
- Available Time: {$timeInvestment} per day
PROMPT;

    $prompt .= "\n\nYOUR TASK:\n";
    $prompt .= "Generate EXACTLY 5 realistic, actionable income opportunities tailored to this user profile.\n";
    $prompt .= "Each opportunity must be something the user can start with their current situation and device, and progress within 2-4 weeks.\n\n";

    $prompt .= "HARD REQUIREMENTS (MUST FOLLOW):\n";
    $prompt .= "1) Exactly 5 opportunities.\n";
    $prompt .= "2) Each opportunity MUST fit the available time: {$timeInvestment} per day.\n";
    $prompt .= "3) Must match AI confidence level: {$aiConfidence} (do NOT propose advanced AI workflows if confidence is low).\n";
    $prompt .= "4) Must align with main goal: {$mainGoal} and interest areas: {$interest_areas}.\n";
    $prompt .= "5) Must consider employment status: {$employmentStatus} and work schedule: {$workSchedule}.\n";
    $prompt .= "6) Must be realistic and based on current market demand.\n";
    $prompt .= "7) No generic ideas like “start a business” or “do dropshipping” unless you give a very concrete, low-risk starting path.\n\n";

    $prompt .= "LINK REQUIREMENTS (VERY IMPORTANT):\n";
    $prompt .= "- The \"link\" MUST be a REAL, WORKING URL to a trusted platform page.\n";
    $prompt .= "- It must be SPECIFIC to the opportunity:\n";
    $prompt .= "  * Prefer a direct category/listing/search page relevant to the opportunity.\n";
    $prompt .= "  * If you cannot guarantee an exact job/listing ID, provide a highly targeted SEARCH URL with keywords and filters.\n";
    $prompt .= "- Allowed platforms include (examples): Upwork, Fiverr, Freelancer, Malt, LinkedIn Jobs, Indeed, Etsy, Gumroad, Ko-fi, Amazon KDP, Udemy, YouTube, TikTok, Substack.\n";
    $prompt .= "- DO NOT invent fake IDs or URLs. The URL must look valid and belong to the real domain.\n\n";

    $prompt .= "OPPORTUNITY QUALITY RULES:\n";
    $prompt .= "1) Each opportunity must be UNIQUE (different type of work/marketplace).\n";
    $prompt .= "2) Mix quick wins + long-term builds.\n";
    $prompt .= "3) Include AI-assisted options ONLY if suitable for {$aiConfidence}.\n";
    $prompt .= "4) Each description must explain WHAT they do + WHY it fits them + HOW to start (2–3 sentences).\n";
    $prompt .= "5) Skills must be concrete and learnable.\n\n";

    $prompt .= "POSSIBLEGAIN RULES:\n";
    $prompt .= "- \"PossibleGain\" must be realistic for a beginner/intermediate based on {$timeInvestment} per day.\n";
    $prompt .= "- Return ONLY numbers and a dash, no currency symbols, examples: \"50-100\", \"200-400\", \"800-1500\".\n\n";

    $prompt .= "OUTPUT FORMAT (STRICT):\n";
    $prompt .= "Return ONLY a valid JSON array. No markdown. No explanations. No extra text.\n";
    $prompt .= "The JSON array must contain exactly 5 objects.\n\n";

    $prompt .= "EACH OBJECT MUST HAVE EXACTLY THESE FIELDS:\n";
    $prompt .= "{\n";
    $prompt .= "  \"title\": \"Clear, concise opportunity name (max 60 characters)\",\n";
    $prompt .= "  \"description\": \"2-3 sentences: what it is, why it fits, and how to start\",\n";
    $prompt .= "  \"PossibleGain\": \"numbers-only-range\",\n";
    $prompt .= "  \"skills\": [\"skill1\", \"skill2\", \"skill3\"],\n";
    $prompt .= "  \"link\": \"A real, working URL specific to this opportunity (direct page or targeted search URL)\",\n";
    $prompt .= "  \"status\": \"not_started\"\n";
    $prompt .= "}\n\n";

    $prompt .= "DIVERSITY (INCLUDE A MIX):\n";
    $prompt .= "- Freelance (service-based)\n";
    $prompt .= "- Productized service (packaged offer)\n";
    $prompt .= "- Passive/semi-passive (only if realistic)\n";
    $prompt .= "- AI-assisted (only if appropriate)\n";
    $prompt .= "- One quick-start opportunity + one longer-term build\n\n";

    $prompt .= "FINAL CHECK BEFORE RESPONDING:\n";
    $prompt .= "- Output starts with [ and ends with ]\n";
    $prompt .= "- Exactly 5 items\n";
    $prompt .= "- Every link is a real URL on a real platform domain\n";
    $prompt .= "- No extra keys, no missing keys\n\n";

    $prompt .= "Return ONLY the JSON array.";

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
