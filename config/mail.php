<?php
return [
    // SMTP Host (ex: smtp.gmail.com)
    'host' => $_ENV['MAIL_HOST'] ?? '',

    // SMTP Port (587 TLS / 465 SSL)
    'port' => (int)($_ENV['MAIL_PORT'] ?? 587),

    // TLS / SSL
    'encryption' => $_ENV['MAIL_ENCRYPTION'] ?? '',

    // SMTP Login
    'username' => $_ENV['MAIL_USERNAME'] ?? '',
    'password' => $_ENV['MAIL_PASSWORD'] ?? '',

    // From
    'from_email' => $_ENV['MAIL_FROM_EMAIL'] ?? '',
    'from_name'  => $_ENV['MAIL_FROM_NAME'] ?? '',
];
