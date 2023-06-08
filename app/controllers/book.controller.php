<?php
require_once './app/models/book.model.php';
require_once './app/views/book.view.php';

class BookController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new BookModel();
        $this->view = new BookView();
    }

    public function showBook($id) {
        $book = $this->model->getBook($id);
        $logged = false;
        $this->view->showBook($book,$logged);
    }
    public function showBooks() {
        $books = $this->model->getBooks();
        $this->view->showBooks($books);
    }

    
    public function addBook() {
        // TODO: validar entrada de datos

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
        $this->model->deleteBookById($id);
        header("Location: " . BASE_URL);
    }  
    
    public function editBookById($id) {
        
    }

}


