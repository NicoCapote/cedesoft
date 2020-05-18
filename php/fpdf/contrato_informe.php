<?php 

include_once '../contratos/modeloContrato.php';
include_once 'pdf.php';
$contrato = new Contrato();
$lista = $contrato->listar();

$pdf = new informe('L','mm','Letter');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(255, 207, 17);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(40,6,'PROCESO',1,0,'C',1);
$pdf->Cell(40,6,'TIPO_CONTRATO',1,0,'C',1);
$pdf->Cell(40,6,'EMPLEADO',1,0,'C',1);
$pdf->Cell(40,6,'EMPRESA',1,0,'C',1);
$pdf->Cell(40,6,'FEC_CREACION',1,0,'C',1);
$pdf->Cell(40,6,'FEC_EXPIRACION',1,1,'C',1);

$pdf->SetFillColor(224, 235, 255);
$pdf->SetFont('Arial','',10);

foreach ($lista as $value) {

    $pdf->Cell(20,6,$value['id'],1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['proceso']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['tipo_contra']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['empleado']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['empresa_perteneciente']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['fecha_creacion']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['fecha_expiracion']),1,1,'C');
    
}

$pdf->Output();

 ?>