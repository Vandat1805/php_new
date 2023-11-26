<?php
include('../../config/config.php');
$sukien = $_POST['sukien'];
$khuyenmai = $_POST['khuyenmai'];
if (isset($_POST['themkhuyenmai'])) {
    $sql_them = "INSERT INTO tbl_khuyenmai(id_even,id_sanpham) VALUE ('".$sukien."','".$khuyenmai."')";
    mysqli_query($conn,$sql_them); 
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    header('location:../../index.php?action=quanlysukien&query=them');
}else{
    $id = $_GET['idkhuyenmai'];
    $sql_xoa = "DELETE FROM tbl_khuyenmai WHERE id_khuyenmai='".$id."'";
    mysqli_query($conn,$sql_xoa); 
    header('location:../../index.php?action=quanlykhuyenmai&query=them');
}
?>