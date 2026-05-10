<?php

namespace App\Models;

use App\Core\Model;
use PDO;

class Product extends Model
{
    protected $table = 'products';
    public function __construct()
    {
        parent::__construct();
    }
    public function getProductsByCat($category_id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE category_id = :category_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function searchProducts($keyword)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE name LIKE :keyword";
        $stmt = $this->db->prepare($query);
        $like = "%" . $keyword . "%";
        $stmt->bindParam(':keyword', $like);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Convenience wrapper to match controllers calling getAllProducts()
    public function getAllProducts()
    {
        return $this->getAll();
    }

    public function createProduct($name, $price, $description = null)
    {
        $query = "INSERT INTO " . $this->table . " (name, price, description) VALUES (:name, :price, :description)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':price', $price);
        $stmt->bindValue(':description', $description);
        if ($stmt->execute()) {
            return $this->db->lastInsertId();
        }
        return false;
    }
}
