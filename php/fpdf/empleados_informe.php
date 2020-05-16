<?php 

include_once '../empleados/modeloEmpleado.php';
include_once 'pdf.php';
$empleado = new Empleado();
$lista = $empleado->listar();

$pdf = new informe('L','mm','Letter');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(255, 207, 17);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(40,6,'NOMBRE',1,0,'C',1);
$pdf->Cell(40,6,'USUARIO',1,0,'C',1);
$pdf->Cell(40,6,'CORREO',1,0,'C',1);
$pdf->Cell(40,6,'EDAD',1,0,'C',1);
$pdf->Cell(40,6,'GENERO',1,0,'C',1);
$pdf->Cell(40,6,'SUCURSAL',1,0,'C',1);
$pdf->Cell(40,6,'INGRESO',1,0,'C',1);
$pdf->Cell(40,6,'SALIDA',1,1,'C',1);

$pdf->SetFillColor(224, 235, 255);
$pdf->SetFont('Arial','',10);

foreach ($lista as $value) {

    $pdf->Cell(20,6,$value['id'],1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['nom_empleado']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['usuario']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['correo']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['edad_empleado']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['genero']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['id_sucursal']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['fecha_ingreso']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['fecha_salida']),1,1,'C');
    
}

$pdf->Output();

 ?>