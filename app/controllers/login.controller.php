<?php
require_once './app/models/login.model.php';
require_once './app/views/login.view.php';
require_once './helpers/auth.helper.php';
//$userPassword=password_hash('tpewebautores', PASSWORD_BCRYPT);
class LoginController {
    private $model;
    private $view;
    private $authHelper;

    public function __construct() {
        $this->model = new LoginModel();
        $this->view = new LoginView();
        $this->authHelper = new AuthHelper();
    }


    public function login() {
        $logged = $this->authHelper->isLoggedIn();
        $this->view->showLogin($logged);
    }
    
    public function loginAttempt(){
        if(!empty($_POST['username'])&& !empty($_POST['password'])){
            $username=$_POST['username'];
            $password=$_POST['password'];   
            $user = $this->model->getByUsername($username);
            
            //Si el usuario existe y las contraseñas coinciden   
            if($user && password_verify($password,($user->contraseña))){
                //PONER $_SESION ACA
                $this->authHelper->login($user);                
                header("Location: " . BASE_URL);                
                
            }else{
                $this->view->showLogin();
                echo  'Login failed';

            }
        }     
    }

    

    

}

