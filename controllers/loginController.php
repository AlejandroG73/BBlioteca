<?php
if (!empty($_POST['login'])){
    if (!empty($_POST['usuario']) and !empty($_POST['contraseña'])) {
        # code...
        $usuario=$_POST['usuario'];
        $contraseña=$_POST['contraseña'];
        $sql = mysqli_query($conexion,"SELECT usuario,contraseña 
                                       FROM accesso
                                       WHERE usuario ='$usuario'
                                       AND contraseña ='$contraseña' ");
        if ($datos=mysqli_fetch_array($sql)) {
            // header("location: ../src/inicio.php");
            if ($datos['contraseña'] == $contraseña){
               header("location: ../src/inicio.php");
                echo '<script>JSalert("Estamos LOGIN");</script>';

            }

            # code...
        } else {
            echo '<div class= "alerta"> el usuario no existe</div>';

            # code...
        }
        
    } else {
        echo '<div class= "alerta"> campos vacios</div>';

        # code...
    }
    
}

?>