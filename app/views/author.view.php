<?php
require_once './libs/smarty/libs/Smarty.class.php';

class AuthorView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showAuthors($authors) {
        // asigno variables al tpl smarty                
        $this->smarty->assign('count', count($authors)); 
        $this->smarty->assign('authors', $authors);
        // mostrar el tpl
        $this->smarty->display('author.list.tpl');
    }
    function showAuthor($author,$books) {
        // asigno variables al tpl smarty               
        $this->smarty->assign('author', $author);
        $this->smarty->assign('books', $books);
        // mostrar el tpl
        $this->smarty->display('author.details.tpl');
    }
}