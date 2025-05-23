<?php
require_once 'config/Database.php';

class ListAnime{
    private $conn;
    private $table = 'list_anime';

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll(){
        $query = "SELECT l.*, u.username, a.nama_anime, a.genre_anime
                FROM " . $this->table . " l JOIN anime a ON l.anime_id = a.id
                JOIN user u ON l.user_id = u.id";
        $stmt = $this->conn->prepare($query);
        $stmt->exectue();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id){
        $query = "SELECT l.*, u.username, a.nama_anime, a.genre_anime
                FROM " . $this->table . " l JOIN anime a ON l.anime_id = a.id
                JOIN user u ON l.user_id = u.id WHERE l.id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($status, $user_id, $anime_id){
        $query = "INSERT INTO " . $this->table . " (status, user_id, anime_id) VALUES (:status, :user_id, :anime_id)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':anime_id', $anime_id);
        return $stmt->execute();
    }

    public function update($id, $status, $user_id, $anime_id){
        $query = "UPDATE " . $this->table . " SET status = :status, user_id = :user_id, anime_id = :anime_id WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':anime_id', $anime_id);
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