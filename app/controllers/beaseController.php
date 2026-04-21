<?php
namespace App\controllers;
class beaseController
{
    protected function render($view, $data = [])
    {
        // Extract data to be used in the view
        extract($data);
        $viewPath = __DIR__ . '/../Views/' . $view . '.php';
        
if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            echo "View not found: " . $view;
        }
}
}
