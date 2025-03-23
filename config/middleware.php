<?php

use Slim\App;
use Project\Name\Middleware\BeforeMiddleware;

return function (App $app) {
    // Parse json, form data and xml
    $app->addBodyParsingMiddleware();

    // Add the Slim built-in routing middleware
    $app->addRoutingMiddleware();

    /** @var bool $debug */
    $debug = $app->getContainer()->get('settings')['debug'];

    // Handle exceptions
    $app->addErrorMiddleware($debug, true, $debug);

    // Add custom middleware
    $app->add(BeforeMiddleware::class);
};
