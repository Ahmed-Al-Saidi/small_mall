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

        // If no user id in session, redirect to login
        if (empty($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }

        // Verify role from DB
        $userModel = new \App\Models\User();
        $user = $userModel->findById($_SESSION['user_id']);
        if (!$user || (empty($user['is_admin']) && ($user['role'] ?? '') !== 'admin')) {
            header('Location: /login');
            exit;
        }
    }
}
