<!DOCTYPE html>
<html>
<head>
	<title>Hospital</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body bgcolor="black" background="fondo.jpg">
	<center>
		<h1 style="color: #fff" class="stroke">Bienvendio al hospital</h1>
		<h2 style="color: #fff" class="stroke">Que deseas hacer </h2>
		<form action="generar_cita.php" method="POST">
			<a href="generar_cita.php" class="my"><i class="fas fa-plus-square"> Generar nueva cita</i></a>
			
			<br><br>
			</form>
			<form action="consultar_cita.php" method="POST">
				<a href="consultar_citaa.php" class="my"><i class="fas fa-search"> Consultar</i></a>


			</form>
	</center>

</body>
</html>