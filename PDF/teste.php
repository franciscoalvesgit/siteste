<?php

$nome = "Rodrigo";

require  'PDF/lib/fpdf.php';


$pdf = new FPDF("P","mm","A4");

$pdf->SetAuthor("Carlos Alves");

$pdf->SetTitle("Criando pdf");

$pdf->AliasNbPages('{np}');

$pdf->SetMargins(10, 30,10);

$pdf->AddPage();

$pdf->SetFont('Arial','B', 12);

$pdf->Cell(0,0,"texto alinhado ao centro",0,0,"C");

$pdf->Ln(10);
$pdf->cell(0,0,"Texto alinhado a esquerda",0,0,"L");
$pdf->Ln(10);
$pdf->cell(0,0,"Texto alinhado a direita",0,0,"R");

$pdf->MultiCell(0,0,"Aqui vai um texto longo,para que possa ser feito a quebra de linha, como você pode ver isso acontecendo aqui, essa forma é boa para textos longo, para textos curtos é preferível a utilização da função 'cell'. a quebra de linha\n pode ser feito com o \\n \n OK",0,"J");

$pdf->Output();







?>