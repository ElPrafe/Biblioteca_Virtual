<?php
require_once './app/controllers/library.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'index'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$libraryController = new LibraryController();


// tabla de ruteo
switch ($params[0]) {
    case 'index':

        $libraryController->showLibrary();        
        break;
    case 'add':
        $libraryController->addAuthor();
        break;
    case 'delete':
        // obtengo el parametro de la acción
        $id = $params[1];
        $libraryController->deleteAuthor($id);
        break;    
    default:
        echo('404 Page not found');
        break;
}
