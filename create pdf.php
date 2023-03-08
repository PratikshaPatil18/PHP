<?php
require('C:\xampp\htdocs\PHP\FPDF\create pdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->setFont('Arial','B',18);
$pdf->cell(8,9,'hello world');
$pdf->output();
?>