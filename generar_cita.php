<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body bgcolor="white" background="fondo.jpg">
	<center>
<form action="generar_guardar.php" method="POST" >
			<h2 style="color: #fff" class="stroke">Ingresa los datos correspondientes</h2>
			
			<br>
			<input  class="inp" type="text" name="precio" value="Tipo" required class =" botoness">
			<select name="tipoid" class="botoness" >
				
				<option>Tarjeta de Identidad</option>
				<option>Cedula de ciudadania</option>
			</select><br>
			<input type="text" name="docu" placeholder="Documento"  required   class =" botoness">
			<br>
			<input type="text" name="nombre" placeholder="Nombre(s)" required class =" botoness">
			<br>
			<input type="text" name="apellido" placeholder="Apeliido(s)" required class =" botoness">
			<br>
			<input class="inp" type="text" name="precio" value="Tipo" readonly="" required class =" botoness">
			<select name="tipocita" class="botoness" >
				
				<option>Medicina General</option>
				<option>Odontologia</option>
				<option>Pediatria</option>
				<option>Radiologia</option>
				<option>Oncologia</option>
			</select>			<br>
			<input  class="inp" type="text" value="Fecha" required class =" botoness">
			<input type="date" name="fecha" required class =" botoness">
			<br>
			<input  class="inp" type="text"  value="Hora" required class =" botoness">
			<input type="time" name="hora" placeholder="" required class =" botoness">
			<br>
			<input type="submit" name="Registrar" value="Registrar"  class="my">
			<a href="indexx.php"><input type="button" name="Registrar" value="Cancelar"  class="my"></a>

		</form>
			</center>

</body>
</html>
