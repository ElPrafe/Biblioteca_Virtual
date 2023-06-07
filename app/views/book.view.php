<?php
require_once './libs/smarty/libs/Smarty.class.php';

class BookView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showBooks($books) {
        // asigno variables al tpl smarty        
        
        $this->smarty->assign('count', count($books)); 
        $this->smarty->assign('books', $books);

        // mostrar el tpl
        $this->smarty->display('book.list.tpl');
    }

    function showLogin() {
        // mostrar el tpl
        $this->smarty->display('login.tpl');
    }
}