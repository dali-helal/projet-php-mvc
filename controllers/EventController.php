<?php

require_once 'models/EventModel.php';

class EventController {

    private $eventModel;

    public function __construct() {
        $this->eventModel = new EventModel();
    }


    public function index() {
       
        $events = $this->eventModel->getAllEvents();
        include 'views/event/event_list.php';
    }
    
    public function create() {
        include 'views/event/Event_form.php';
    }
    
    public function store() {
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $title = $_POST['title'];
            $description = $_POST['description'];
            $date = $_POST['date'];
            $location = $_POST['location'];
            
            $this->eventModel->createEvent($title, $description, $date, $location);
            
            header("Location: index.php?controller=EventController&action=index");
            exit();
        }
    }
    
}
?>