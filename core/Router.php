<?php

// core/Router.php

class Router {
    private $routes = [];
    
    public function get($route, $handler) {
        $this->routes['GET'][$route] = $handler;
    }

    public function handleRequest() {
        $method = $_SERVER['REQUEST_METHOD'];
        $route = isset($_GET['url']) ? '/' . $_GET['url'] : '/';
        
        if (isset($this->routes[$method][$route])) {
            $handler = $this->routes[$method][$route];
            
            if (is_callable($handler)) {
                call_user_func($handler);
            } else {
                $this->renderView($handler);
            }
        } else {
            $this->renderView('error.php');
        }
    }

    private function renderView($view) {
        include '../app/views/' . $view;
    }
}
