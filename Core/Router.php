<?php
namespace Core;

class Router
{
    protected static $routes = [
        'POST' => [],
        'GET' => []
    ];

    public static function init($fileName='web')
    {
        $router = new static;
        require_once __DIR__."/{$fileName}.php";

        return $router;
    }

    public function get($path, $controller)
    {
        static::$routes['GET'][$path] = $controller;
    }

    public function post($path, $controller)
    {
        static::$routes['POST'][$path] = $controller;
    }

    public function getPage()
    {
        $path = Request::getPath();
        $method = Request::getMethod();

        if(array_key_exists($path, static::$routes[$method])) {
            $controller = explode('@', static::$routes[$method][$path]);
            $this->callController(...$controller);
            return static::$routes[$method][$path];
        }else{
            header('HTTP/1.1 404 Not Found');
            include "views/errors/404.php";
        }
    }

    private function callController($controller, $method)
    {
        $controller = new $controller;
        
        $controller->$method();
    }
}