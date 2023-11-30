<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body bgcolor="white" background="fondo.jpg">
	<center>
		<br><br>
		<h1  class="stroke" style="color: #fff">CITA</h1>
		<br><br>
		<table border="2" bordercolor="black" class=" table-dark table-hover">
			<tr>
				<td><b><h3>Codigo de la cita<h3></b></td>
				<td><b><h3>Tipo de documento<h3></b></td>
				<td><b><h3>Documento<h3></b></td>
				<td><b><h3>Nombre(s)<h3></b></td>
					<td><b><h3>Apellido(s)<h3></b></td>
						<td><b><h3>Tpo de cita<h3></b></td>
							<td><b><h3>Fecha<h3></b></td>
								<td><b><h3>Hora<h3></b></td>
					<td colspan="3"><center><b>Acciones</b></center></td>
<?php
			    include 'conexiones.php';

			    $docus = $_POST['docum'];
			     $idcus = $_POST['tipoido'];

			    error_reporting(0);
			    
			   
			    
			    
			    $consultar_citas = "SELECT * from citas where  tipo_id = '$idcus' and id_paciente = '$docus'";


			    $resultado_citas = mysqli_query($conexion, $consultar_citas);
			    while($mostrar_citas = mysqli_fetch_array($resultado_citas))
					{
			    
	    

			?>
			<tr>
				<td><?php echo $codii = $mostrar_citas['cod_cita']?></td>
				<td><?php echo  $nom =$mostrar_citas['tipo_id']?></td>
				<td><?php echo $idedd =$mostrar_citas['id_paciente']?></td>
				<td><?php echo $mostrar_citas['nom_paciente']?></td>
				<td><?php echo $mostrar_citas['apell_paciente']?></td>
				<td><?php echo $mostrar_citas['cita_paciente']?></td>
				<td><?php echo $mostrar_citas['fecha_paciente']?></td>
				<td><?php echo $mostrar_citas['hora_paciente']?></td>
				<td><a href="eliminar_cita.php?ided=<?php echo $codii ?>"><input type="button" value="Eliminar" class="botoness"></td>
				<td><a href="actualizar_paciente.php?ided=<?php echo $codii ?>"><input type="button" value="Actualizar" class="botoness"></td>
					<td><a href="reporte_paciente.php?ided=<?php echo $codii ?>"><input type="button" value="Reporte" class="botoness"></td>

			
				
			</tr>
			<?php
		          }
		         if ($docus = $idedd) {
	//echo "Error al actualizar los datos";
}
 else{
 	print( "<h2>No se a encontrado una cita registrada con ese documento<h2>");
}


?>
<br><br>
<a href="indexx.php" class="my"><i class="fas fa-backward">Regresar</i></a>





			