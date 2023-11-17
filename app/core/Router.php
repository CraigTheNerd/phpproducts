<?php

namespace core;

use core\Response;
use JetBrains\PhpStorm\NoReturn;

class Router
{
    private array $routes = [];

    /**
     * @param string $method
     * @param string $uri
     * @param string $controller
     * @return $this
     */
    public function add(string $method, string $uri, string $controller) : Router
    {
//        $this->routes[] = compact('method', 'uri', 'controller');

        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
        ];

        return $this;
    }

    /**
     * @param string $uri
     * @param string $controller
     * @return $this
     */
    public function get(string $uri, string $controller) : Router
    {
        return $this->add('GET', $uri, "{$controller}.php");
    }

    public function post(string $uri, string $controller) : Router
    {
        return $this->add('POST', $uri, "{$controller}.php");
    }

    /**
     * @param string $uri
     * @param string $controller
     * @return $this
     */
    public function put(string $uri, string $controller) : Router
    {
        return $this->add('PUT', $uri, $controller);
    }

    /**
     * @param string $uri
     * @param string $controller
     * @return $this
     */
    public function patch(string $uri, string $controller) : Router
    {
        return $this->add('PATCH', $uri, $controller);
    }

    /**
     * @param string $uri
     * @param string $controller
     * @return $this
     */
    public function delete(string $uri, string $controller) : Router
    {
        return $this->add('DELETE', $uri, $controller);
    }

    /**
     * @param string $uri
     * @param string $method
     * @return string
     */
    public function route(string $uri, string $method) : string
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require app_path($route['controller']);
            }
        }

        $this->abort();
    }

    #[NoReturn] protected function abort(int $code = Response::NOT_FOUND): void
    {
        http_response_code($code);
        require app_path("controllers/errors/{$code}.php");
        die;
    }

}
