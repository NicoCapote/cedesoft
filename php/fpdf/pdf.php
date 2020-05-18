<?php

require('fpdf.php');

class informe extends FPDF {

    function Header() {

        $this->Image('../../img/logo.png',55,38,10);
        $this->SetFont('Arial','B',20);
        $this->SetTextColor(48, 59, 90);
        $this->Cell(1);
        $this->Cell(0,70,'CEDESOFT',0,0,'L');
        $this->Ln(45);
    	$this->SetFont('Arial','',14);

    }

    function Footer() {

        $this->SetY(-15);
        $this->SetFont('Arial','I', 8);
        $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
        
    }
}
