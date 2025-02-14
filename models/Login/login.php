<?php

// Crear el hash password_hash($password, PASSWORD_DEFAULT);
// Verificar el hasheo password_verify($password, $hash)

require './../config/db.php';

$conexion = conexionBD();

if(!$conexion){
    return;

}

function consultarUsuario($user, $pass, $db) { 
    $session = false;

    // Validar peticion POST
    if(empty($user) || empty($pass)){
        return $session;
    }

    try{
        // Consulta Informacion 
    $query = $db->prepare("SELECT usuarioId,mail,pass FROM USUARIOS WHERE mail = :usuario");
    $query->execute([':usuario' => $user]);

    // Obtener valores de consulta
    $resultado = $query->fetchAll();

    // Validar que no esten vacias las consultas
    if(empty($resultado[0]['mail']) || empty($resultado[0]['pass'])){
        echo 'el usuario no existe';
        return $session;
    }
    
    // Validar usuario 
    if($resultado[0]['mail'] != $user){
        echo 'usuario distinto';
        return $session;
    }

    // Validar Password
    $validacion = comprobarPass($pass, $resultado[0]['pass']);
    
    if(!$validacion){
        echo 'error en la contraseña';
        return $session;
    }

    $session = password_hash($resultado[0]['usuarioId'], PASSWORD_DEFAULT);
    // Retornar valores
    return $session;

    }catch(Exception $e){
        $session = false;
        return $session;
    }
}

function comprobarPass($pass, $hash){

    // validar password
    $validarPassword = password_verify($pass, $hash);

    return $validarPassword;
}

?>