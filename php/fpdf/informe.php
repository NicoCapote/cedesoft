<?php
include 'fpdf.php';
include_once '../gestiociudades/modelo_ciudades.php';

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    //$this->Image('..img/logo.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(65);
    // Título
    $this->Cell(60,10,'Informe de Ciudades',1,0,'C');
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
    $this->Cell(0,10, utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

//require_once ('../modelo.php');
$consulta = "SELECT * FROM ciudad";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
//$pdf->Cell(40,10, utf8_decode('¡Hola, Mundo!'));

while($row=$resultado->fetch_assoc()){
    $pdf->Cell(90, 10, $row['id_ciudad'], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $row['nom_ciudad'], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $row['id_pais'], 1, 1, 'C', 0);
}



$pdf->Output();
?>