<?php 

include_once '../gestionarusuarios/modelo_usuario.php';
include_once 'pdf.php';
$usuario = new Usuario();
$lista = $usuario->listar();

$pdf = new informe();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(255, 207, 17);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(40,6,'USUARIO',1,0,'C',1);
$pdf->Cell(40,6,'CORREO',1,0,'C',1);
$pdf->Cell(40,6,'ROL',1,0,'C',1);
$pdf->Cell(40,6,'EMPLEADO',1,1,'C',1);

$pdf->SetFillColor(224, 235, 255);
$pdf->SetFont('Arial','',10);

foreach ($lista as $value) {

    $pdf->Cell(20,6,$value['id'],1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['usuario']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['correo']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['rol']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['empleado']),1,1,'C');
    
}

$pdf->Output();

 ?>