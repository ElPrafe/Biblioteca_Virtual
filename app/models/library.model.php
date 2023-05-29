<?php

class LibraryModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_library;charset=utf8', 'root', '');
    }

    /**
     * Devuelve la lista de tareas completa.
     */
    public function getLibrary() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM autor");
        $query->execute();
        // 3. obtengo los resultados
        $author = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $author;//VER COMO DEVOLVER SUS LIBROS
    }
    public function getAllAuthors() {
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
     * Inserta una tarea en la base de datos.
     */
    public function addAuthor($name, $age, $nacionality) {
        $query = $this->db->prepare("INSERT INTO task (titulo, descripcion, prioridad, finalizada) VALUES (?, ?, ?)");
        $query->execute([$name, $age, $nacionality]);

        return $this->db->lastInsertId();
    }


    /**
     * Elimina una tarea dado su id.
     */
    function deleteAuthorById($id) {
        $query = $this->db->prepare('DELETE FROM autor WHERE id = ?');
        $query->execute([$id]);
    }

  
}
