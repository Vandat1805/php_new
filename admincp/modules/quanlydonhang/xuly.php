<?php
session_start();
  require('../../../Carbon/autoload.php');
  use Carbon\Carbon;
  use Carbon\CarbonInterval;
include('../../config/config.php');
$now = Carbon::now('Asia/Ho_Chi_minh')->toDateString();
if (isset($_GET['code'])) {
    $code_cart = $_GET['code'];
    $sql = mysqli_query($conn,"UPDATE tbl_cart SET cart_status=0 WHERE code_cart='".$code_cart."'");
    // thong ke doanh thu
    $sql_lietke_dh = "SELECT * FROM tbl_cart_detail,tbl_sanpham WHERE tbl_cart_detail.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_detail.code_cart='$code_cart' ORDER BY tbl_cart_detail.id_cart_detail DESC";
    $query_lietke_dh = mysqli_query($conn,$sql_lietke_dh);

    $sql_thongke = "SELECT * FROM tbl_thongke WHERE ngaydat = '$now'";
    $query_thongke = mysqli_query($conn,$sql_thongke);
    $soluongmua = 0;
    $doanhthu = 0;

    while($row = mysqli_fetch_array($query_lietke_dh)){
        $soluongmua+=$row['soluongmua'];
        // $doanhthu+=$row['giasp'];
    }
    $doanhthu = $_SESSION['doanhthu'];
    if (mysqli_num_rows($query_thongke)==0) {
        $soluongban = $soluongmua;
        $doanhthu = $doanhthu;
        $donhang = 1;
        $sql_insert_thongke = mysqli_query($conn,"INSERT INTO tbl_thongke(ngaydat,soluongban,doanhthu,donhang)VALUES('$now','$soluongban','$doanhthu','$donhang')");
    }elseif(mysqli_num_rows($query_thongke)!=0){
        while($row_tk = mysqli_fetch_array($query_thongke)){
            $soluongban = $row_tk['soluongban']+$soluongmua;
            $doanhthu = $row_tk['doanhthu']+$doanhthu;
            $donhang = $row_tk['donhang']+1;
            $sql_update_thongke = mysqli_query($conn,"UPDATE tbl_thongke SET soluongban='$soluongban',doanhthu='$doanhthu',donhang='$donhang' WHERE ngaydat='$now'");
        }
    }
    header('Location:../../index.php?action=quanlydonhang&query=lietke');
}
// session_start();
// echo $_SESSION['doanhthu'];
?>