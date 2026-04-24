<?php
namespace App\Core;

class Router {
    private $routes = [];

    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }

    public function dispatch($url)
    {
        $url = $this->removeQueryString($url);
        if (array_key_exists($url, $this->routes)) {
            $controller = 'App\\controllers\\' . $this->routes[$url]['controller'];
            $action = $this->routes[$url]['action'];
            if (class_exists($controller)) {
                $controllerObject = new $controller();
                if (method_exists($controllerObject, $action)) {
                    $controllerObject->$action();
                } else {
                    echo "Method " . $action . " not found.";
                }
            } else {
                echo "Controller " . $controller . " not found.";
            }
        } else {
            echo "Route not found: " . $url;
        }
    }

    public function removeQueryString($url)
    {
        if ($url != '') {
            $parts = explode('&', $url, 2);
            if (strpos($parts[0], '=') === false) {
                return rtrim($parts[0], '/');
            }
        }
        return $url;
    }

}
?>