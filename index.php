<?php
    session_start();
    //errores
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once 'inc/model.php';
    require_once 'inc/controller.php';
    $voteController = new VoteController();

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['action']) && $_GET['action'] === 'getStates') {
            echo $voteController->getAllStates();
            exit();
        }
        if (isset($_GET['action']) && $_GET['action'] === 'getCities' && isset($_GET['id'])) {
            echo $voteController->getAllCities($_GET['id']);
            exit();
        }
        if (isset($_GET['action']) && $_GET['action'] === 'getCandidates') {
            echo $voteController->getAllCandidates();
            exit();
        }
    }
    require_once 'inc/view.php';
?>