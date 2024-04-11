<?php

require_once 'db_connection.php';

class EventModel {

    private $db;

    public function __construct() {
        global $db;
        $this->db = $db;
    }

    public function getAllEvents() {
        $query = "SELECT * FROM events";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }

    public function createEvent($title, $description, $date, $location) {

        $stmt = $this->db->prepare("INSERT INTO events (title, description, date, location) VALUES (:title, :description, :date, :location)");
        
        // Bind parameters
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':location', $location);
        
        try {
            $stmt->execute();
            return true; 
        } catch (PDOException $e) {
            return false; 
        }
    
    }
    
   
    
}
?>