<?php
require('../../../tfpdf/tfpdf.php');
require('../../config/config.php');
$pdf = new tFPDF();
$pdf->AddPage("0");

$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->SetFont('DejaVu','',15);
$pdf->SetFillColor(235,236,236);

$code = $_GET['code'];
$sql_lietke_dh = "SELECT * FROM tbl_cart_detail,tbl_sanpham WHERE tbl_cart_detail.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_detail.code_cart='".$code."' ORDER BY tbl_cart_detail.id_cart_detail DESC";
$query_lietke_dh = mysqli_query($conn,$sql_lietke_dh);

$pdf->Write(10,'Don hang cua ban gom co');
$pdf->Ln(10);
 
$width_cell=array(5,35,93,20,30,40);
$pdf->Cell($width_cell[0],10,'ID',1,0,'C',true);
$pdf->Cell($width_cell[1],10,'Ma hang',1,0,'C',true);
$pdf->Cell($width_cell[2],10,'Ten san pham',1,0,'C',true);
$pdf->Cell($width_cell[3],10,'So luong',1,0,'C',true);
$pdf->Cell($width_cell[4],10,'Gia',1,0,'C',true);
// $pdf->Cell($width_cell[5],10,'Ngay dat',1,1,'C',true);
$pdf->Cell($width_cell[5],10,'Tong tien',1,1,'C',true);
$pdf->SetFillColor(235,236,236);
$fill = false;
$i = 0;
while($row = mysqli_fetch_array($query_lietke_dh)){
    $i++;
    $pdf->Cell($width_cell[0],10,$i,1,0,'C',$fill);
    $pdf->Cell($width_cell[1],10,$row['code_cart'],1,0,'C',$fill);
    $pdf->Cell($width_cell[2],10,$row['tensanpham'],1,0,'C',$fill);
    $pdf->Cell($width_cell[3],10,$row['soluongmua'],1,0,'C',$fill);
    $pdf->Cell($width_cell[4],10,number_format($row['giasp']),1,0,'C',$fill);
    // $pdf->Cell($width_cell[5],10,$row['ngaythang'],1,1,'C',$fill);
    $pdf->Cell($width_cell[5],10,number_format($row['soluongmua']*$row['giasp']),1,1,'C',$fill);
    $fill = !$fill;
}

$pdf->Write(10,'Cam on ban da dat hang tai website cua chung toi');
$pdf->Ln(10);
$pdf->Output();
?>