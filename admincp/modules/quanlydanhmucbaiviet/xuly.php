<?php
include('../../config/config.php');
$tendanhmucbaiviet = $_POST['tendanhmucbaiviet'];
$thutudanhmucbaiviet = $_POST['thutudanhmucbaiviet'];
if (isset($_POST['themdanhmucbaiviet'])) {
    $sql_them = "INSERT INTO tbl_danhmucbaiviet(tendanhmuc_baiviet,thutu) VALUE ('".$tendanhmucbaiviet."','".$thutudanhmucbaiviet."')";
    mysqli_query($conn,$sql_them); 
    header('location:../../index.php?action=quanlydanhmucbaiviet&query=them');
}elseif(isset($_POST['suadanhmucbaiviet'])){
    $sql_update = "UPDATE tbl_danhmucbaiviet SET tendanhmuc_baiviet='".$tendanhmucbaiviet."',thutu='".$thutudanhmucbaiviet."' WHERE id_baiviet='$_GET[iddanhmucbaiviet]' ";
    mysqli_query($conn,$sql_update); 
    header('location:../../index.php?action=quanlydanhmucbaiviet&query=them');
}else{
    $id = $_GET['iddanhmucbaiviet'];
    $sql_xoa = "DELETE FROM tbl_danhmucbaiviet WHERE id_baiviet='".$id."'";
    mysqli_query($conn,$sql_xoa); 
    header('location:../../index.php?action=quanlydanhmucbaiviet&query=them');
}
?>