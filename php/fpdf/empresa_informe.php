<?php 

include_once '../empresas/modeloEmpresa.php';
include_once 'pdf.php';
$empresa = new Empresa();
$lista = $empresa->listar();

$pdf = new informe('L','mm','Letter');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(255, 207, 17);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(40,6,'EMPRESA',1,0,'C',1);
$pdf->Cell(40,6,'NIT',1,0,'C',1);
$pdf->Cell(40,6,'PAIS',1,0,'C',1);
$pdf->Cell(90,6,'DESCRIPCION',1,1,'C',1);

$pdf->SetFillColor(224, 235, 255);
$pdf->SetFont('Arial','',10);

foreach ($lista as $value) {

    $pdf->Cell(20,6,$value['id'],1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['nombre_empresa']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['no_nit']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($value['id_pais']),1,0,'C');
    $pdf->Cell(90,6,utf8_decode($value['descripcion']),1,1,'C');
    
}

$pdf->Output();

 ?>