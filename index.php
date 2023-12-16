<?php
session_start();

require_once 'config.php';
require_once 'inc/model.php';
require_once 'inc/controller.php';

$votoController = new VotoController();
$votoController->manejarSolicitud();
require_once 'inc/view.php';
?>