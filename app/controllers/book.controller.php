<?php
require_once './app/models/book.model.php';
require_once './app/views/book.view.php';
require_once 'helpers/auth.helper.php';

class BookController {
    private $model;
    private $view;
    private $authHelper;

    public function __construct() {
        $this->model = new BookModel();
        $this->view = new BookView();
        $this->authHelper = new AuthHelper();
    }

    public function showBook($id) {
        $logged = $this->authHelper->isLoggedIn();//Si no esta loggeado, muestra menos cosas
        $book = $this->model->getBook($id);        
        $this->view->showBook($book,$logged);
    }
    public function showBooks() {
        $logged = $this->authHelper->isLoggedIn();//Si no esta loggeado, muestra menos cosas
        $books = $this->model->getBooks();
        $this->view->showBooks($books, $logged);
    }

    
    public function addBook() {
        // TODO: validar entrada de datos
        $this->authHelper->checkLoggedIn();//Si no esta loggeado, corta la ejecucion
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $genre = $_POST['genre'];
        $img = $_POST['img'];
        $author = $_POST['author'];//verificar que el autor exista en la base de datos antes de ingresar el dato
        $author_id = '';
        $id = $this->model->addBook($title, $desc, $genre, $img, $author_id);
        header("Location: " . BASE_URL); 
    }
   
    public function deleteBook($id) {//ver que pasa con sus libros asociados
        $this->authHelper->checkLoggedIn();//Si no esta loggeado, corta la ejecucion
        $this->model->deleteBookById($id);
        header("Location: " . BASE_URL);
    }  
    
    public function editBookById($id) {
        $this->authHelper->checkLoggedIn();//Si no esta loggeado, corta la ejecucion
        
    }

}


