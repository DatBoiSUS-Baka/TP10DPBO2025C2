<?php
class Database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "tp10";
    private $conn;

    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:hosts=" . $this->host . ";dbname=" . $this->database, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOExeption $e){
            echo "Connection error: " . $e->getMessage();
        }
        return $this->conn;
    }
}