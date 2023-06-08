<?php
require_once './app/controllers/author.controller.php';
require_once './app/controllers/book.controller.php';
require_once './app/controllers/login.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'author/all'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$authorController = new AuthorController();
$bookController = new BookController();
$loginController = new LoginController();


// tabla de ruteo
switch ($params[0]) {
    case 'author':
        switch ($params[1]) {
            case 'all':
                $authorController->showAuthors();  
                break;
            case 'id':
                $authorController->showAuthor($params[2]);   
                break;
            case 'add':
                $authorController->addAuthor(); 
                break;
            case 'edit':
                $authorController->showAuthors();  
                break;
            case 'delete':
                $id = $params[2];
                $authorController->deleteAuthor($id); 
                break;            
            default:
                echo('404 Page not found');
                break;
        }              
        break;  
    case 'book':
        switch ($params[1]) {
            case 'all':
                $bookController->showBooks(); 
                break;
            case 'id':
                $bookController->showBook($params[2]); 
                break;
            default:
            echo('404 Page not found');
                break;
        }     
        break; 
    case 'login':
        $loginController->login();
        break;
    case 'loginAttempt':
        
        $loginController->loginAttempt();

        break;
    default:
        echo('404 Page not found');
        break;
}
