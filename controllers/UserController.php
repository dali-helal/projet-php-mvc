<?php
require_once 'models/UserModel.php';

class UserController {

    private $userModal;

    public function __construct() {
        $this->userModal = new UserModel();
    }


    public function index() {
        $users = $this->userModal->getAllUsers();
        include 'views/user/user_list.php';
    }
    public function create() {
        include 'views/user/user_form.php';
    }
    
    public function store() {
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            
            $this->userModal->createUser($nom, $prenom, $email);
            
            header("Location: index.php?controller=UserController&action=index");
            exit();
        }
    }
    public function delete(){
        if (isset($_GET['user_id'])) {
            $user_id = $_GET['user_id'];
            
            $this->userModal->deleteUser($user_id);
            
            header("Location: index.php?controller=UserController&action=index");
            exit();
        }
    }
    public function edit(){
        if (isset($_GET['user_id'])) {
            $user_id = $_GET['user_id'];

            $user= $this->userModal->getUserDetail($user_id);

            include 'views/user/update_user.php';

        }
    }
    public function updateUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $user_id = $_POST['user_id'];
            
            $success = $this->userModal->updateUserDetails($nom, $prenom, $email,$user_id);
            
            if ($success) {
             
               header("Location: index.php?controller=UserController&action=index");
          
            }
        }
    }


}
?>
