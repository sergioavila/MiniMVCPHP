<?php
    require_once 'config.php';
    require_once 'inc/model.php';
    require_once 'inc/controller.php';
    $voteController = new VoteController();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['action']) && $_POST['action'] === 'saveVote') {
            if($voteController->saveVote($_POST)){
                return $voteController->saveVote($_POST);
            }
            exit();
        }
        //if is checkrut
        if (isset($_POST['action']) && $_POST['action'] === 'checkRut' && isset($_POST['rut'])) {
            if($voteController->checkRut($_POST['rut'])){
                echo json_encode($voteController->checkRut($_POST['rut']));
            };
        }
    }else {
        echo json_encode(array('status' => 'error'));
    }