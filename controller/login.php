<?php

session_start();

if(isset($_SESSION['usuario'])){
    header("location: ./../index.php");
    die();
}

require './../models/Login/login.php';

if(isset($_POST['login'])){
    
    // form POST
    $mail = $_POST['mail'];
    $pass = $_POST['password'];

    $comprobarUsuario = consultarUsuario($mail, $pass, $conexion);

    if(!$comprobarUsuario){
        return;
    }

    $_SESSION['usuario'] = $comprobarUsuario;
    // $_SESSION['usuarioId'] = $usuarioId;

    header("location: ./../index.php?user=" . $comprobarUsuario);
    die();
}

require './../views/login.view.php';

?>