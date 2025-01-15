<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/login.css">
    <title>INICIAR SESION</title>
</head>
<body>
    <div class="contenedor-flex">
        <div class="contenedor-formulario">
            <h3>Iniciar sesion</h3>
            <form id="formulario-login" action="" method="post">
                <input type="text" name="usuario" placeholder="USUARIO">
                <input type="password" name="pass" placeholder="CONTRASEÑA">
                <input type="submit" name="btn-login" value="INICIAR SESION">
                <hr class="hr-login">
                <p>¿Aun no cuentas con una cuenta? <a href="./registrarte.php">Click para registrarte</a> | <a href="./../index.php">Ir a inicio</a></p>
            </form>
        </div>
    </div>
</body>
</html>