<?php

namespace Project\Name\Middleware;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Psr\Log\LoggerInterface;

final class BeforeMiddleware implements MiddlewareInterface
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function process(Request $request, RequestHandler $handler): Response
    {
        // Get client IP address and user agent
        $ip = $request->getServerParams()['REMOTE_ADDR'] ?? 'unknown';
        $ua = $request->getServerParams()['HTTP_USER_AGENT'] ?? 'unknown';

        // Log the request
        $this->logger->info('Incoming request', [
            'ip' => $ip,
            'user_agent' => $ua,
            'time' => date('Y-m-d H:i:s')
        ]);

        // Continue processing the request
        return $handler->handle($request);
    }
}
