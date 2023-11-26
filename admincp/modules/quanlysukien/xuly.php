<?php
include('../../config/config.php');
$tensukien = $_POST['tensukien'];
$phantramgiam = $_POST['phantramgiam'];
$tinhtrang = $_POST['tinhtrang'];
if (isset($_POST['themsukien'])) {
    $sql_them = "INSERT INTO tbl_even(title_even,even_number,even_status) VALUE ('".$tensukien."','".$phantramgiam."','".$tinhtrang."')";
    mysqli_query($conn,$sql_them); 
    header('location:../../index.php?action=quanlysukien&query=them');
}elseif(isset($_POST['suasukien'])){
    $sql_update = "UPDATE tbl_even SET title_even='".$tensukien."',even_number='".$phantramgiam."',even_status='".$tinhtrang."' WHERE id_even='$_GET[idsukien]' ";
    mysqli_query($conn,$sql_update); 
    header('location:../../index.php?action=quanlysukien&query=them');
}else{
    $id = $_GET['idsukien'];
    $sql_xoa = "DELETE FROM tbl_even WHERE id_even='".$id."'";
    mysqli_query($conn,$sql_xoa); 
    header('location:../../index.php?action=quanlysukien&query=them');
}
?>