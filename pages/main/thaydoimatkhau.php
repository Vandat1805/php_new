<?php
    if(isset($_POST['doimatkhau'])){
        $taikhoan = $_POST['email'];
        $matkhau_cu = md5($_POST['matkhau_cu']);
        $matkhau_moi = md5($_POST['matkhau_moi']);
        $sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
        $row = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($row);
        if ($count>0) {
            $sql_update = mysqli_query($conn,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'");
            // $_SESSION['dangky'] = $taikhoan;
            // header("Location:index.php");
            echo '<p style="color:green;">Mat khau da duoc thay doi</p>';
        }else{
            echo '<p style="color:red">Tai khoan hoac mat khau cu khong dung, vui long nhap lai</p>';
            // header("Location:login.php");
        }
    }
?>
<div class="col-sm-4 col-sm-offset-1" style="margin-left: 30%;">
            <div class="login-form">
              <!--login form-->
              <h2>Doi mat khau khach hang</h2>
              <form action="#" method="POST">
                <input name="email" type="email" placeholder="Email" />
                <input name="matkhau_cu" type="password" placeholder="Mat khau cu" />
                <input name="matkhau_moi" type="password" placeholder="Mat khau moi" />
                <span>
                  <input type="checkbox" class="checkbox" />
                  Nho dang nhap
                </span>
                <button type="submit" name="doimatkhau" class="btn btn-default">Doi mat khau</button>
              </form>
            </div>
            <!--/login form-->
          </div>