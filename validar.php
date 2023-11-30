<?php

session_start();
include 'conexiones.php';

$doc = $_POST['documento'];
$con = $_POST['contrasena'];

$consultar = "SELECT * from citas where id_paciente = '$doc' and id_paciente = '$con'";
$resultado = mysqli_query($conexion, $consultar);
$cant = mysqli_num_rows($resultado);

if($cant > 0)
{
	$_SESSION['usuario'] = $doc;
	header('Location: baseh.php');
}
else
{
	header('Location: error_sesion.php');
}

?>