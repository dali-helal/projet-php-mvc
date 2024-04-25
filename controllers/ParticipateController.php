<?php
require_once 'models/ParticipateModel.php';
require_once 'models/UserModel.php';
require_once 'models/EventModel.php';

class ParticipateController {

    private $ParticipateModel;

    public function __construct() {
        $this->ParticipateModel = new ParticipateModel();
    }
    public function index() {
     
        $eventModel = new EventModel();
        $userModel = new UserModel();
        
        $events = $eventModel->getAllEvents();
        $users = $userModel->getAllUsers();
        
     
        include 'views/event_users/event_users_form.php';
    }
    public function store() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $event_id = $_POST['event'];
            $user_id = $_POST['user']; 
            $this->ParticipateModel->store($event_id, $user_id);
            header("Location: index.php?controller=EventController&action=index");
            exit();
            
        }
     
    }
    
}
?>
