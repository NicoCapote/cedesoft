<?php 

include_once '../gestiociudades/modelo_ciudades.php';
include_once 'pdf.php';
$ciudad = new Ciudades();
$lista = $ciudad->listar();

$pdf = new informe();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(255, 207, 17);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(40,6,'NOMBRE_CIUDAD',1,0,'C',1);
$pdf->Cell(40,6,'PAIS',1,1,'C',1);

$pdf->SetFillColor(224, 235, 255);
$pdf->SetFont('Arial','',10);

foreach ($lista as $value) {

    $pdf->Cell(20,6,$value['id'],1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['nom_ciudad']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['pais']),1,1,'C');
    
}

$pdf->Output();

 ?>