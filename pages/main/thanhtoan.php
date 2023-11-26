<?php
    session_start();
    include("../../admincp/config/config.php");
    require('../../mail/sendmail.php');
    require('../../Carbon/autoload.php');
    use Carbon\Carbon;
    use Carbon\CarbonInterval;
    
    $now = Carbon::now('Asia/Ho_Chi_Minh');
    $id_khachhang = $_SESSION['id_khachhang'];
    $code_order = rand(0,9999);
    $insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status,cart_date)VALUES('".$id_khachhang."','".$code_order."',1,'".$now."')";
    $cart_query = mysqli_query($conn,$insert_cart);
    if ($insert_cart) {
        //them gio hang chi tiet
        foreach ($_SESSION['cart'] as $key => $value) {
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            $insert_order_detail = "INSERT INTO tbl_cart_detail(id_sanpham,code_cart,soluongmua)VALUES('".$id_sanpham."','".$code_order."','".$soluong."')";
            mysqli_query($conn,$insert_order_detail);
        }
        $tieude = "Dat hang website raiki shop thanh cong";
        $noidung ="<p>Cam on quy khach da dat hang cua chung toi voi ma don hang:".$code_order."</p>";
        $noidung .="<h4>Don dat hang bao gom:</h4>";
        foreach ($_SESSION['cart'] as $key => $val) {
            $noidung .= "<ul style='border:1px solid blue;margin:10px;'>
            <li>".$val['tensanpham']."</li>
            <li>".$val['masp']."</li>
            <li>".number_format($val['giasp'],0,',','.')."d</li>
            <li>".$val['soluong']."</li>
            </ul>";
        }
        $maildathang = $_SESSION['email'];
        $mail = new Mailer();
        $mail->dathangmail($tieude,$noidung,$maildathang);
    }
    unset($_SESSION['cart']);
    echo '<script>location.href="../../index.php?quanly=camon"</script>';
    // header('Location:../../index.php?quanly=camon');
?>
<!-- <p>Thanh toan don hang</p> -->
