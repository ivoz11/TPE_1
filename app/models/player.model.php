<?php 
require_once 'config.php';

class PlayerModel {

    private $db;

    // Asigno en el constructor la apertura de la BD.
    public function __construct() {
        $this->db = $this->db = new PDO(
            "mysql:host=".MYSQL_HOST .
            ";dbname=".MYSQL_DB.";charset=utf8", 
            MYSQL_USER, MYSQL_PASS);
    }
    //Funcion que trae todos los jugadores y todos los equipos para poder mostrar el nombre del equipo.
    function getAllPlayers() {
        $query = $this->db->prepare('SELECT jugadores.*, equipos.* FROM jugadores JOIN equipos ON jugadores.id_team = equipos.id_team');
        $query->execute();
        $players = $query->fetchAll(PDO::FETCH_OBJ);
        return $players;

    }
    // Funcion que hace el INSERT a la base de datos a traves del formulario.
    function insertPlayer($name,$lastname,$age,$profile,$position,$goals,$team) {
        $query = $this->db->prepare('INSERT INTO jugadores (name_player,lastname,age,id_team,profile_player,position,goals) VALUES (?,?,?,?,?,?,?)');
        $query->execute([$name,$lastname,$age,$team,$profile,$position,$goals]);
        return $this->db->lastInsertId();
    }
    //Funcion que elimina el jugador en la BD con su respectiva ID
    function deletePlayerByID ($id_Player) {
        $query = $this->db->prepare('DELETE FROM jugadores WHERE id_player = ?');
        $query->execute([$id_Player]);
    }
    //Trae a traves de la ID el jugador de la BD
    function getPlayer($id_Player){
        $query = $this->db->prepare( "SELECT jugadores.id_player, jugadores.name_player, jugadores.lastname, jugadores.age, jugadores.id_team,jugadores.profile_player, jugadores.position, jugadores.goals FROM jugadores JOIN equipos ON jugadores.id_team = equipos.id_team WHERE id_player =?");
        $query->execute(array($id_Player));
        $player = $query->fetch(PDO::FETCH_OBJ);
        return $player;
    }
    //Funcion para editar en la BD un jugador con su respectiva ID.
    function updatePlayerBD($id,$name,$lastname,$age,$profile,$position,$goals,$team){
        $query = $this->db->prepare("UPDATE jugadores SET name_player =?,lastname=?,age=?,id_team=?,profile_player=?,position=?,goals=? WHERE id_player =?");
        $query->execute(array($name,$lastname,$age,$team,$profile,$position,$goals,$id));
    }
}

