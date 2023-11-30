<html>
	<head>
		<title>Ejemplo ADSI HTML - PHP</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body bgcolor="white" background="fondo.jpg"></body>


<?php

include 'conexiones.php';


$fname = $_FILES['insertar']['name'];
echo 'Cargando nombre del archivo: '.$fname.' <br>';
$chk_ext = explode(".",$fname);

if(strtolower(end($chk_ext)) == "csv")
{
	 //si es correcto, entonces damos permisos de lectura para subir
	 $filename = $_FILES['insertar']['tmp_name'];
	 $handle = fopen($filename, "r");

 	while (($data = fgetcsv($handle, 1000, ";")) !== FALSE)
	{
	   	//consulta para saber si ya esta ingresado
		$verificar = "SELECT * from citas where tipo_id = '$data[0]' and id_paciente = '$data[1]' and nom_paciente = '$data[2]' and apell_paciente = '$data[3]' and cita_paciente = '$data[4]' and fecha_paciente = '$data[5]' and hora_paciente = '$data[6]'"; 
		$resultado_verifica = mysqli_query($conexion, $verificar);
		if(mysqli_num_rows($resultado_verifica) > 0)
		{ ?>

			<center>
				<h2>La cita ya se encuentra registrada en la base de datos</h2>
				<br>
				<a href="indexx.php" class="botoness">Regresar</a>
			</center>
		  
		<?php exit;
		}
		else
		{
			//Insertamos los datos con los valores...
		    $insertar = "INSERT into citas ( tipo_id, id_paciente, nom_paciente, apell_paciente, cita_paciente, fecha_paciente, hora_paciente) values ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]')";
		    mysqli_query($conexion, $insertar);
		}
	   
	}
		?>
		<center>
				<h2>La cita fue registrada exitosamente en la base de datos</h2>
				<br>
				<a href="indexx.php" class="botoness">Regresar</a>
			</center>
			<?php //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
	fclose($handle);
}
else
{
//si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para             
//ver si esta separado por " , "
	?>

			<center>
				<h2>El archivo que esta intentando insertar no tiene la extensión CSV solicitada</h2>
				<br>
				<a href="indexx.php" class="botoness">Regresar</a>
			</center>
		  
		<?php
}
?>
</html>