<?php
if (isset($_POST['dangky'])) {
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $matkhau = md5($_POST['matkhau']);
    $diachi = $_POST['diachi'];
    $sodienthoai = $_POST['sodienthoai'];
    $sql_dangky = mysqli_query($conn,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai)VALUES('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$sodienthoai."')");
    if($sql_dangky){
        echo'<p style="color:green">Ban da dang ky thanh cong</p>';
        $_SESSION['dangky'] = $tenkhachhang;
        $_SESSION['email'] = $email;
        $_SESSION['id_khachhang'] = mysqli_insert_id($conn);
        // header('Location:index.php?quanly=giohang');
        echo '<script>location.href="index.php?quanly=giohang"</script>';
    }
}
?>
<div class="col-sm-4" style="margin-left: 30%;">
					<div class="signup-form"><!--sign up form-->
						<h2>Dang ky khach hang!</h2>
						<form action="" method="POST">
							<input name="hovaten" type="text" placeholder="Ho va ten"/>
							<input name="email" type="email" placeholder="Email"/>
							<input name="matkhau" type="password" placeholder="Mat khau"/>
							<input name="diachi" type="text" placeholder="Dia chi"/>
							<input name="sodienthoai" type="text" placeholder="So dien thoai"/>
							<button type="submit" name="dangky" class="btn btn-default">Dang ky</button>
						</form>
					</div><!--/sign up form-->
				</div>
