<?php
require_once 'config.php';

class TeamModel {

    private $db;
    
    // Asigno en el constructor la apertura de la BD.
    public function __construct() {
        $this->db = $this->db = new PDO(
            "mysql:host=".MYSQL_HOST .
            ";dbname=".MYSQL_DB.";charset=utf8", 
            MYSQL_USER, MYSQL_PASS);
    }

    // Funcion que trae todos los equipos.
    public function getAllTeam(){
        $query = $this->db->prepare('SELECT * from equipos');
        $query->execute();
        $teams =$query->fetchAll(PDO::FETCH_OBJ);    
        return $teams;
    }
    //Funcion que chequea si existe el equipo en la base de datos.
    function existsTeamInBD($nameTeam){
        $query = $this->db->prepare('SELECT * from equipos WHERE name_team = ?');
        $query->execute([$nameTeam]);    
        $existeTeam = $query->fetchAll(PDO::FETCH_OBJ);
        return $existeTeam;
    }
    //Funcion que inserta en la BD el equipo ingresado por el usuario si NO EXISTE en la BD.
    function insertTeam($nameTeam,$league,$technicalDirector,$cups) {
        $existe = $this->existsTeamInBD($nameTeam);
        if(!$existe) {  
            $query = $this->db->prepare('INSERT INTO equipos (name_team,league,technical_director,cups) VALUES (?,?,?,?)');
            $query->execute([$nameTeam,$league,$technicalDirector,$cups]);
            return $this->db->lastInsertId();
        }
    }    
    //Funcion que Elimina el equipo a traves de su respectiva ID.
    function deleteTeamByIDteam($id_Team){
        $query =$this->db->prepare('DELETE FROM equipos WHERE id_team = ?');
        $query->execute([$id_Team]);
    }
    //Funcion que a traves de su ID trae el equipo que le corresponda de la BD.
    function getTeam($id_Team){
        $query=$this->db->prepare('SELECT equipos.id_team, equipos.name_team, equipos.league, equipos.technical_director, equipos.cups FROM equipos WHERE id_team = ?');
        $query->execute(array($id_Team));
        $team = $query->fetch(PDO::FETCH_OBJ);
        return $team;
    }
    //Funcion que edita en la base de datos a traves de su ID.
    function updateTeamBD ($id_Team,$name,$league,$technicalDirector,$cups){
        $query = $this->db->prepare("UPDATE equipos SET name_team = ?,league = ?,technical_director = ?,cups = ? WHERE id_team =?");
        $query->execute(array($name,$league,$technicalDirector,$cups,$id_Team));
    }
    //Funcion que busca en la base de datos lo ingresado por el usuario y devuelve segun lo que haya escrito.          
    function findMatch($search){
        $query = $this->db->prepare('SELECT jugadores.*, equipos.* FROM jugadores JOIN equipos ON jugadores.id_team = equipos.id_team WHERE equipos.name_team LIKE ?');
        $query->execute(["%${search}%"]);
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }
    //Funcion que cuenta si hay algun equipo en uso en la tabla de jugadores. (Hecho para el borrar equipo)
    function contadorCategoriaPlayers($id_Team){
        $sentence = $this->db->prepare("SELECT count(*) as contaje FROM jugadores WHERE id_team = ?");
        $sentence->execute([$id_Team]);
        $contador = $sentence->fetch(PDO::FETCH_OBJ);
        return $contador->contaje;
    }
}
