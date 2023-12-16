<?php

require_once 'model.php';

class VoteController {
    private $voteModel;

    public function __construct() {
        $this->voteModel = new VoteModel();
    }

    public function index() {
        $states = $this->voteModel->getStates();
        echo json_encode($states);
    }
}