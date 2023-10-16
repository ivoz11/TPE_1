<?php
//Requires necesarios
require_once './app/models/player.model.php';
require_once './app/views/player.view.php';
require_once './app/models/team.model.php';
require_once './app/views/team.view.php';
require_once './app/helpers/user.helper.php';

class PlayerController {
    private $modelPlayer;
    private $viewPlayer;
    private $modelTeam;
    private $viewTeam;
    private $userHelper;

    public function __construct() {
        $this->modelPlayer = new PlayerModel();
        $this->viewPlayer = new PlayerView();
        $this->modelTeam = new TeamModel(); 
        $this->viewTeam = new TeamView();
        $this->userHelper = new UserHelper();
    
    
        if(strnatcmp(phpversion(), '5.4.0') >= 0) {
            if (session_status() == PHP_SESSION_NONE) {
            session_start();
            }else if(session_id() == ''){
            session_start();}
        }
    }
    
    //Funcion que trae todos los jugadores/equipos y los muestra en el Index.
    public function show() {    
        $teamsTotal = $this->modelTeam->getAllTeam();
        $playersTotal = $this->modelPlayer->getAllPlayers();
        $this->viewPlayer->showPlayers($playersTotal,$teamsTotal);
        $this->viewTeam->showTeams($teamsTotal);
    }
    
    //Funcion trae un unico jugador con su ID y lo muestra.
    function showPlayerRouter($id_Player) {
        $player = $this->modelPlayer->getPlayer($id_Player);
        $this->viewPlayer->showPlayer($player); 
    }
    
    // Funcion que toma los valores del input y los guarda en una variable para despues pasarselos a la BD y que los inserte en ella. Trim agregado para que no se pueda agregar espacios en blanco.
    function addPlayer() {
    
        $this->userHelper->checkLoggedIn();
        if(isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['age']) && isset($_POST['profile']) && trim($_POST['name']) && trim($_POST['lastname'])){
            if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['age']) && !empty($_POST['profile']) && trim($_POST['age'])&& trim($_POST['profile'])){ 
                if(!empty($_POST['position']) && !empty($_POST['goals']) && isset($_POST['position']) && isset($_POST['goals']) && trim($_POST['goals'])&& trim($_POST['position'])){
                
                    $name = $_POST['name'];
                    $lastname = $_POST['lastname'];
                    $age = $_POST['age'];
                    $profile = $_POST['profile'];
                    $position = $_POST['position'];
                    $goals = $_POST['goals'];
                    $team =$_POST['id_Team'];
                    $id = $this->modelPlayer->insertPlayer($name,$lastname,$age,$profile,$position,$goals,$team);
                    header("Location: " . BASE_URL);
                }
            }      
        }
        else {header("Location: " . BASE_URL);}
    }
    
    // Funcion que elimina el jugador pasandole el ID.
    function deletePlayer($id_Player) {
        $this->userHelper->checkLoggedIn();
        $this->modelPlayer->deletePlayerByID($id_Player);
        header("Location: " . BASE_URL);
    }
    
    // Funcion que trae el jugador y muestra el formulario para editarlo. Ademas trae todos los equipos para poder utilizarlo en el select.
    function editPlayer($id_Player){
        $this->userHelper->checkLoggedIn();
        $player = $this->modelPlayer->getPlayer($id_Player);
        $teams = $this->modelTeam->getAllTeam();
        $this->viewPlayer->showEdit($player,$teams);
    }
    
    // Funcion que toma los valores del Input y los pasa como parametros a la funcion que los updatea a la base de datos. Trim agregado para que no se pueda agregar espacios en blanco.
    function editPlayerBD(){
        if(isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['age']) && isset($_POST['profile']) && trim($_POST['name']) && trim($_POST['lastname'])){
            if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['age']) && !empty($_POST['profile']) && trim($_POST['age'])&& trim($_POST['profile'])){ 
                if(!empty($_POST['position']) && !empty($_POST['goals']) && isset($_POST['position']) && isset($_POST['goals']) && trim($_POST['goals'])&& trim($_POST['position'])){
                
                    $this->modelPlayer->updatePlayerBD($_POST['id_Player'], $_POST['name'],$_POST['lastname'],$_POST['age'],$_POST['profile'],$_POST['position'],$_POST['goals'],$_POST['id_Team']);
                    
                    header("Location: " . BASE_URL);
                }
            }
        }
        else {header("Location: " . BASE_URL);}
    }
}









