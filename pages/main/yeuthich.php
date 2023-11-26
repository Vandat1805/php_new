<?php
    include("../../admincp/config/config.php");
    require('../../Carbon/autoload.php');
    use Carbon\Carbon;
    use Carbon\CarbonInterval;
    session_start();
    $now = Carbon::now('Asia/Ho_Chi_Minh');
 if (isset($_POST['product_id'])) {
 $id_dangky = $_SESSION['id_khachhang'];
        $product_id = $_POST['product_id'];
        $sql_yeuthich = "INSERT INTO tbl_productlove(id_dangky,id_sanpham,product_favor)VALUES('".$id_dangky."','".$product_id."',1)";
        $query_yeuthich = mysqli_query($conn,$sql_yeuthich);
        // ------------------------------------------------
}elseif(isset($_POST['binhluan'])){
    $id_dangky = $_POST['id_dangky'];
    $binhluan = $_POST['noidungbinhluan'];
    $id_sanpham = $_POST['id_sanpham'];
    $sql_binhluan = "INSERT INTO tbl_coment(id_dangky,noidung_coment,date_coment,id_sanpham)VALUES('".$id_dangky."','".$binhluan."','".$now."','".$id_sanpham."')";
    $query_binhluan = mysqli_query($conn,$sql_binhluan);
    header("Location:/php_basic/index.php?quanly=sanpham&id=".$id_sanpham."");
    // ------------------------------------------------
    }elseif(isset($_GET['dangxuat'])){
    unset($_SESSION['id_khachhang']);   
    header('Location:/php_basic/index.php');
    // ------------------------------------------------
}elseif(isset($_POST['product_delete'])){
    $id = $_POST['product_delete'];
    $sql_xoa = "DELETE FROM tbl_productlove WHERE id_productlove='".$id."'";
    $query_xoa = mysqli_query($conn,$sql_xoa);
    header('Location:../../index.php?quanly=taikhoan');
    // ------------------------------------------------
    }elseif(isset($_POST['binhluanbaiviet'])){
    $id_dangky = $_POST['id_dangky'];
    $noidungbinhluan = $_POST['noidungbinhluan'];
    $id_chitietbv = $_POST['id_chitietbv'];
    $sql_baiviet = "INSERT INTO tbl_binhluanbaiviet(id_dangky,id_chitietbv,date_coment,noidung_binhluan) VALUES ('".$id_dangky."','".$id_chitietbv."','".$now."','".$noidungbinhluan."')";
    $query_binhluan = mysqli_query($conn,$sql_baiviet);
    header("Location:/php_basic/index.php?quanly=baiviet&id=".$id_chitietbv."");
    }
 ?>
