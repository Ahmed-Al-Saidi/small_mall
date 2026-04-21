<?php
namespace App\controllers;
use App\Models\Product;
class ShopController extends beaseController
{
    public function index()
    {
        $productModel = new Product();
        $products = $productModel->getAllProducts();
        $data = [
            'title' => 'Shop',
            'products' => $products
        ];
        $this->render('shop/index', $data);

   }
}
