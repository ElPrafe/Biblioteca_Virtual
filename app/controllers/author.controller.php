<?php
require_once './app/models/author.model.php';
require_once './app/views/author.view.php';
require_once './app/models/book.model.php';
require_once './app/views/book.view.php';
require_once 'helpers/auth.helper.php';


class AuthorController {
    private $model;
    private $view;
    private $modelBook;
    private $viewBook;
    private $authHelper;

    public function __construct() {
        $this->model = new AuthorModel();
        $this->view = new AuthorView();
        $this->modelBook = new BookModel();
        $this->viewBook = new BookView();
        $this->authHelper = new AuthHelper();
    }

    public function showAuthors() {                  
        $logged = $this->authHelper->isLoggedIn();//Si no esta loggeado, muestra menos cosas
        $authors = $this->model->getAuthors();
        $this->view->showAuthors($authors, $logged);
    }

    public function showAuthor($id) {
        $logged = $this->authHelper->isLoggedIn();//Si no esta loggeado, muestra menos cosas
        $author = $this->model->getAuthorById($id);   
        $books = $this->modelBook->getBooksByID($id);
        $this->view->showAuthor($author,$books, $logged); 
    }
    
    public function addAuthorScreen() {        
        $this->authHelper->checkLoggedIn();//Si no esta loggeado corta la ejecucion        
        $this->view->showAddAuthor();        
    }
    public function addAuthor() {        
        $this->authHelper->checkLoggedIn();//Si no esta loggeado corta la ejecucion        
        $name = $_POST['name'];
        $img= $_POST['img'];
        $date = $_POST['date'];
        $nationality = $_POST['nationality']; 
        $year = explode('-', $date)[0];//Obtengo el año de $date
        if ($this->checkAddForm($name, $year)){
            $id = $this->model->addAuthor($name, $img, $date, $nationality);    
            $this->showAuthor($id);
        }
    }

    public function deleteAuthor($id) {//ver que pasa con sus libros asociados
        $this->authHelper->checkLoggedIn();//Si no esta loggeado corta la ejecucion
        $this->model->deleteAuthorById($id);// -------------FALTA HACER VERIFICACION DE DELETE---------------------
        header("Location: " . BASE_URL);
    }  

    public function editAuthorScreen($id) {
        $this->authHelper->checkLoggedIn();//Si no esta loggeado corta la ejecucion
        $author = $this->model->getAuthorById($id);
        $this->view->showEditAuthor($author);  
    }
    public function editAuthorById($id) {
        $this->authHelper->checkLoggedIn();//Si no esta loggeado corta la ejecucion
        $name = $_POST['name'];
        $img= $_POST['img'];
        $date = $_POST['date'];
        $nationality = $_POST['nationality'];
        $this->model->editAuthorByID($id, $name, $img, $date, $nationality);
        $this->showAuthor($id);
    }
    private function checkAddForm($name, $year){
        if ($this->model->getAuthorByName($name)){//Se fija si ya hay un autor con ese nombre.
            $this->view->showAddAuthor();
            echo 'YA EXISTE UN AUTOR CON ESE NOMBRE';              
        }else{ 
            if ($year>1900 && $year<2021){//Se fija que el año sea valido.      
                return true; 
            }else{
                $this->view->showAddAuthor();                
                echo 'Año ingresado invalido. Solo se permite entre 1901 y 2020';                 
            }
        } 
        return false;
    }
}