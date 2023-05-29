<?php
require_once './libs/smarty/libs/Smarty.class.php';

class LibraryView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showLibrary($authors) {
        // asigno variables al tpl smarty        
        
        $this->smarty->assign('count', count($authors)); 
        $this->smarty->assign('authors', $authors);

        // mostrar el tpl
        $this->smarty->display('library.list.tpl');
    }

    function showLogin() {
        // mostrar el tpl
        $this->smarty->display('login.tpl');
    }
}