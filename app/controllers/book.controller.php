<?php
require_once './app/models/book.model.php';
require_once './app/views/book.view.php';
require_once 'helpers/auth.helper.php';
require_once './app/models/author.model.php';

class BookController {
    private $model;
    private $modelAuthor;
    private $view;
    private $authHelper;

    public function __construct() {
        $this->model = new BookModel();
        $this->modelAuthor = new AuthorModel();
        $this->view = new BookView();
        $this->authHelper = new AuthHelper();
    }

    public function showBook($id) {
        $logged = $this->authHelper->isLoggedIn();//Si no esta loggeado, muestra menos cosas
        $book = $this->model->getBookById($id);        
        $this->view->showBook($book,$logged);
    }
    public function showBooks() {
        $logged = $this->authHelper->isLoggedIn();//Si no esta loggeado, muestra menos cosas
        $books = $this->model->getBooks();
        $this->view->showBooks($books, $logged);
    }

    public function addBookScreen() {        
        $this->authHelper->checkLoggedIn();//Si no esta loggeado corta la ejecucion  
        $authors = $this->modelAuthor->getAuthors();
        $this->view->showAddBook($authors);        
    }
    
    public function addBook() {
        // TODO: validar entrada de datos
        $this->authHelper->checkLoggedIn();//Si no esta loggeado, corta la ejecucion
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $genre = $_POST['genre'];
        $img = $_POST['img'];
        $idAuthor = $_POST['author'];//verificar que el autor exista en la base de datos antes de ingresar el dato
        if ($this->checkAddForm($title,$idAuthor)){
            $author = $this->modelAuthor->getAuthorById($idAuthor);
            $idBook = $this->model->addBook($title, $desc, $genre, $img, $idAuthor);
            $this->showBook($idBook);
        }        
    }    
   
    public function deleteBook($id) {//ver que pasa con sus libros asociados
        $this->authHelper->checkLoggedIn();//Si no esta loggeado, corta la ejecucion
        $this->model->deleteBookById($id);
        $this->showBooks();
        
    }  
    
    public function editBookById($id) {
        $this->authHelper->checkLoggedIn();//Si no esta loggeado, corta la ejecucion        
    }

    private function checkAddForm($title, $idAuthor){
        $book = $this->model->getBookByTitle($title);
        if ($book && $book->id_autor == $idAuthor){//Se fija si ya hay un libro con ese nombre.
            $this->addBookScreen();
            echo 'YA EXISTE UN LIBRO CON ESE NOMBRE Y DE ESE AUTOR';  
            return false;            
        }
        return true;
    }



}


