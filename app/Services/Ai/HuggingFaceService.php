<?php

namespace App\Services;

require "vendor/autoload.php";

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__, 3));
$dotenv->load();

class HuggingFaceService
{
    private static $apiKey;
    private static $model;
    private static $endpoint = "https://router.huggingface.co/v1/chat/completions";

    private static function init()
    {
        self::$apiKey = $_ENV['HF_TOKEN'] ?? getenv('HF_TOKEN');
        self::$model = $_ENV['HF_MODEL'] ?? getenv('HF_MODEL') ?: 'mistralai/Mistral-7B-Instruct-v0.3';
    }

    public static function generateResponse(string $message)
    {
        self::init();

        if (empty(self::$apiKey)) {
            return json_encode(['error' => 'Hugging Face Token not configured in .env file.']);
        }

        $messages = [
            ['role' => 'system', 'content' => 'You are a helpful and friendly AI assistant.']
        ];



        $messages[] = ['role' => 'user', 'content' => $message];


        $data = [
            'model' => self::$model,
            'messages' => $messages,
            'temperature' => 0.7,
            'max_tokens' => 500
        ];

        $ch = curl_init(self::$endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer ' . self::$apiKey
        ]);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlError = curl_error($ch);
        curl_close($ch);

        if ($response === false) {
            return json_encode(['error' => 'cURL Error: ' . $curlError]);
        }

        $responseData = json_decode($response, true);

        if ($httpCode !== 200) {
            $errorMessage = $responseData['error'] ?? 'Hugging Face API returned an error.';
            if (is_array($errorMessage)) {
                $errorMessage = json_encode($errorMessage);
            }
            return json_encode(['error' => 'Hugging Face API Error: ' . $errorMessage]);
        }

        return $responseData['choices'][0]['message']['content'] ?? '';
    }
}


header('Content-Type: application/json');

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);

$message = 'Hello';
$history = $input['history'] ?? [];

if ($message) {
    try {
        $response = HuggingFaceService::generateResponse($message);


        $decoded = json_decode($response, true);
        if (is_array($decoded) && isset($decoded['error'])) {
            echo $response;
        } else {
            echo json_encode([
                'reply' => $response,
                'history' => array_merge($history, [
                    ['role' => 'user', 'content' => $message],
                    ['role' => 'assistant', 'content' => $response]
                ])
            ]);
        }
    } catch (\Exception $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
} else {
    if (!empty($input)) {
        echo json_encode(['error' => 'No message provided']);
    }
}
