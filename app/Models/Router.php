<?php
namespace Models;
class Router
{
    private $routes = [];

    public function addRoute($method, $path, $callback) {

        $this->routes[] = ['method' => $method, 'path' => $path, 'callback' => $callback];

    }


    public function dispatch($requestedMethod, $requestedPath,$themplates=null) {
        foreach ($this->routes as $route) {
            if ($this->match($route, $requestedMethod, $requestedPath)) {
                call_user_func($route['callback']);
                return;
            }
        }
        $this->sendNotFoundResponse();


    }

    private function match($route, $requestedMethod, $requestedPath) {
        return $route['method'] === $requestedMethod && $route['path'] === $requestedPath;
    }

    private function sendNotFoundResponse() {
        http_response_code(404);
        echo '404 Not Found';
    }



}