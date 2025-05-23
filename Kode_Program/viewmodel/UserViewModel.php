<?php
require_once 'model/User.php';
require_once 'model/Anime.php';
require_once 'model/ListAnime.php';


class UserViewModel{
    private $user;
    private $anime;
    private $listAnime;

    public function __construct(){
        $this->user = new User();
        $this->anime = new Anime();
        $this->listAnime = new ListAnime();
    }

    public function getUserList(){
        return $this->user->getAll();
    }

    public function getUserById($id){
        return $this->user->getById($id);
    }

    public function getAnimes(){
        return $this->anime->getAll();
    }

    public function getListAnimes(){
        return $this->listAnime->getAll();
    }

    public function addUser($name){
        return $this->user->create($name);
    }

    public function updateUser($id, $name){
        return $this->user->update($id, $name);
    }

    public function deleteUser($id){
        return $this->user->delete($id);
    }
}