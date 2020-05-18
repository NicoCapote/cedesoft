<?php 

include_once '../gestionprocesos/modelo_proceso.php';
include_once 'pdf.php';
$proceso = new Proceso();
$lista = $proceso->listar();

$pdf = new informe();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(255, 207, 17);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(40,6,'PROCESO',1,0,'C',1);
$pdf->Cell(120,6,'DESCRIPCION',1,1,'C',1);

$pdf->SetFillColor(224, 235, 255);
$pdf->SetFont('Arial','',10);

foreach ($lista as $value) {

    $pdf->Cell(20,6,$value['id'],1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['nom_proceso']),1,0,'C');
    $pdf->Cell(120,6,utf8_decode($value['desc_proceso']),1,1,'C');
    
}

$pdf->Output();

 ?>