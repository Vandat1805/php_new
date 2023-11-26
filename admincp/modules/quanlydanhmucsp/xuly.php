<?php
include('../../config/config.php');
$danhmucsp = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
if (isset($_POST['themdanhmuc'])) {
    $sql_them = "INSERT INTO tbl_danhmuc(ten_danhmuc,thutu) VALUE ('".$danhmucsp."','".$thutu."')";
    mysqli_query($conn,$sql_them); 
    header('location:../../index.php?action=quanlydanhmucsanpham&query=them');
}elseif(isset($_POST['suadanhmuc'])){
    $sql_update = "UPDATE tbl_danhmuc SET ten_danhmuc='".$danhmucsp."',thutu='".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]' ";
    mysqli_query($conn,$sql_update); 
    header('location:../../index.php?action=quanlydanhmucsanpham&query=them');
}else{
    $id = $_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
    mysqli_query($conn,$sql_xoa); 
    header('location:../../index.php?action=quanlydanhmucsanpham&query=them');
}
?>