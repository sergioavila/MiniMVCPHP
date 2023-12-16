<?php

require_once 'model.php';

class VotoController {
    private $votoModel;

    public function __construct() {
        $this->votoModel = new VotoModel();
    }

    public function manejarSolicitud() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario_id = $_SESSION['usuario_id'];
            $opcion_id = $_POST['opcion'];
            $this->votoModel->guardarVoto($usuario_id, $opcion_id);
        }
    }
}