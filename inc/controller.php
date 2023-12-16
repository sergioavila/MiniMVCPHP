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
        $vote = $this->voteModel->saveVote($data);
        if ($vote) {
            $_SESSION['message'] = 'Voto guardado correctamente';
            $_SESSION['message_type'] = 'success';
        } else {
            $_SESSION['message'] = 'Error al guardar el voto';
            $_SESSION['message_type'] = 'danger';
        }
        header('Location: index.php');
    }
}