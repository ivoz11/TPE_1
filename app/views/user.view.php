<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class UserView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }
    //Funcion que muestra el Login. Ademas tiene una variable error, que se utiliza por si el usuario ingresa mal una contraseña.
    function showFormLogin($error = null) {
        $this->smarty->assign("error", $error);
        $this->smarty->display('templates/formlogin.tpl');
    }
}