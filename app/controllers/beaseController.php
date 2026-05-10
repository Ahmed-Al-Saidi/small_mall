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

    /**
     * Ensure the current user is an admin; redirect to /login if not.
     */
    protected function authorizeAdmin()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if (empty($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
            header('Location: /login');
            exit;
        }
    }
}

