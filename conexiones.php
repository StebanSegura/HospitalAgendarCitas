<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$base = "hospital";

$conexion = mysqli_connect($host, $user, $pass, $base);

if (!$conexion) 
{
	echo $respuesta = "lamentablemente no hay conexion";
}
else {
	////echo $respuesta = "la conexion fue exitosa";
}










  ?> 