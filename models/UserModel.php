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
            $stmt = $this->db->prepare("UPDATE users SET nom=:nom, prenom=:prenom, email=:email WHERE user_id=:user_id");
    
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':user_id', $user_id);

            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }

    public function createUser($nom, $prenom, $email) {

        $stmt = $this->db->prepare("INSERT INTO users (nom, prenom, email) VALUES (:nom, :prenom, :email)");
        
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