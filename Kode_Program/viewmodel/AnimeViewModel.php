<?php
require_once 'model/Anime.php';

class AnimeViewModel {
    private $anime;

    public function __construct(){
        $this->anime = new Anime();
    }

    public function getAnimeList(){
        return $this->anime->getAll();
    }

    public function getAnimeById($id){
        return $this->anime->getById($id);
    }

    public function addAnime($name, $genre){
        return $this->anime->create($name, $genre);
    }

    public function updateAnime($id, $name, $genre){
        return $this->anime->update($id, $name, $genre);
    }

    public function deleteAnime($id){
        return $this->anime->delete($id);
    }
}