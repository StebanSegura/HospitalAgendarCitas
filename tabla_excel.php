<?php 
header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
header('Content-Disposition: attachment; filename=reporte_rutas.xls');

include 'conexiones.php';
$consultar_citas = 'SELECT * from citas';
$resultado_citas = mysqli_query($conexion,$consultar_citas);
?> 

 
 <table border="2" cellpadding="2" cellspacing="0" width="80%">
	<tr>
		<td style="background-color: green;color:black;">Codigo</td>
		<td style="background-color: green;color:black;">Tipo documento</td>
		<td style="background-color: green;color:black;">Documento</td>
		<td style="background-color: green;color:black;">Nombre</td>
		<td style="background-color: green;color:black;">Apellido</td>
		<td style="background-color: green;color:black;">Tipo de cita</td>
		<td style="background-color: green;color:black;">Fecha cita</td>
		<td style="background-color: green;color:black;">Hora cita</td>
		

	</tr>
	<?php
	while ($mostrar_citas = mysqli_fetch_array($resultado_citas))
	{
	?>
	<tr>
		<td  style="background-color: skyblue;"><?php echo $codii = $mostrar_citas['cod_cita']?></td>
				<td style="background-color: skyblue;" ><?php echo  $nom =$mostrar_citas['tipo_id']?></td>
				<td style="background-color: skyblue;"><?php echo $idedd =$mostrar_citas['id_paciente']?></td>
				<td style="background-color: skyblue;"><?php echo $mostrar_citas['nom_paciente']?></td>
				<td style="background-color: skyblue;"><?php echo $mostrar_citas['apell_paciente']?></td>
				<td style="background-color: skyblue;" ><?php echo $mostrar_citas['cita_paciente']?></td>
				<td style="background-color: skyblue;"><?php echo $mostrar_citas['fecha_paciente']?></td>
				<td style="background-color: skyblue;"><?php echo $mostrar_citas['hora_paciente']?></td>
	</tr>
	<?php } ?>
	<caption style="color: skyblue">Citas registradas en el hospital</caption >
</table>