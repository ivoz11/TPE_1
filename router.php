<?php
require_once './app/controllers/player.controller.php';
require_once './app/controllers/team.controller.php';
require_once './app/controllers/user.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; 

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);


//                   TABLA DE RUTEO
// login           ->    UserController->showFormLogin();
// validate        ->    UserController->validateUser();
// logout          ->    UserController->logout(); 
// home            ->    PlayerController->show();
// add             ->    PlayerController->addPlayer();
// addTeam         ->    TeamContoller->addTeam();
// delete/:ID      ->    PlayerController->deletePlayer($id);
// deleteTeam/:ID  ->    TeamController->deleteTeam($id);   
// edit/:ID        ->    PlayerContoller->editPlayer($id);
//editado          ->    PlayerController->editPlayerBD();
//mostrarTeams     ->    TeamController->showResults();
//player/:ID       ->    PlayerController->showPlayerRouter($id);
//editTeam/:ID     ->    TeamController->showEditTeam($id);
//team//:ID        ->    TeamController->showTeamRouter($id);
//editadoTeam      ->    TeamController->editTeamBD();

switch ($params[0]) {
    case 'login':
        $userController = new UserController();
        $userController->showFormLogin();
        break;
    case 'validate':
        $userController = new UserController();
        $userController->validateUser();
        break;
    case 'logout':
        $UserController = new UserController();
        $UserController->logout();
        break;
    case 'home':
        $playerController = new PlayerController();
        $playerController->show();
        break;
    case 'add':
        $playerController = new PlayerController();
        $playerController->addPlayer();
        break;
    case 'addTeam':
        $teamController = new TeamController();
        $teamController->addTeam();
        break;    
    case 'delete':
        $playerController = new PlayerController();
        $ID_Player = $params[1];
        $playerController->deletePlayer($ID_Player);
        break;
    case 'deleteTeam':
        $teamController = new TeamController();
        $ID_team = $params[1];
        $teamController->deleteTeam($ID_team);
        break;    
        case 'edit': 
        $playerController = new PlayerController();
        $playerController->editPlayer($params[1]);
        break; 
        case 'editado':
        $playerController = new PlayerController();
        $playerController->editPlayerBD();
        break;
    case 'mostrarTeams':
        $teamController = new TeamController();
        $teamController->showResults();
        break;   
    case 'player':
        $playerController = new PlayerController();
        $playerController->showPlayerRouter($params[1]);
        break;  
    case 'editTeam':
        $teamController = new TeamController();
        $teamController->showEditTeam($params[1]);
        break;        
    case 'team':
        $teamController = new TeamController();
        $teamController->showTeamRouter($params[1]);
        break;    
    case 'editadoTeam':
        $teamController = new TeamController();
        $teamController->editTeamBD();
        break;    
    default:
        echo('404 Page not found');
        break;
}
