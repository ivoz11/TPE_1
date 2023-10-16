<?php
require_once './app/views/user.view.php';
require_once './app/models/user.model.php';

class UserController {
    private $view;
    private $model;
    
    public function __construct() {
        $this->model = new UserModel();
        $this->view = new UserView();
        if(strnatcmp(phpversion(), '5.4.0') >= 0) {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            } 
            else if(session_id() == ''){
                session_start();
            }
        }
    } 

    //Funcion que muestra el login
    public function showFormLogin() {
        $this->view->showFormLogin();}

    //Funcion que valida el Usuario ya precargado en la BD y guarda informacion de dicho usuario, si el usuario no existe saldrá un mensaje alertandolo.
    public function validateUser() {
        if (!empty($_POST['user']) && !empty($_POST['password'])) {
            $usuario = $_POST['user'];
            $password = $_POST['password'];
            $user = $this->model->getUserByUser($usuario);

            if ($user && password_verify($password,$user->password)) {
                session_start();
                $_SESSION['USER_ID'] = $user->id;
                $_SESSION['USER_USUARIO'] = $user->user;
                $_SESSION['IS_LOGGED'] = true;
                header("Location: " . BASE_URL);
            } 
            else { 
                $this->view->showFormLogin("El usuario o la contraseña no existe.");
            }
        }
    }

    //Funcion para Deslogear el usuario
    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}