<<<<<<< HEAD
<?php

function conexionBD(){
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=tiendaOnline", "root", "");
        return $conexion;
    } catch (PDOException $th) {
        //return "Fallo la conexion con BD" . $th->getMessage();
        return false;
    }   
}

=======
<?php

function conexionBD(){
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=tiendaOnline", "root", "");
        return $conexion;
    } catch (PDOException $th) {
        //return "Fallo la conexion con BD" . $th->getMessage();
        return false;
    }   
}

>>>>>>> DevMarcoRico
?>