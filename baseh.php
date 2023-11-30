<?php

session_start();

include 'conexiones.php';

$user = $_SESSION['usuario'];

if($user == null || $user == '')
{
	header ("location: intruso.php");
	die();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body bgcolor="white" background="fondo.jpg">
	<center>
	<main class="container p-1">
		<div class="row">
			<div class="col-md-12">
				<br><br>
				<?php
				$consultar = "SELECT * from citas where id_paciente = '$user'";
				$resultado = mysqli_query($conexion, $consultar);
				$mostrar = mysqli_fetch_array($resultado);
				?>
				<h2>Bienvenido estimado usuario</h2>
				<br>
				<h4><?php echo $mostrar['nom_paciente']?></h4>
				<br>
				<a href="consultar_cita.php" class="my">Continuar</a>
				<br>
				<br>
				<a href="cerrar_sesion.php" class="my">Cerrar sesión</a>
			</div>
		</div>
	</main>
	</center>
	

</body>
</html>