<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body bgcolor="white" background="fondo.jpg">
	<center>
<form action="consultar_mostrar.php" method="POST" >
			<h2 style="color: #fff" class="stroke">Ingresa tu documento</h2>
			
			<br>
			<input  class="inp" type="text" name="precio" value="Tipo" required >
			<select name="tipoido" class="botoness" >
				
				<option>Tarjeta de Identidad</option>
				<option>Cedula de ciudadania</option>
			</select><br>
			<input type="text" name="docum" placeholder="Documento"  required   class =" botoness">
			<br>
			
			<br>
			<input type="submit" name="Registrar" value="Consultar"  class="my">
			<a href="baseh.php"><input type="button" name="Registrar" value="Cancelar"  class="my"></a>

		</form>
		<br><br>
		<a href="tabla_excel.php"  class="myy"><i class="far fa-file-excel"> Exporta Citas</i></a>
<a href="reporte_all.php"  class="myo"><i  class="far fa-file-pdf"> Exportar Citas</i></a>
<br>
               <form action="insertar_excel.php" method="POST" enctype="multipart/form-data" >
				<div class="form-group">
					<label class="stroke" >Insertar el archivo EXCEL</label> <br>
					<input type="file" class="botoness" name="insertar">
					<input type="submit" name="insertar" value="Insertar" class="my">
					
				</div>
			</form>
			</center>
			<br><br>




</body>
</html>
