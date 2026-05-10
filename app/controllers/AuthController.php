<?php

namespace App\controllers;

class AuthController extends beaseController
{
    public function login()
    {
        // Show login form
        $this->render('auth/login');
    }

    public function authenticate()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // Simple credential check (replace with DB in production)
        $admins = [
            'admin' => 'admin123'
        ];

        if (isset($admins[$username]) && $admins[$username] === $password) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
            $_SESSION['is_admin'] = true;
            $_SESSION['username'] = $username;
            header('Location: /admin/products');
            exit;
        }

        $this->render('auth/login', ['error' => 'بيانات الدخول غير صحيحة']);
    }

    public function logout()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        session_unset();
        session_destroy();
        header('Location: /');
        exit;
    }
}
