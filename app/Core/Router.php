<?php
namespace App\Core;

class Router {
    private $routes = [];

<<<<<<< HEAD
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
=======
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
>>>>>>> 6e22e8134fea1452b59910e337d3577a5587a3d4
            }
        }
        echo "Route not found: $url";
    }

<<<<<<< HEAD
    public function removeQueryString($url)
    {
=======
    protected function removeQueryString($url) {
>>>>>>> 6e22e8134fea1452b59910e337d3577a5587a3d4
        if ($url != '') {
            $parts = explode('&', $url, 2);
            if (strpos($parts[0], '=') === false) {
                return rtrim($parts[0], '/');
            }
        }
        return $url;
    }
<<<<<<< HEAD

=======
>>>>>>> 6e22e8134fea1452b59910e337d3577a5587a3d4
}
