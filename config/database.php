<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

return [
    'driver'   =>$_ENV['DB_DRIVER'],     
    'host'     =>$_ENV['DB_HOST'],
    'port'     =>$_ENV['DB_PORT'],
    'dbname' =>$_ENV['DB_NAME'],
    'user' =>$_ENV['DB_USER'],
    'pass' =>$_ENV['DB_PASS'],

    'options' => [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ],
];

