<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/login.css">
    <title>Registrate</title>
</head>
<body>
    <div class="contenedor-flex">
        <div class="contenedor-formulario">
            <h3>Registrate</h3>
            <form id="formulario-login" action="" method="post">
                <input type="text" name="usuario" placeholder="Ingresa tu correo electronico">
                <input type="password" name="pass" placeholder="Crea una contraseña">
                <input type="password" name="pass-r" placeholder="Vuelve a escribir la contraseña">
                <input type="submit" name="btn-login" value="Registrame">
                <hr class="hr-login">
                <p>Ya cuentas con una cuenta <a href="./login.php">Click para iniciar sesion</a> | <a href="./../index.php">Ir a inicio</a></p>
            </form>
        </div>
    </div>
</body>
</html>