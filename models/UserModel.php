<?php
require_once 'db_connection.php';

class UserModel {
    private $db;

    public function __construct() {
        global $db;
        $this->db = $db;
    }
    public function getAllUsers() {
        $query = "SELECT * FROM users";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }

    public function getUserDetail($userId) {
        $query = "SELECT * FROM users WHERE user_id = :user_id ";
        
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':user_id', $userId);
        
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }

    public function updateUserDetails($nom, $prenom, $email, $user_id) {
        try {
            // Prepare the SQL statement with a WHERE clause
            $stmt = $this->db->prepare("UPDATE users SET nom=:nom, prenom=:prenom, email=:email WHERE user_id=:user_id");
    
            // Bind parameters
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':user_id', $user_id);
    
            // Execute the SQL statement
            $stmt->execute();
    
            // Return true on success
            return true;
        } catch(PDOException $e) {
            // Handle the exception (e.g., log it or return false)
            return false;
        }
    }

    public function createUser($nom, $prenom, $email) {

        $stmt = $this->db->prepare("INSERT INTO users (nom, prenom, email) VALUES (:nom, :prenom, :email)");
        
        // Bind parameters
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
    
        
        try {
            $stmt->execute();
            return true; 
        } catch (PDOException $e) {
            return false; 
        }
    
    }
    public function deleteUser($userId){
        $stmt = $this->db->prepare("DELETE FROM users WHERE user_id = :user_id");
        
        // Bind parameters
        $stmt->bindParam(':user_id', $userId);
    
        try {
            $stmt->execute();
            return true; 
        } catch (PDOException $e) {
            return false; 
        }
    }
}
?>