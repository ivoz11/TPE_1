<?php

class UserHelper {

//Verifica que el user este logueado, en el caso que no lo este se lo redirige al login.
    public function checkLoggedIn() {
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . 'login');
            die();
        }
    } 
}