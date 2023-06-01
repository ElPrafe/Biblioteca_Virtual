<?php

class AuthorModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_library;charset=utf8', 'root', '');
    }

    /**
     * Devuelve los autores.
     */
    public function getAuthors() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM autor");
        $query->execute();
        // 3. obtengo los resultados
        $authors = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $authors;//VER COMO DEVOLVER SUS LIBROS
    }

    public function getAuthor() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase
        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM autor");
        $query->execute();
        // 3. obtengo los resultados
        $author = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos        
        return $author;
    }

    /**
     * Inserta un autor en la base de datos.
     */
    public function addAuthor($name, $img, $date, $nacionality) {
        $query = $this->db->prepare("INSERT INTO autor (nombre, img_autor, nacionalidad, fecha_nac VALUES (?, ?, ?)");
        $query->execute([$name, $img, $nacionality, $date]);

        return $this->db->lastInsertId();
    }


    /**
     * Elimina una tarea dado su id.
     */
    public function deleteAuthorById($id) {
        $query = $this->db->prepare('DELETE FROM autor WHERE id = ?');
        $query->execute([$id]);
    }

    public function editAuthorById($id) {
        
    }

  
}
