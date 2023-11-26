<?php
if (isset($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $matkhau = md5($_POST['matkhau']);
    $sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
    $row = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($row);
    if ($count>0) {
        $row_data = mysqli_fetch_array($row);
        $_SESSION['dangky'] = $row_data['tenkhachhang'];
        $_SESSION['email'] = $email;
        $_SESSION['id_khachhang'] = $row_data['id_dangky'];
        // header("Location:index.php?quanly=giohang");
        echo '<script>location.href="index.php?quanly=giohang"</script>';
    }else{
        echo '<p style="color:red;">Email hoac mat khau khong dung, vui long nhap lai</p>';
    }
}
?>
<div class="col-sm-4 col-sm-offset-1" style="margin-left: 30%;">
            <div class="login-form">
              <!--login form-->
              <h2>Dang nhap khach hang</h2>
              <form action="" method="POST">
                <input name="email" type="email" placeholder="Email" />
                <input name="matkhau" type="password" placeholder="Mat khau" />
                <span>
                  <input type="checkbox" class="checkbox" />
                  Nho dang nhap
                </span>
                <button type="submit" name="dangnhap" class="btn btn-default">Dang nhap</button>
              </form>
            </div>
            <!--/login form-->
          </div>