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
}
