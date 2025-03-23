<?php

use Monolog\Level;

if(!isset($_ENV['LOG_LEVEL'])) {
    $level = 'error';
} else {
    $level = $_ENV['LOG_LEVEL'];
}

// Settings
$settings = [
    'debug' => $_ENV['APP_DEBUG'] ?? false,
    'log' => [
        'name' => 'app',
        'path' => __DIR__ . '/../logs/app.log',
        'level' => Level::fromName($level),
    ],
];

return $settings;
