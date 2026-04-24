<?php
namespace App\controllers;
use App\Models\Product;

<<<<<<< HEAD
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

?>
=======
class ShopController {
    public function index() {
        $productModel = new Product();
        $products = $productModel->getAll();
        
        // هنا يتم استدعاء صفحة العرض
        require_once __DIR__ . '/../Views/shop/index.php';
    }
}
>>>>>>> 6e22e8134fea1452b59910e337d3577a5587a3d4
