<?php

class AuthHelper {
    public function __construct() {}

    public function login($user) {
        // INICIO LA SESSION Y LOGUEO AL USUARIO
        session_start();        
        $_SESSION['USERNAME'] = $user->usuario;
    }

    public function logout() {
        session_start();
        session_destroy();
    }

    public function checkLoggedIn() {
        
        session_start();
        if (!isset($_SESSION['ID_USER'])) {
            header('Location: ' . 'login');
            die();
        } 
    }
    public function isLoggedIn() {
        session_start();
        if (!isset($_SESSION['USERNAME'])) {            
            return false;
        }       
        return true;
    }

    public function getLoggedUserName() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        return $_SESSION['USERNAME'];
    }
}
