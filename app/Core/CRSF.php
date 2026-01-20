<?php

namespace App\Core;

class CSRF
{
    private static string $tokenKey = 'csrf_token';

    public static function generateToken(): string
    {
        if (!isset($_SESSION[self::$tokenKey])) {
            $_SESSION[self::$tokenKey] = bin2hex(random_bytes(32));
        }
        return $_SESSION[self::$tokenKey];
    }

    public static function getToken(): string
    {
        return $_SESSION[self::$tokenKey] ?? self::generateToken();
    }

    public static function validateToken(string $token): bool
    {
        if (!isset($_SESSION[self::$tokenKey])) {
            return false;
        }
        return hash_equals($_SESSION[self::$tokenKey], $token);
    }

    public static function field(): string
    {
        $token = self::getToken();
        return '<input type="hidden" name="csrf_token" value="' . htmlspecialchars($token, ENT_QUOTES, 'UTF-8') . '">';
    }

    public static function regenerateToken(): void
    {
        $_SESSION[self::$tokenKey] = bin2hex(random_bytes(32));
    }
}