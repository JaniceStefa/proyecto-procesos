<?php  
	require('fpdf/fpdf.php');
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(100,10,'Ficha de Presupuesto - Fisica',0,1,'L');

	$pdf->Cell(190,50,'',1,1,'C');
	$pdf->SetFont('Arial','I',10);
	$y=$pdf->GetY();
	$pdf->SetY($y-50);
	$pdf->Cell(190,10,'Distinguido',0,1,'L');
	$pdf->Cell(190,10,'Direccion: ',0,1,'L');
	$pdf->Cell(190,10,'Telefono: ',0,1,'L');
	$pdf->Cell(190,10,'E-mail: ',0,1,'L');
	$pdf->SetY($y+3);
	$pdf->Cell(190,20,'',1,1,'C');
	$pdf->SetY($y+4);
	$pdf->Cell(170,10,'Huancayo, a '.date("d").' de '.date("m").' del '.date("Y"),0,1,'R');
	$pdf->Cell(166,10,'Numero Presupuesto: ',0,0,'R');
	$pdf->SetY($y+26);
	$pdf->Cell(190,42,'',1,1,'C');
	$pdf->SetY($y+27);
	$pdf->Cell(190,10,'CLIENTE:',0,1,'L');
	$pdf->Cell(190,10,'Empresa: ',0,1,'L');
	$pdf->Cell(190,10,'CIF: ',0,1,'L');
	$pdf->Cell(190,10,'Direccion: ',0,1,'L');
	$pdf->SetY($y+72);
	$pdf->Cell(190,100,'',1,1,'C');
	$pdf->SetY($y+73);
	$pdf->Cell(190,10,'CONCEPTO:',0,1,'L');
	$pdf->Cell(190,10,'Trabajo: confeccion textil de ',0,1,'L');
	$pdf->SetY($y+180);
	$pdf->Cell(190,27,'',1,1,'C');
	$pdf->SetY($y-60);
	$pdf->Cell(190,10,'IMPORTE:',0,1,'L');
	$pdf->Cell(50,10,'Base disponible:',0,0,'L');
	$pdf->Cell(50,10,'S/:',0,0,'L');
	$pdf->Output();

?>