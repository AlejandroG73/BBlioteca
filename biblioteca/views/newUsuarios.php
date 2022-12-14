<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="../public/css/prueba.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>

<body>
    <?php require('../headers/inicio.php') ?>

    <div class="login">
        <div class="login-triangle"></div>

        <h2 class="login-header">Registrar</h2>
        <?php
        include('../DB/conexion.php');
        include('../controllers/registrarController.php');
        ?>
        <form action="newUsuarios.php" method="POST" class="login-container">
            <p><input type="text" name="usuario" placeholder="Usuario"></p>
            <p><input type="password" name="contraseña" placeholder="Contraseña"></p>
            <p><input type="password" name="rcontraseña" placeholder="Confirmar Contraseña"></p>

            <p><input type="submit" name = "registrar" value="Login"></p>
            <span>or <a href="login.php">Login</a></span>

        </form>
    </div>
</body>

</html>