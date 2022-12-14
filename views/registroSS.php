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
    <?php
    require('../headers/menu.php')
    ?>


    <div class="login">
        <div class="login-triangle"></div>

        <h2 class="login-header">Registrar Alumno</h2>
        <?php
        include('../DB/conexion.php');
        include('../controllers/RegistroSSController.php');
        ?>
        <form action="registroSS.php" method="POST" class="login-container">


            <p><input type="text" name="nombre" placeholder="Nombre"></p>
            <p><input type="text" name="matricula" placeholder="matricula"></p>
            <p><input type="text" name="año" placeholder="año"></p>
            <p><input type="text" name="titulo" placeholder="titulo"></p>

            <div class="opciones">
                <div class="form-group">
                    <select class="custom-select" name="tipo" required>
                        <option value="">Seleciona la Carrera</option>
                        <option value="Ing.Informatica">Ing.Informatica</option>
                        <option value="Ing.Civil">Ing.Civil</option>
                        <option value="Ing.Quimica">Ing.Quimica</option>
                    </select>
                </div>
            </div>
            <p><input type="text" name="asesor" placeholder="asesor"></p>
            <p><input type="text" name="clave" placeholder="clave"></p>

            <p><input type="submit" name="registrar" value="Registrar"></p>


        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>