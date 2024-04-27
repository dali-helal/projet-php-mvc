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
    public function delete(){
        if (isset($_GET['event_id'])) {
            $event_id = $_GET['event_id'];
            
            $this->eventModel->deleteEvent($event_id);
            
            header("Location: index.php?controller=EventController&action=index");
            exit();
        }
    }
    public function edit(){
        if (isset($_GET['event_id'])) {
            $event_id = $_GET['event_id'];

            $event= $this->eventModel->getEventDetail($event_id);

            include 'views/event/update_event.php';

        }
    }
    
    public function updateEvent() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            foreach ($_POST as $key => $value) {
              echo $key . ': ' . $value . '<br>';
            }

            $title = $_POST['title'];
            $description = $_POST['description'];
            $date = $_POST['date'];
            $location = $_POST['location'];
            $event_id = $_POST['event_id'];
            
            $success = $this->eventModel->updateEventDetails($title, $description, $date, $location,$event_id);
            
            if ($success) {
             
               header("Location: index.php?controller=EventController&action=index");
          
            }
        }
    }

}
?>