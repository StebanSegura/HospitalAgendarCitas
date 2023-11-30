<?php
include 'conexiones.php';
 $codii = $_GET['ided'];

?>

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
<body bgcolor="skyblue" background="fondo.jpg"  >
	<br><br>
	<center>
		<h2>Actualizar Cita</h2>
		<br>
		<form action="actualizar.php" method="POST">
		<table border="1" class=" table-dark">
		<tr>
				<td><b><h3>Codigo de la cita<h3></b></td>
				
				<td><b><h3>Documento<h3></b></td>
				<td><b><h3>Nombre(s)<h3></b></td>
					<td><b><h3>Apellido(s)<h3></b></td>
						
			</tr>
			<?php 
			 $consultar_citas = "SELECT * from citas where cod_cita = '$codii'";

			    $resultado_citas = mysqli_query($conexion, $consultar_citas);

			    while($mostrar_citas = mysqli_fetch_array($resultado_citas))
					{

			?>
		
				
				
				
				
                
			
			
			<tr>
			<td><?php echo $cod = $mostrar_citas['cod_cita']?></td>

			<input  class="inp" type="text" name="precio" value="Tipo" required class =" botoness">
			<select name="tipoid" class="botoness" >
				
				<option>Tarjeta de Identidad</option>
				<option>Cedula de ciudadania</option>
				<br>
			</select>
			
			<td><input type="text" name="docu"  required   class =" botoness" value="<?php echo $mostrar_citas['id_paciente']?>"></td>
			
			<td><input type="text" name="nombr"  required   class =" botoness" value="<?php echo $mostrar_citas['nom_paciente']?>"></td>		
			
			<td><input type="text" name="apell"  required   class =" botoness" value="<?php echo $mostrar_citas['apell_paciente']?>"></td>

			<br>
			
			
			
			<input class="inp" type="text" name="precio" value="Tipo" readonly="" required class =" botoness">
			<select name="tipocita"  class="botoness">
				
				<option>Medicina General</option>
				<option>Odontologia</option>
				<option>Pediatria</option>
				<option>Radiologia</option>
				<option>Oncologia</option>
			</select>	
			<br>		
			<input  class="inp" type="text" value="Fecha" required class =" botoness">
			<input type="date" name="fecha" required class =" botoness">
			<br>
			
			<input  class="inp" type="text"  value="Hora" required class =" botoness">
			<input type="time" name="hora" placeholder="" required class =" botoness">
			<input type="hidden" name="codigo" value="<?php echo $codii ?>">
			
				
			</tr>

		<?php 
	             } 
		?>
		</table>

		<br>
		<input type="submit" name="" value="Actualizar" class="my">
<a href="indexx.php"><input type="button" value="Cancelar" class="my"></a>
   </form>
	</center>

</body>
</html>
