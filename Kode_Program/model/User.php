<?php
require_once 'config/Database.php';

class shift{
    private $conn;
    private $table = 'user';

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll(){
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id){
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($username){
        $query = "INSERT INTO " . $this->table . "(username) VALUES (:username)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        return $stmt->execute();
    }

    public function update($id, $username){
        $query = "UPDATE " . $this->table . " SET username = :username WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id){
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->preapre($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}