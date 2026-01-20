<?php

namespace App\Core;

class Controller
{

    protected function redirect(string $url): void
    {
        header("Location: {$url}");
        exit;
    }

    protected function json(array $data, int $statusCode = 200): void
    {
        http_response_code($statusCode);
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }

    protected function isAuthenticated(): bool
    {
        return isset($_SESSION['user_id']);
    }

    protected function requireAuth(): void
    {
        if (!$this->isAuthenticated()) {
            $this->redirect('/login');
        }
    }

    protected function getUserId(): int
    {
        return $_SESSION['user_id'] ?? 0;
    }

    protected function validateCSRF(): bool
    {
        $token = $_POST['csrf_token'] ?? '';
        return CSRF::validateToken($token);
    }

    protected function requireCSRF(): void
    {
        if (!$this->validateCSRF()) {
            http_response_code(403);
            die('CSRF token validation failed');
        }
    }

    protected function sanitize(string $input): string
    {
        return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    }

    protected function sanitizeArray(array $data): array
    {
        return array_map(function ($value) {
            return is_string($value) ? $this->sanitize($value) : $value;
        }, $data);
    }
    public function view($path, $data = [])
    {
        extract($data);
        require "../app/Views/" . $path . ".php";
    }
}