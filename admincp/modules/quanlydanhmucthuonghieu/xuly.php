<?php
include('../../config/config.php');
$tendanhmucthuonghieu = $_POST['tendanhmucthuonghieu'];
$thutudanhmucthuonghieu = $_POST['thutudanhmucthuonghieu'];
if (isset($_POST['themdanhmucthuonghieu'])) {
    $sql_them = "INSERT INTO tbl_thuonghieu(ten_thuonghieu,thutu) VALUE ('".$tendanhmucthuonghieu."','".$thutudanhmucthuonghieu."')";
    mysqli_query($conn,$sql_them); 
    header('location:../../index.php?action=quanlydanhmucthuonghieu&query=them');
}elseif(isset($_POST['suadanhmucthuonghieu'])){
    $sql_update = "UPDATE tbl_thuonghieu SET ten_thuonghieu='".$tendanhmucthuonghieu."',thutu='".$thutudanhmucthuonghieu."' WHERE id_thuonghieu='$_GET[iddanhmucthuonghieu]' ";
    mysqli_query($conn,$sql_update); 
    header('location:../../index.php?action=quanlydanhmucthuonghieu&query=them');
}else{
    $id = $_GET['iddanhmucthuonghieu'];
    $sql_xoa = "DELETE FROM tbl_thuonghieu WHERE id_thuonghieu='".$id."'";
    mysqli_query($conn,$sql_xoa); 
    header('location:../../index.php?action=quanlydanhmucthuonghieu&query=them');
}
?>