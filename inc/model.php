<?php
require_once 'config.php';
class VoteModel {
    public function getStates() {
        global $pdo;
        $sql = "SELECT * FROM states";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $states = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $states;
    }
}
