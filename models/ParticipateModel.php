<?php

require_once 'db_connection.php';

class ParticipateModel {

    private $db;

    public function __construct() {
        global $db;
        $this->db = $db;
    }
    public function getDataToUsed() {
        $query = "SELECT * FROM events";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function store($event_id, $user_id) {

        $stmt = $this->db->prepare("INSERT INTO event_user (event_id, user_id) VALUES (:event_id, :user_id)");
        
        // Bind parameters
        $stmt->bindParam(':event_id', $event_id);
        $stmt->bindParam(':user_id', $user_id);
  
        try {
            $stmt->execute();
            return true; 
        } catch (PDOException $e) {
            return false; 
        }
    
    }
    
}
?>