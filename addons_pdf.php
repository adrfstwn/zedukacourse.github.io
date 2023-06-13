<?php
// memanggil library FPDF
require('library/fpdf.php');
include 'koneksi.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Helvetica','B',20);
$pdf->Cell(200,10,'DATA ADDONS',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Helvetica','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(50,7,'NAMA TRAINER' ,1,0,'C');
$pdf->Cell(75,7,'PENGALAMAN (TAHUN)',1,0,'C');
$pdf->Cell(55,7,'BIDANG',1,0,'C');
 
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Helvetica','',10);
$no=1;
$data = mysqli_query($koneksi,"SELECT  * FROM barang");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(50,6, $d['nama'],1,0);
  $pdf->Cell(75,6, $d['harga'],1,0);  
  $pdf->Cell(55,6, $d['deskripsi'],1,1);

}
 
$pdf->Output();
 
?>