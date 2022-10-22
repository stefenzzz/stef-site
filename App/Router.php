<?php

namespace App;

class Router
{
    private array $routes;
    private string $requestMethod;
    private string $requestUri;

    public function __construct(string $requestMethod, string $requestUri)
    {
        $this->requestMethod = strtolower($requestMethod);
        $this->requestUri = strtolower($requestUri);
    }
    public function register(string $method, string $route, array $action)
    {
        $this->routes[$method][$route] = $action;
        return $this;
    }
    public function get(string $route,array $action)
    {
        return $this->register('get', $route,$action);
    }
    public function post(string $route,array $action)
    {
        return $this->register('post', $route,$action);
    }
    public function resolve()
    {
        $route = explode('?',$this->requestUri)[0];
        $action = $this->routes[$this->requestMethod][$route] ?? null;
        
        if(is_array($action))
        {
            [$class,$method] = $action;
            if(class_exists($class))
            {
                if(method_exists($class,$method))
                {
                    return call_user_func_array([new $class,$method],[]);
                }
            }
        }
        throw new \Exception('404 not found');
    }
}