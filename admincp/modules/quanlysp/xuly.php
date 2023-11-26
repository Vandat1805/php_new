<?php
include('../../config/config.php');
$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masanpham'];
$giasp = $_POST['giasanpham'];
$soluong = $_POST['soluong'];
//xu ly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().''.$hinhanh;
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];
$thuonghieu = $_POST['thuonghieu'];
$khuyenmai = $_POST['khuyenmai'];
if (isset($_POST['themsanpham'])) {
    $sql_them = "INSERT INTO tbl_sanpham(tensanpham,masp,giasp,soluong,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc,id_thuonghieu,id_sale) VALUE ('".$tensanpham."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."','".$danhmuc."','".$thuonghieu."','".$khuyenmai."')";
    mysqli_query($conn,$sql_them); 
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    header('location:../../index.php?action=quanlysanpham&query=them');
}elseif(isset($_POST['suasanpham'])){
    if(!empty($_FILES['hinhanh']['name'])){
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        $sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',hinhanh='".$hinhanh."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."',id_thuonghieu='".$thuonghieu."',id_sale='".$khuyenmai."' WHERE id_sanpham='$_GET[idsanpham]'";
        // xoa hinh anh cu
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
        $query = mysqli_query($conn,$sql); 
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/'.$row['hinhanh']);
        }
    }else{
        $sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."',id_thuonghieu='".$thuonghieu."',id_sale='".$khuyenmai."' WHERE id_sanpham='$_GET[idsanpham]' ";
    }
        mysqli_query($conn,$sql_update); 
        header('location:../../index.php?action=quanlysanpham&query=them');
    }else{
    $id = $_GET['idsanpham'];
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$id' LIMIT 1";
    $query = mysqli_query($conn,$sql); 
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/'.$row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
    mysqli_query($conn,$sql_xoa); 
    header('location:../../index.php?action=quanlysanpham&query=them');
}
?>