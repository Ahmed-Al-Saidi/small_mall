<?php
namespace App\Core;
use App\Config\Database;
class Model
{
    protected $db;
    protected $table;

    public function __construct()
    {
        // Initialize the database connection
        $database = new DP();
        $this->db = $database->getConnection();
    }       
    public function GetAll()
    {
        // Fetch all records from the table
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function find($id)
    {
        // Fetch a single record by ID
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);  
}
    public function creat($data){
        // Create a new record in the table
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        $query = "INSERT INTO " . $this->table . " ($columns) VALUES ($placeholders)";
        $stmt = $this->db->prepare($query);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":" . $key, $value);
        }
        return $stmt->execute($data);

    }
}