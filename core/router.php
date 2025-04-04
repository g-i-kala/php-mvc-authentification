<?php
namespace Core;

class Router {
    protected $routes = [];

    public function get($uri, $controller) 
    {
        $this->routes[] = [
            'uri'           => $uri,
            'controller'    => $controller,
            'method'        => 'GET'
        ];
        //dd($this->routes);
    }

    public function post($uri, $controller) 
    {
        $this->routes[] = [
            'uri'           => $uri,
            'controller'    => $controller,
            'method'        => 'POST'
        ];
    }

    public function delete($uri, $controller) 
    {
        $this->routes[] = [
            'uri'           => $uri,
            'controller'    => $controller,
            'method'        => 'DELETE'
        ];
    }

    public function patch($uri, $controller) 
    {
        $this->routes[] = [
            'uri'           => $uri,
            'controller'    => $controller,
            'method'        => 'PATCH'
        ];
    }

    public function put($uri, $controller) 
    {
        $this->routes[] = [
            'uri'           => $uri,
            'controller'    => $controller,
            'method'        => 'PUT'
        ];
    }

    public function route($uri, $method) 
    {
        foreach($this->routes as $route){
    
            if($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                
                return require_once base_path($route['controller']);
            } 
        }

        $this->abort();
    }

    public function abort($code = 404) {
        http_response_code($code); 
    
        $viewPath = base_path("app/views/{$code}.php");
        
        if (file_exists($viewPath)) {
            require_once $viewPath; 
        } else {
            require_once base_path('app/views/500.php'); 
        }
    
        exit();
    }

}