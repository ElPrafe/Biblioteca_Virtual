<?php
require_once './app/models/library.model.php';
require_once './app/views/library.view.php';

class LibraryController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new LibraryModel();
        $this->view = new LibraryView();
    }

    public function showLibrary() {
        $library = $this->model->getLibrary();
        $this->view->showLibrary($library);
    }
    public function showAuthors() {
        $authors = $this->model->getAllAuthors();
        $this->view->showAuthors($authors);
    }

    
    function addAuthor() {
        // TODO: validar entrada de datos

        $name = $_POST['name'];
        //$img_autor = $_POST['img_autor']; VER COMO CARGAR IMAGENES
        $age = $_POST['age'];
        $nacionality = $_POST['nacionality'];

        $id = $this->model->addAuthor($name, $age, $nacionality);

        header("Location: " . BASE_URL); 
    }
   
    function deleteAuthor($id) {//ver que pasa con sus libros asociados
        $this->model->deleteAuthorById($id);
        header("Location: " . BASE_URL);
    }

    

}


