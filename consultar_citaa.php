<!DOCTYPE html>
<html>
	<head>
		<title>Inicio de sesión</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	</head>
	<body bgcolor="white" background="fondo.jpg">
		<center>
	<main class="container p-1">
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6">
			<br><br>
			<form action="validar.php" method="POST">
				<h2 style="color: white" class="stroke" >Inicio de sesion</h2>
				<br>
				<input type="text" name="documento" placeholder="Ingrese el documento del usuario" class="botoness" required>
				<br>
				<input type="password" name="contrasena" placeholder="Ingrese la contraseña del usuario" class="botoness"  maxlength="10" required>
				<br>
				<input type="submit" name="enviar" class="my" value="Iniciar sesión">
			</form>
		
			</div>
			<div class="col-md-3">
			</div>
		</div>
	</main>
	</center>
	</body>
</html>