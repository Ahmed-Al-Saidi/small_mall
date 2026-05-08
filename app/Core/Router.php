<?php
namespace App\Core;

class Router {
    private $routes = [];


    public function add($route, $params) {
        // تحويل الروابط إلى تعبيرات نمطية (Regex) لدعم المتغيرات مثل {id}
        $route = preg_replace('/\//', '\\/', $route);
        $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z0-9-]+)', $route);
        $route = '/^' . $route . '$/i';
        $this->routes[$route] = $params;
    }

    public function dispatch($url) {
        $url = $this->removeQueryString($url);
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        $params[$key] = $match;
                    }
                }

                $controller = 'App\\controllers\\' . $params['controller'];
                $action = $params['action'];

                if (class_exists($controller)) {
                    $controllerObject = new $controller();
                    if (method_exists($controllerObject, $action)) {
                        unset($params['controller']);
                        unset($params['action']);
                        call_user_func_array([$controllerObject, $action], $params);
                    } else {
                        echo "Method $action not found in $controller";
                    }
                } else {
                    echo "Controller $controller not found";
                }
                return; 
            }
        }
        echo "Route not found: $url";
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
