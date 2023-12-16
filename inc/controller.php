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
    public function getAllCities() {
        $cities = $this->voteModel->getCities();
        return json_encode($cities);
    }
    public function getAllCandidates() {
        $candidates = $this->voteModel->getCandidates();
        return json_encode($candidates);
    }

}