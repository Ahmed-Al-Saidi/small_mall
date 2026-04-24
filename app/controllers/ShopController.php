<?php
namespace App\controllers;
use App\Models\Product;

class ShopController {
    public function index() {
        $productModel = new Product();
        $products = $productModel->getAll();
        
        // هنا يتم استدعاء صفحة العرض
        require_once __DIR__ . '/../Views/shop/index.php';
    }
}
