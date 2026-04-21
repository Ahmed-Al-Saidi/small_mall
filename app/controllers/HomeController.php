<?php
namespace App\controllers;
class HomeController extends beaseController
{
    public function index()
    {
        $data = [
            'title' => 'Welcome to Small Mall',
            'message' => 'This is the home page of our small mall application.'
        ];
        $this->render('home/index', $data);
    }
}
?>