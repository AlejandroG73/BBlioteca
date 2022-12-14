<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOGIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../public/css/prueba.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">


</head>

<body>
    <?php require('../headers/inicio.php') ?>

<!-- 
    <div class="container">
        <form action="../controllers/login.php" method="post">

            <h1 class="animate__animated animate__backInLeft">SISTEMA LOGIN</h1>
            <input type="text" placeholder="Usuario" name="usuario" minlength="4" maxlength="8">
            <input type="password" placeholder="ingrese su contraseña" name="contraseña">
            <input type="submit" value="ingresar">

        </form>

    </div> -->
    <div class="login">
        <div class="login-triangle"></div>

        <h2 class="login-header">Login</h2>
        <?php
        include('../DB/conexion.php');
        include('../controllers/loginController.php')
        
        ?>


        <form action="login.php" method="POST" action="" class="login-container"> 
            <p><input type="text" name="usuario" placeholder="usuario"></p>
            <p><input type="password"  name="contraseña" placeholder="Password"></p>
            <p><input type="submit" name="login" value="Login"></p>
            
            <span >or <a href="newUsuarios.php">SignUp</a></span>

        </form>
    </div>


</body>

</html>