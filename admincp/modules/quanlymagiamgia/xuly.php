<?php
include('../../config/config.php');
$coupon_name = $_POST['coupon_name'];
$coupon_code = $_POST['coupon_code'];
$coupon_time = $_POST['coupon_time'];
$coupon_condition = $_POST['coupon_condition'];
$coupon_number = $_POST['coupon_number'];
if (isset($_POST['add_coupon'])) {
    $sql_them = "INSERT INTO tbl_coupon(coupon_name,coupon_time,coupon_condition,coupon_number,coupon_code) VALUE ('".$coupon_name."','".$coupon_time."','".$coupon_condition."','".$coupon_number."','".$coupon_code."')";
    mysqli_query($conn,$sql_them); 
    header('location:../../index.php?action=quanlymagiamgia&query=them');
}elseif(isset($_POST['edit_coupon'])){
    $sql_update = "UPDATE tbl_coupon SET coupon_name='".$coupon_name."',coupon_time='".$coupon_time."',coupon_condition='".$coupon_condition."',coupon_number='".$coupon_number."',coupon_code='".$coupon_code."' WHERE coupon_id='$_GET[idmagiamgia]' ";
    mysqli_query($conn,$sql_update); 
    header('location:../../index.php?action=quanlymagiamgia&query=them');
}else{
    $id = $_GET['idmagiamgia'];
    $sql_xoa = "DELETE FROM tbl_coupon WHERE coupon_id='".$id."'";
    mysqli_query($conn,$sql_xoa); 
    header('location:../../index.php?action=quanlymagiamgia&query=them');
}
?>