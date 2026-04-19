<?php
class DP
{
    public $default = 'default';

    public function __construct()
    {
        // Load the database configuration from a file or environment variables
        $this->default = [
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'database' => 'small_mall',
        ];
    }

    public function getConnection()
    {
        // Create a connection to the database using the configuration
        $conn = new pdo(
            "mysql:host=" . $this->default['host'] . ";dbname=" . $this->default['database'],
            $this->default['username'],
            $this->default['password']
        );
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
            echo "Connection True";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
    public function queryall($sql)
    {
        $conn = $this->getConnection();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function queryone($sql)
    {
        $conn = $this->getConnection();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function execute($sql)
    {
        $conn = $this->getConnection();

        $stmt = $conn->prepare($sql);
        return $stmt->execute();
    }
    public function insert($table, $data)
    {
        $conn = $this->getConnection();
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $stmt = $conn->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        return $stmt->execute();
    }
    public function update($table, $data, $where)
    {
        $conn = $this->getConnection();
        $set = "";
        foreach ($data as $key => $value) {
            $set .= "$key = :$key, ";
        }
        $set = rtrim($set, ", ");
        $sql = "UPDATE $table SET $set WHERE $where";
        $stmt = $conn->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        return $stmt->execute();
    }
    public function delete($table, $where)
    {
        $conn = $this->getConnection();
        $sql = "DELETE FROM $table WHERE $where";
        $stmt = $conn->prepare($sql);
        return $stmt->execute();
    }
    public function select($table, $columns = "*", $where = null)
    {
        $conn = $this->getConnection();
        $sql = "SELECT $columns FROM $table";
        if ($where) {
            $sql .= " WHERE $where";
        }
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
