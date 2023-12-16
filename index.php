<?php
session_start();

require_once 'inc/model.php';
require_once 'inc/controller.php';

$voteController = new VoteController();
$voteController->index();
require_once 'inc/view.php';
?>