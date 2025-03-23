<?php

use Monolog\Level;

// Settings
$settings = [
    'debug' => $_ENV['APP_DEBUG'] ?? false,
    'log' => [
        'name' => 'app',
        'path' => __DIR__ . '/../logs/app.log',
        'level' => Level::fromName($_ENV['LOG_LEVEL']) ?? Level::Error,
    ],
];

return $settings;
