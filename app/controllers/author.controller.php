<?php
require_once './app/models/author.model.php';
require_once './app/views/author.view.php';

class AuthorController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new AuthorModel();
        $this->view = new AuthorView();
    }

    public function showAuthors() {
        $authors = $this->model->getAuthors();
        $this->view->showAuthors($authors);
    }

    public function showAuthor() {
        $author = $this->model->getAuthor();
        $this->view->showAuthor($author);
    }

    
    function addAuthor() {
        // TODO: validar entrada de datos

        $name = $_POST['name'];
        $img= $_POST['img'];
        $date = $_POST['date'];
        $nacionality = $_POST['nacionality'];
        $id = $this->model->addAuthor($name, $img, $date, $nacionality);

        header("Location: " . BASE_URL); 
    }
   
    function deleteAuthor($id) {//ver que pasa con sus libros asociados
        $this->model->deleteAuthorById($id);
        header("Location: " . BASE_URL);
    }  

    public function editAuthorById($id) {
        
    }

}


