<?php
namespace App\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Server\MiddlewareInterface;

class CorsMiddleware implements MiddlewareInterface
{
    public function process(
        ServerRequestInterface $request,
        RequestHandlerInterface $handler
    ): ResponseInterface
    {
        $response = $handler->handle($request);
        $response = $this->setHeaders($request, $response);
    
        return $response;
    }
    
    
    public function setHeaders(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface
    {
        // Calling $handler->handle() delegates control to the *next* middleware
        // In your application's queue.
        //$response = $handler->handle($request);

        if ($request->getHeader('Origin')) {
            $allowedOrigins = [
    			"https://mtdcrm.tn",
    			"https://www.mtdcrm.tn",
				"http://mtdcrm.tn",
    			"http://www.mtdcrm.tn",
				"http://localhost:3000"
			];
		if (in_array($_SERVER["HTTP_ORIGIN"], $allowedOrigins)) {
    		header("Access-Control-Allow-Origin: " . $_SERVER["HTTP_ORIGIN"]);
			}
            header('Access-Control-Allow-Methods: POST, GET, PUT, PATCH, DELETE, OPTIONS');
            header('Access-Control-Allow-Headers: *');

            if (strtoupper($request->getMethod()) === 'OPTIONS') {
                exit(0);
            }
        }

        return $response;
    }
}