<?php
require('../fpdf/fpdf.php');
require('ConexionBD.php');

date_default_timezone_set("America/Bogota");


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('../img\logo2.png',10,10,-150);
$pdf->Ln(20);
$pdf->Cell(90,20,'Fecha: '.date('d.m.Y.H.i.s').'',0);
$pdf->Ln(10);
$pdf->Cell(100,20,utf8_decode('REPORTES PDF'));
$pdf->Ln(10);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,20,'Codigo');
$pdf->Cell(40,20,'Nombre Producto');
$pdf->Cell(40,20,'Marca');
$pdf->Cell(20,20,'Precio');
$pdf->Cell(20,20,'Cantidad');

$pdf->Ln(10);

$pdf->SetFont('Arial','',8);


$query_select = 'SELECT * FROM tabla33';
$result = mysqli_query($conn,$query_select);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($reg = mysqli_fetch_assoc($result)) {
    	


$pdf->Cell(20,20, $reg['codigoproducto'], 0);

$pdf->Cell(25,20, utf8_decode($reg['nombreproducto']), 0);

$pdf->Cell(25,20, utf8_decode($reg['marcaproducto']), 0);

$pdf->Cell(20,20, utf8_decode($reg['preciocompra']), 0);

$pdf->Cell(20,20, utf8_decode($reg['cantidadproducto']), 0);

$pdf->Ln(10);

}
}

$pdf->Output();
mysqli_close($conn);
?>
