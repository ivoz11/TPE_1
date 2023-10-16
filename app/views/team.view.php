<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';


class TeamView {
    private $smarty;   
    //Instancio Smarty en el constructor

    public function __construct() {
        $this->smarty = new Smarty();
    }
    //Funcion que muestra todos los equipos y ademas el formulario para insertar uno nuevo.
    function showTeams($teams){
        $this->smarty->assign('teams', $teams);
        $this->smarty->display('templates/insertar_Mostrar_Equipo.tpl');
    }
    //Funcion que muestra los resultados del filtro/buscador.
    function showResultados($results){
        $this->smarty->assign('results',$results);
        $this->smarty->display('templates/resultados_Equipos.tpl');
    }
    //Funcion que muestra el formulario para editar un equipo especifico traido a traves de su id.
    function showTeamEdit($team){
        $this->smarty->assign('team', $team);
        $this->smarty->display('templates/form_edit_equipo.tpl');
    }
    //Funcion que muestra el equipo especifico traido por una id.
    function showTeam($team){ 
        $this->smarty->assign('team', $team);
        $this->smarty->display('templates/mostrarEquipo.tpl');
    }
    //Funcion que muestra el error que se produce al querer eliminar un equipo utilizado en la tabla principal.           
    function error(){
        $this->smarty->assign('Error','error');
        $this->smarty->display('templates/error.tpl');
    }
 }