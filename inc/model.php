<?php
require_once 'config.php';

class VoteModel {

    public function getStates() {
        global $pdo;
        $sql = "SELECT * FROM states";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $states = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (!$states) {
            return null;
        }
        return $states;
    }

    public function getCities($stateId = null) {
        if (!$stateId) {
            return null;
        }
        global $pdo;
        $sql = "SELECT * FROM cities WHERE state_id = :state_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':state_id', $stateId, PDO::PARAM_INT);
        $stmt->execute();
        $cities = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (!$cities) {
            return null;
        }
        return $cities;
    }

    public function getCandidates() {
        global $pdo;
        $sql = "SELECT * FROM candidates";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $candidates = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (!$candidates) {
            return null;
        }
        return $candidates;
    }

    public function saveVote($data) {
        global $pdo;
        $sql = "INSERT INTO votes (fullname, nickname, rut, email, state_id, city_id, candidate_id) VALUES (:fullname, :nickname, :rut, :email, :state_id, :city_id, :candidate_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':fullname', $data['fullname'], PDO::PARAM_STR);
        $stmt->bindParam(':nickname', $data['nickname'], PDO::PARAM_STR);
        $stmt->bindParam(':rut', $data['rut'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(':state_id', $data['state'], PDO::PARAM_INT);
        $stmt->bindParam(':city_id', $data['city'], PDO::PARAM_INT);
        $stmt->bindParam(':candidate_id', $data['candidate'], PDO::PARAM_INT);
        $stmt->execute();
        $vote = $stmt->rowCount();
        if (!$vote) {
            return null;
        }
        return $vote;
    }
}