<style>
    .alerta {
        text-align: center;
        color: red;
    }

    .success {
        text-align: center;
        color: blueviolet;
    }
</style>

<?php
// include('conexion.php')

if (!empty($_POST['registrar'])) {

    if (empty($_POST["usuario"]) or empty($_POST["contraseña"]) or empty($_POST["rcontraseña"])) {
        echo '<div class= "alerta"> uno de los campos esta vacio</div>';
    } else {

        $usuario = $_POST["usuario"];
        $password = $_POST['contraseña'];
        $Cpassword = $_POST['rcontraseña'];


        $sql = $conexion->query("INSERT INTO accesso (usuario,contraseña)
                             VALUES (' $usuario', '$password') ");
        if ($sql == 1) {
            echo '<div class= "success"> usuario registrado</div>';
        } else {
            echo '<div class= "alerta"> usuario  no registrado</div>';

            # code...
        }
    }
}



?>