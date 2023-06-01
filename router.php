<?php
require_once './app/controllers/author.controller.php';
require_once './app/controllers/book.controller.php';
require_once './app/controllers/login.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'index'; // acción por defecto
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
    case 'index':

        $authorController->showAuthors();        
        break;
    case 'add':
        $authorController->addAuthor();
        break;
    case 'delete':
        // obtengo el parametro de la acción
        $id = $params[1];
        $authorController->deleteAuthor($id);
        break;   
    case 'login':
        $loginController->login();
        break;
    default:
        echo('404 Page not found');
        break;
}
