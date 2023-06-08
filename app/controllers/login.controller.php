<?php
require_once './app/models/login.model.php';
require_once './app/views/login.view.php';
//$userPassword=password_hash('tpewebautores', PASSWORD_BCRYPT);
class LoginController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new LoginModel();
        $this->view = new LoginView();
    }


    public function login() {
        $this->view->showLogin();
    }
    public function loginAttempt(){
        if(!empty($_POST['username'])&& !empty($_POST['password'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
     
            //Obtengo el usuario de la base de datos
            $db = new PDO('mysql:host=localhost;'.'dbname=db_library;charset=utf8', 'root', '');
            $query = $db->prepare('SELECT * FROM usuarios WHERE usuario = ?');
            $query->execute([$username]);
            $user = $query->fetch(PDO::FETCH_OBJ);
     
            //Si el usuario existe y las contraseñas coinciden
            
            
            

            if($user && password_verify($password,($user->contraseña))){
                //PONER $_SESION ACA
     
                header("Location: " . BASE_URL);                
                
            }else{
                $this->view->showLogin();
                echo  'Login failed';

            }
        }     
    }

    

}

