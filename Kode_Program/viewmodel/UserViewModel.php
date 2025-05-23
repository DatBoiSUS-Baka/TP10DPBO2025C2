<?php
require_once 'model/User.php';

class UserViewModel{
    private $user;

    public function __construct(){
        $this->user = new User();
    }

    public function getUserList(){
        return $this->user->getAll();
    }

    public function getUserById($id){
        return $this->user->getById($id);
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