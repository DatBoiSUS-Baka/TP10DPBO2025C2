<?php
require_once 'model/ListAnime.php';

class ListAnimeViewModel{
    private $listAnime;

    public function __construct(){
        $this->listAnime = new ListAnime();
    }

    public function getListAnimeList(){
        return $this->listAnime->getAll();
    }

    public function getListAnimeById($id){
        return $this->listAnime->getById($id);
    }

    public function addListAnime($status, $user_id, $genre_id){
        return $this->listAnime->create($status, $user_id, $genre_id);
    }

    public function updateListAnime($id, $status, $user_id, $genre_id){
        return $this->listAnime->update($id, $status, $user_id, $genre_id);
    }

    public function deleteListAnime($id){
        return $this->listAnime->delete($id);
    }
}