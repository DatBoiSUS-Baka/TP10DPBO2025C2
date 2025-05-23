<?php
require_once 'viewmodel/AnimeViewModel.php';
require_once 'viewmodel/UserViewModel.php';
require_once 'viewmodel/ListAnimeViewModel.php';

$entity = isset($_GET['entity']) ? $_GET['entity'] : 'user';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if($entity == 'user'){
    $viewModel = new UserViewModel();
    if ($action == 'list'){
        $animeList = $viewModel->getUserList();
        require_once 'view/user_list.php';
    }elseif ($action == 'add'){
        $animes = $viewModel->getAnimes();
        $listAnimes = $viewModel->getListAnimes();
        require_once 'views/user_form.php';
    }elseif ($action == 'edit'){
        $staff = $viewModel->getUserById($_GET['id']);
        $animes = $viewModel->getAnimes();
        $listAnimes = $viewModel->getListAnimes();
        require_once 'views/user_form.php';
    }
}