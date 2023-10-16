<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class PlayerView {
    
    private $smarty;

    public function __construct() {
    //Instancio Smarty en el constructor
        $this->smarty = new Smarty();
    }
    //Funcion que muestra los jugadores cargados en la BD y formulario para agregar el jugador. Con los parametros de $players para poder mostrarlos a todos y $teams para poder tener el select con cada uno de los equipos.
    function showPlayers($players,$teams) {
        $this->smarty->assign('teams', $teams);
        $this->smarty->assign('players', $players);
        $this->smarty->display('templates/insertar_Mostrar_Jugadores.tpl');
    }
    //Funcion que muestra el jugador especifico traido en $player con su id.
    function showPlayer ($player){
        $this->smarty->assign('player', $player);
        $this->smarty->display('templates/mostrarJugador.tpl');
    }
    //Funcion que muestra el formulario para editar un jugador. Con parametros $player propio del jugador seleccionado por la id y $teams para nuevamente poder mostrar todos los equipos si quieren cambiarlo.
    function showEdit($player,$teams){
        $this->smarty->assign('player', $player);
        $this->smarty->assign('teams', $teams);
        $this->smarty->display('templates/form_edit_jugador.tpl');
    }
}