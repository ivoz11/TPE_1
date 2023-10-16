<?php

require_once './app/models/player.model.php';
require_once './app/views/player.view.php';
require_once './app/models/team.model.php';
require_once './app/views/team.view.php';
require_once './app/helpers/user.helper.php';


class TeamController {

    public function __construct() {
        $this->modelPlayer = new PlayerModel();
        $this->viewPlayer = new PlayerView();
        $this->modelTeam = new TeamModel(); 
        $this->viewTeam = new TeamView();
        $this->userHelper = new UserHelper();

        if(strnatcmp(phpversion(), '5.4.0') >= 0) {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            } 
            else if(session_id() == ''){
            session_start();}
        }
    } 

    //Funcion del buscador me trae del input y del buscador de la BD los resultados.
    function showResults(){
        if(isset($_POST["search"]) && !empty($_POST["search"])){
            $results = $this->modelTeam->findMatch($_POST["search"]);
            $this->viewTeam->showResultados($results); 
        } 
    }

    // Funcion que me trae el equipo con su ID y su formulario para editarlo.
    function showEditTeam($id_Team){
        $this->userHelper->checkLoggedIn();
        $team = $this->modelTeam->getTeam($id_Team);
        $this->viewTeam->showTeamEdit($team); 
    }

    //Funcion que me muestra un unico equipo con su respectiva ID.
    function showTeamRouter($id_Team){
        $team = $this->modelTeam->getTeam($id_Team);
        $this->viewTeam->showTeam($team); 
    }

    // Funcion que toma los valores del input de equipos, y me los guarda en unas variables para despues pasarselas a la BD y que las inserte. Trim agregado para que no se pueda agregar espacios en blanco.
    function addTeam() {
        $this->userHelper->checkLoggedIn();
        if(isset($_POST['team']) && isset($_POST['league']) && trim($_POST['league'])){
            if(!empty($_POST['team']) && !empty($_POST['league']) && trim($_POST['team'])){
                if(!empty($_POST['technical_director']) && isset($_POST['technical_director']) && trim($_POST['technical_director'])){
                    if(!empty($_POST['cups']) && isset($_POST['cups']) && trim($_POST['cups'])){
                        $nameTeam = $_POST['team'];
                        $league = $_POST['league'];
                        $technicalDirector = $_POST['technical_director'];
                        $cups = $_POST['cups'];
                        $id = $this->modelTeam->insertTeam($nameTeam,$league,$technicalDirector,$cups);
                        header("Location: " . BASE_URL);
                    }
                }
            }
            else {header("Location: " . BASE_URL);
            }
        }
    }
    // Funcion que te elimina el equipo solo si no esta siendo utilizado en la tabla principal de jugadores. Muestra error.
    function deleteTeam($id_Team){
        $this->userHelper->checkLoggedIn();
        $contador = $this->modelTeam->contadorCategoriaPlayers($id_Team);
        if ($contador > 0){
            $this->viewTeam->error();
        } 
        else{$this->modelTeam->deleteTeamByIdTeam($id_Team);
        header("Location: " . BASE_URL);
        }
    }

    // Funcion que toma los valores del Input y los pasa como parametros a la funcion que los updatea a la base de datos. Trim agregado para que no se pueda agregar espacios en blanco.
    function editTeamBD(){
    
        $this->userHelper->checkLoggedIn();
        if (!empty($_POST['team']) && isset($_POST['team'])&& trim($_POST['team'])){
            if (!empty($_POST['league']) && isset($_POST['league']) && trim($_POST['league'])){
                if (!empty($_POST['technical_director']) && isset($_POST['technical_director'])&& trim($_POST['technical_director'])){  
                    if (!empty($_POST['cups']) && isset($_POST['cups'])&& trim($_POST['cups'])){  
                    
                        $this->modelTeam->updateTeamBD($_POST['id_Team'], $_POST['team'],$_POST['league'],$_POST['technical_director'],$_POST['cups']);

                        header("Location: " . BASE_URL);
                    }
                }
            }
        }
        else {header("Location: " . BASE_URL);
        }
    }
}