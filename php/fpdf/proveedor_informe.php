<?php 

include_once '../proveedores/modelo_proveedores.php';
include_once 'pdf.php';
$pais = new Proveedores();
$lista = $pais->listar();

$pdf = new informe();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(255, 207, 17);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(40,6,'NIT',1,0,'C',1);
$pdf->Cell(40,6,'NOM_PROVEEDOR',1,0,'C',1);
$pdf->Cell(50,6,'DESC_PROVEEDOR',1,0,'C',1);
$pdf->Cell(40,6,'ID_CONTRATO',1,1,'C',1);

$pdf->SetFillColor(224, 235, 255);
$pdf->SetFont('Arial','',10);

foreach ($lista as $value) {

    $pdf->Cell(20,6,$value['id'],1,0,'C');
    $pdf->Cell(40,6,$value['no_nit'],1,0,'C');
    $pdf->Cell(40,6,$value['nom_proveedor'],1,0,'C');
    $pdf->Cell(50,6,$value['desc_proveedor'],1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['id_contrato']),1,1,'C');
    
}

$pdf->Output();

 ?>