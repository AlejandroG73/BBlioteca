<?php
//validamos datos del servidor
$host = "localhost";
$user = "root";
$pass = "";
$port ="3306";
$db='carreras';

//conetamos al base datos
$conexion = new mysqli("localhost","root", "","biblioteca","3306");
$conexion->set_charset("utf8");
?>