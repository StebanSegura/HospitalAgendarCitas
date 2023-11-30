<?php
require('fpdf/fpdf.php');
include 'conexiones.php';



class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
   
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'reporte cita',1,1,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'L');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF('L', 'mm', array(139.7,215.9));
$pdf->AliasNbPages();
$pdf->AddPage();

//configuración del color de celda y texto
$pdf->SetDrawColor(0,0,0);
$pdf->SetFillColor(255,0,0);
$pdf->SetTextColor(0,0,0);
//formato para el tamaño de la letra
$pdf->SetFont('Arial','B',10);
//creación de celdas
$pdf->Cell(14,7,utf8_decode('Código'),1,0,'C',0);
$pdf->Cell(36,7,'Tipo de documento',1,0,'C',0);
$pdf->Cell(24,7,'Cocumento',1,0,'C',0);
$pdf->Cell(30,7,'Nombre',1,0,'C',0);
$pdf->Cell(32,7,'Apellido',1,0,'C',0);
$pdf->Cell(26,7,'Especialista',1,0,'C',0);
$pdf->Cell(22,7,'Fecha',1,0,'C',0);
$pdf->Cell(15,7,'Hora',1,1,'C',0);


$consultar_cita = "SELECT * FROM citas";
$resultado_cita = mysqli_query($conexion, $consultar_cita);
while($mostrar_citas = mysqli_fetch_array($resultado_cita))
{
    $pdf->SetDrawColor(9,0,0);
    $pdf->SetFillColor(9,0,0);
    $pdf->SetTextColor(9,0,0);
    //formato para el tamaño de la letra
    $pdf->SetFont('Arial','',10);

    $pdf->Cell(14,7,$mostrar_citas['cod_cita'],1,0,'C',0);
    $pdf->Cell(36,7,$mostrar_citas['tipo_id'],1,0,'C',0);
    $pdf->Cell(24,7,$mostrar_citas['id_paciente'],1,0,'C',0);
    $pdf->Cell(30,7,utf8_decode($mostrar_citas['nom_paciente']),1,0,'C',0);
    $pdf->Cell(32,7,utf8_decode($mostrar_citas['apell_paciente']),1,0,'C',0);
    $pdf->Cell(26,7,utf8_decode($mostrar_citas['cita_paciente']),1,0,'C',0);
    $pdf->Cell(22,7,$mostrar_citas['fecha_paciente'],1,0,'C',0);
    $pdf->Cell(15,7,$mostrar_citas['hora_paciente'],1,1,'C',0);
}
$pdf->Output();
?>