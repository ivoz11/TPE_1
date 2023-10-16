<?php
require_once 'config.php';


class UserModel {

    private $db;
    //Funcion en el constructor que abre la BD
    public function __construct() {
        $this->db = $this->db = new PDO(
            "mysql:host=".MYSQL_HOST .
            ";dbname=".MYSQL_DB.";charset=utf8", 
            MYSQL_USER, MYSQL_PASS);
    }
    
    //Funcion que se fija si el usuario registrado existe.
        public function getUserByUser($usuario) {
            $query = $this->db->prepare("SELECT * FROM usuarios WHERE user = ?");
            $query->execute([$usuario]);
            $date = $query->fetch(PDO::FETCH_OBJ);
            return $date;
    }
}