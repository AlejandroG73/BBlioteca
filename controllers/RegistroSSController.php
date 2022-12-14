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

    if (empty($_POST["nombre"]) or empty($_POST["matricula"]) or empty($_POST["año"])
      or empty($_POST["titulo"])  or empty($_POST["tipo"])  or empty($_POST["asesor"])  or empty($_POST["clave"])){
        echo '<div class= "alerta"> campos  vacios</div>';
    } else {

        $nombre = $_POST["nombre"];
        $matricula = $_POST['matricula'];
        $año = $_POST['año'];
        $titulo = $_POST['titulo'];
        $tipo = $_POST['tipo'];
        $clave = $_POST['clave'];





        $sql = $conexion->query("INSERT INTO alumnos (nombre,matricula,año,titulo,tipo,asesor,clave)
                             VALUES (' $nombre', '$matricula','$año','$titulo', '$tipo','$clave') ");
        if ($sql == 1) {
            echo '<div class= "success"> usuario registrado</div>';
        } else {
            echo '<div class= "alerta"> usuario  no registrado</div>';

            # code...
        }
    }
}



?>