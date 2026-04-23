<?php
sql_auto_register(function($class) {
    $prefix='App\\';
    $base_dir = __DIR__ . '/../app/';
    $len=strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
        $relative_class = substr($class, $len);
        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
        if (file_exists($file)) {
            require $file;
        }
    }
);

use App\Core\Router;

$router = new Router();

// تعريف المسارات
$router->add('', ['controller' => 'HomeController', 'action' => 'index']);
$router->add('shop', ['controller' => 'ShopController', 'action' => 'index']);
$router->add('admin/products', ['controller' => 'AdminProductController', 'action' => 'index']);
$router->add('admin/products/delete/{id}', ['controller' => 'AdminProductController', 'action' => 'delete']);

$url = $_GET['url'] ?? '';
$router->dispatch($url);

?>