
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<style>
		h2{color: #fff;}
		h3{color: #fff;}
	</style>
</head>
<body bgcolor="skyblue" background="fondo.jpg" >

</body>

<?php 
include 'conexiones.php';
$new_cod = $_POST['codigo'];
$tipid= $_POST['tipoid'];
$docum= $_POST['docu'];
$nom = $_POST['nombr'];
$apell= $_POST['apell'];
$cita= $_POST['tipocita'];
$fecha= $_POST['fecha'];
$hora= $_POST['hora'];


$actualizar_cita = "UPDATE  citas SET  tipo_id = '$tipid', id_paciente = '$docum', nom_paciente = '$nom', apell_paciente= '$apell', cita_paciente= '$cita', fecha_paciente = '$fecha', hora_paciente= '$hora' where cod_cita = '$new_cod'";
$resultado_cita = mysqli_query($conexion, $actualizar_cita);

if (!$resultado_cita) {
	echo "Error al actualizar los datos";
}
 else{
 	print( "<h2>Los datos se han actualizado correctamente<h2>");
 }


?>
<br>
<a href="indexx.php"><input type="button" value="Regresar" class="my"></a>
</html>