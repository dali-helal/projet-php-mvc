<?php

if(isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'EventController'; // Default controller
    $action = 'index'; // Default action
}

// Include the necessary controller file
require_once 'controllers/' . $controller . '.php';


switch($controller) {
    case 'UserController':
        $userController = new UserController();
        switch($action) {
            case 'index':
                $userController->index();
                break;
             case 'create':
                $userController->create();
                break;
            case 'store':
                $userController->store();
                break;
            case 'delete':
                $userController->delete();
                break;
            case 'edit':
                $userController->edit();
            break;
            case 'updateUser':
                $userController->updateUser();
            break;
        }
        break;
    case 'EventController':
        $eventController = new EventController();
        switch($action) {
            case 'index':
                $eventController->index();
                break;
            case 'create':
                $eventController->create();
                break;
            case 'store':
                $eventController->store();
                break;
        }
        break;

}
?>
