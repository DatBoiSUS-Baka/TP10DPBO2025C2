<?php
require_once 'config/Database.php';

class Anime {
    private $conn;
    private $table = 'anime';

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll(){
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stms->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($name, $genre){
        $query = "INSERT INTO " . $this->table . " (nama_anime, genre_anime) VALUES (:name, :genre)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':genre', $genre);
        return $stms->execute();
    }

    public function update($id, $name, $genre){
        $query = "UPDATE " . $this->table . " SET nama_anime = :name, genre_anime = :genre WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':genre', $genre);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id){
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}