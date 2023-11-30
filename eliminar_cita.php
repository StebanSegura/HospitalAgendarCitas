<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<style>
		h2{color: #fff;}
		h3{color: #fff;}
	</style>
</head>
<body bgcolor="white" background="fondo.jpg" width="20" height="50">

</body>

<?php
include 'conexiones.php';
 $codii = $_GET['ided'];

 $eliminar_cita = "DELETE from citas where cod_cita = '$codii'";
 $resultado_cita = mysqli_query($conexion, $eliminar_cita);

 if (!$resultado_cita)
  {
 	
 	echo "Error al elimiar la cita";
 }
else{
	print( "<h2> la cita se a eliminado correctamente <h2>");
}

?>
<br>
<a href="indexx.php"><input type="button" value="Regresar" class="my"></a>
</html>