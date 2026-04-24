<?php
namespace App\controllers;
use App\Models\Product;

class AdminProductController {
    public function index() {
        $productModel = new Product();
        $products = $productModel->getAll();
        require_once __DIR__ . '/../Views/admin/products/index.php';
    }

    public function create() {
        // عرض نموذج الإضافة
    }

    public function store() {
        // حفظ المنتج الجديد
    }

    public function delete($id) {
        $productModel = new Product();
        $productModel->delete($id);
        header('Location: /admin/products');
    }
}
