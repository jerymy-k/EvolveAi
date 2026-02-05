<?php

namespace App\Services;

require "vendor/autoload.php";

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__, 3));
$dotenv->load();

use Gemini;


$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);

$formData = 'No form data submitted';

    // $prompt = <<<PROMPT
    // Analyze the following form data and return a valid plan structure to follow, detailed with tasks to do


    // Form data:
    // {Name: John Doe  
    // Email: john@example.com  
    // Service Requested: WordPress website optimization  
    // Main Concern: Low performance and SEO issues
    // Urgency: High  
    // Additional Notes: Website traffic has dropped recently
    // }
    // PROMPT;

class GeminiService
{
    private static $client;

    private static function getClient()
    {
        if (self::$client === null) {
            $apiKey = $_ENV['GEMINI_API_KEY'];

            self::$client = Gemini::client($apiKey);
        }
        return self::$client;
    }

    public static function generateResponse(?string $prompt): string
    {
        if (empty($prompt)) {
            return json_encode(['error' => 'No prompt provided']);
        }

        try {
            $client = self::getClient();

            $result = $client->generativeModel(model: 'gemini-2.5-flash')
                ->generateContent($prompt);
            return $result->text();
        } catch (\Exception $e) {
            return json_encode(['error' => $e->getMessage()]);
        }
    }
}

header('Content-Type: application/json');


$promptText = $input['text'] ?? null;

echo GeminiService::generateResponse($prompt);
