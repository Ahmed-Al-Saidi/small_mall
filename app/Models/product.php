<?php 
namespace App\Models;
use App\Core\Model;
class Product extends Model
{
    protected $table = 'products';
    public function __construct()
    {
        parent::__construct();
    }
    public function getProductsByCat()
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
        $stmt->bindParam(':keyword', $keyword);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}