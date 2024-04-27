<?php

require_once 'db_connection.php';

class EventModel {

    private $db;

    public function __construct() {
        global $db;
        $this->db = $db;
    }

    public function getAllEvents() {
        $query = "
        SELECT e.*, COALESCE(COUNT(eu.user_id), 0) AS participants_count
        FROM events e
        LEFT JOIN Event_User eu ON e.id = eu.event_id
        GROUP BY e.id;";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }

    public function createEvent($title, $description, $date, $location) {

        $stmt = $this->db->prepare("INSERT INTO events (title, description, date, location) VALUES (:title, :description, :date, :location)");
        
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
    public function deleteEvent($event_id){
        $stmt = $this->db->prepare("DELETE FROM events WHERE id = :event_id");
        
        $stmt->bindParam(':event_id', $event_id);
    
        try {
            $stmt->execute();
            return true; 
        } catch (PDOException $e) {
            return false; 
        }
    }
    
    public function getEventDetail($event_id) {
        $query = "SELECT * FROM events WHERE id = :event_id ";
        
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':event_id', $event_id);
        
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }
    
    public function updateEventDetails($title, $description, $date, $location, $event_id) {
        try {

            $stmt = $this->db->prepare("UPDATE events SET title=:title, description=:description, date=:date, location=:location WHERE id=:event_id");
    
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':location', $location);
            $stmt->bindParam(':event_id', $event_id);
    
            $stmt->execute();
    
            return true;
        } catch(PDOException $e) {
            
            return false;
        }
    }
}
?>