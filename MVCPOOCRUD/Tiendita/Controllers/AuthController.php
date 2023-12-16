<?php

use Models\Auth;
use Models\Roles;

require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';


class AuthController
{
    public function login()
    {

        $correo =  $_POST['correo'];

        $password =  $_POST['password'];

        $auth = new Auth;
        $user = $auth->select($correo);

        if (password_verify($password, $user['password'])) {

            session_start();
            $_SESSION['userData'] =  $user;

            header('location: ../index.php');
        } else {
            header('location: ../index.php');
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('location: ../index.php');
    }


    public function create()
    {

        $roles = new Roles;

        $data =  $roles->all();

        require_once $_SERVER['DOCUMENT_ROOT'] . '/Views/registrar.php';
    }


    public function store()
    {

        $correo =  $_POST['correo'];

        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $rol_id =  $_POST['rol'];

        $auth = new Auth;

        $auth->register($correo,  $hash, $rol_id);

        header('location: ../index.php?controller=UserController&action=index');
    }
}
