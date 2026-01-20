<?php
declare(strict_types=1);

namespace App\Core;

use App\Controllers\NotfoundController;

class Controller
{
    protected function view(string $view, array $data = []): void
    {
        extract($data);

        $file = __DIR__ . '/../Views/' . str_replace('.', '/', $view) . '.php';

        if (!file_exists($file)) {
            (new NotfoundController())->index();
            return;
        }

        require $file;
    }

    protected function redirect(string $path): void
    {
        header("Location: {$path}");
        exit;
    }

    protected function isPost(): bool
    {
        return ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST';
    }

    protected function post(string $key, $default = null)
    {
        return $_POST[$key] ?? $default;
    }

    protected function flash(string $key, ?string $value = null): ?string
    {
        if ($value !== null) {
            $_SESSION['_flash'][$key] = $value;
            return null;
        }

        $msg = $_SESSION['_flash'][$key] ?? null;
        unset($_SESSION['_flash'][$key]);
        return $msg;
    }
}
