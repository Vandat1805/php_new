<?php
include('../../config/config.php');
require('../../../Carbon/autoload.php');
use Carbon\Carbon;
use Carbon\CarbonInterval;
$now = Carbon::now('Asia/Ho_Chi_Minh');
$tenbaiviet = $_POST['tenbaiviet'];
//xu ly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().''.$hinhanh;
$tomtat = $_POST['tomtat'];
$tablienquan = $_POST['tablienquan'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];
if (isset($_POST['thembaiviet'])) {
    $sql_them = "INSERT INTO tbl_baiviet(tenbaiviet,tablienquan,hinhanh,tomtat,noidung,tinhtrang,id_baiviet,date_baiviet) VALUE ('".$tenbaiviet."','".$tablienquan."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."','".$danhmuc."','".$now."')";
    mysqli_query($conn,$sql_them); 
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    header('location:../../index.php?action=quanlybaiviet&query=them');
}elseif(isset($_POST['suabaiviet'])){
    if(!empty($_FILES['hinhanh']['name'])){
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        $sql_update = "UPDATE tbl_baiviet SET tenbaiviet='".$tenbaiviet."',hinhanh='".$hinhanh."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_baiviet='".$danhmuc."',tablienquan='".$tablienquan."',date_baiviet='".$now."' WHERE id='$_GET[idbaiviet]'";
        // xoa hinh anh cu
        $sql = "SELECT * FROM tbl_baiviet WHERE id='$_GET[idbaiviet]' LIMIT 1";
        $query = mysqli_query($conn,$sql); 
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/'.$row['hinhanh']);
        }
    }else{
        $sql_update = "UPDATE tbl_baiviet SET tenbaiviet='".$tenbaiviet."',hinhanh='".$hinhanh."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_baiviet='".$danhmuc."',tablienquan='".$tablienquan."',date_baiviet='".$now."' WHERE id='$_GET[idbaiviet]'";
    }
        mysqli_query($conn,$sql_update); 
        header('location:../../index.php?action=quanlybaiviet&query=them');
}else{
    $id = $_GET['idbaiviet'];
    $sql = "SELECT * FROM tbl_baiviet WHERE id='$id' LIMIT 1";
    $query = mysqli_query($conn,$sql); 
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/'.$row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tbl_baiviet WHERE id='".$id."'";
    mysqli_query($conn,$sql_xoa); 
    header('location:../../index.php?action=quanlybaiviet&query=them');
}
?>