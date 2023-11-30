<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<style class="stroke">
		h2{color: #fff;}
		h3{color: #fff;}
	</style>
</head>
<body bgcolor="white" background="fondo.jpg" width="20" height="50">

</body>
<?php
include 'conexiones.php';

$tipid= $_POST['tipoid'];
$docum= $_POST['docu'];
$nom = $_POST['nombre'];
$apell= $_POST['apellido'];
$cita= $_POST['tipocita'];
$fecha= $_POST['fecha'];
$hora= $_POST['hora'];


$insertar_cita = "INSERT into citas ( tipo_id, id_paciente,nom_paciente, apell_paciente, cita_paciente, fecha_paciente, hora_paciente) values ('$tipid','$docum','$nom','$apell','$cita','$fecha','$hora')"; 

$resultado_cita = mysqli_query($conexion, $insertar_cita);

if (!$resultado_cita)
 {
	echo "Error al insertar los datos del producto";
}
else{
	print( "<h2>La cita se a registrado correctamente<h2>");

}


?>
<br>
<a href="indexx.php"><input type="button" value="Regresar" class="my"></a>
</html>