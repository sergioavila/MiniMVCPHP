<?php

require_once 'model.php';

class VoteController {
    private $voteModel;

    public function __construct() {
        $this->voteModel = new VoteModel();
    }

    public function getAllStates() {
        $states = $this->voteModel->getStates();
        return json_encode($states);
    }
    public function getAllCities($id) {
        $cities = $this->voteModel->getCities($id);
        return json_encode($cities);
    }
    public function getAllCandidates() {
        $candidates = $this->voteModel->getCandidates();
        return json_encode($candidates);
    }
    public function saveVote($data) {
        if ($this->voteModel->saveVote($data)) {
            return json_encode('Gracias por tu voto.');
        } else {
            return json_encode('Ha ocurrido un error.');
        }
        header('Location: index.php');
    }
    public function checkRut($rut) {
        if($this->voteModel->checkRut($rut)){
            return json_encode(true);
        }else{
            return json_encode('Este RUT ya esta registrado.');
        }
    }
}