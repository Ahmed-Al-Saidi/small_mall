<?php

namespace App\controllers;

use App\Models\Product;

class AdminProductController extends beaseController
{
    public function index()
    {
        // Require admin
        $this->authorizeAdmin();

        $productModel = new Product();

        // Search query support
        $q = $_GET['q'] ?? null;
        if ($q) {
            $products = $productModel->searchProducts($q);
        } else {
            $products = $productModel->getAllProducts();
        }

        $data = ['products' => $products, 'query' => $q];
        $this->render('admin/products/index', $data);
    }

    public function create()
    {
        $this->authorizeAdmin();
        // عرض نموذج الإضافة (يمكن توسيعه لاحقاً)
        $this->render('admin/products/create');
    }

    public function store()
    {
        $this->authorizeAdmin();
        // حفظ المنتج الجديد (أساسي)
        $name = $_POST['name'] ?? null;
        $price = $_POST['price'] ?? null;
        $description = $_POST['description'] ?? null;

        if (!$name || !$price) {
            // required fields missing
            header('Location: /admin/products/create');
            exit;
        }

        $productModel = new Product();
        $insertId = $productModel->createProduct($name, $price, $description);
        if ($insertId) {
            header('Location: /admin/products');
            exit;
        } else {
            header('Location: /admin/products/create');
            exit;
        }
    }

    public function delete($id)
    {
        $this->authorizeAdmin();
        $productModel = new Product();
        $productModel->delete($id);
        header('Location: /admin/products');
        exit;
    }
}
