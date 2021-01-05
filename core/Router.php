<?php 

class Router {

    protected $routes = [                  //////// DIFF to VID

        'GET' => [],

        'POST' => []

    ];

    public static function load($file) {
        
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $contoller) {

        $this->routes['GET'][$uri] = $contoller;

    }

    public function post($uri, $contoller) {

        $this->routes['POST'][$uri] = $contoller;

    }


    public function direct($uri, $requestType) {

        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }
        throw new Exception('no routes defined for this uri');
    }




}