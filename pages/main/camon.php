<?php
include("./admincp/config/config.php");
require('./Carbon/autoload.php');
require('./mail/sendmail.php');
require_once('config_vnpay.php');
use Carbon\Carbon;
use Carbon\CarbonInterval;
$now = Carbon::now('Asia/Ho_Chi_Minh');
$ngaygiao = Carbon::now('Asia/Ho_Chi_Minh');
$now_payment = $now->toDateString();
$timestamp = strtotime($now);
$ngaydat = date('d/m/Y',$timestamp);
$giaodukien = $now->addDays(5);
$fortmat_ngaygiao = strtotime($giaodukien);
$ngaygiao = date('d/m/Y',$fortmat_ngaygiao);
// $fortmat_ngaydat = substr($ngaydat,0,10);
if (isset($_POST['payment'])) {
    $cart_payment = $_POST['payment'];
}
// $cart_payment = $_SESSION['cart_condition'];

if (isset($_GET['vnp_Amount'])) {
    $vnp_Amount = $_GET['vnp_Amount'];
    $vnp_BankCode = $_GET['vnp_BankCode'];
    $vnp_BankTranNo = $_GET['vnp_BankTranNo'];
    $vnp_OrderInfo = $_GET['vnp_OrderInfo'];
    $vnp_PayDate = $_GET['vnp_PayDate'];
    $vnp_TmnCode = $_GET['vnp_TmnCode'];
    $vnp_TransactionNo = $_GET['vnp_TransactionNo'];
    $vnp_CardType = $_GET['vnp_CardType'];
    $code_cart = $_SESSION['code_cart'];

    //insert data vnpay
    $insert_vnpay = "INSERT INTO tbl_vnpay(vnp_amount,vnp_bankcode,vnp_banktran,vnp_cardtype,vnp_orderinfo,vnp_paydate,vnp_tmncode,vnp_transac,code_cart) VALUES ('".$vnp_Amount."','".$vnp_BankCode."','".$vnp_BankTranNo."','".$vnp_CardType."','".$vnp_OrderInfo."','".$vnp_PayDate."','".$vnp_TmnCode."','".$vnp_TransactionNo."','".$code_cart."')";
    $cart_query = mysqli_query($conn,$insert_vnpay);
 
    if ($cart_query) {
        echo '<h3>Giao dich thanh toan bang VNPAY thanh cong</h3>';
        echo '<p>Vui long vao trang <a target="blank" href="#">Lich su don hang </a>de xem chi tiet don hang cua ban</p>';
    }else{
        echo'Giao dich VNPAY that bai';
    }
}elseif(isset($_GET['partnerCode'])){
    $id_khachhang = $_SESSION['id_khachhang'];
    $code_order = rand(0,9999);
    $partnerCode = $_GET['partnerCode'];
    $orderId = $_GET['orderId'];
    $amount = $_GET['amount'];
    $orderInfo = $_GET['orderInfo'];
    $orderType = $_GET['orderType'];
    $transId = $_GET['transId'];
    $payType = $_GET['payType'];
    $cart_payment = 'momo';

    $sql_get_vanchuyen = mysqli_query($conn,"SELECT * FROM tbl_shipping WHERE id_dangky='$id_khachhang' LIMIT 1");
    $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
    $id_shipping = $row_get_vanchuyen['id_shipping'];

    $insert_momo = "INSERT INTO tbl_momo(partner_code, order_id, amount, order_info, order_type, trans_id, pay_type,code_cart) VALUES ('".$partnerCode."','".$orderId."','".$amount."','".$orderInfo."','".$orderType."','".$transId."','".$payType."','".$code_order."')";
    $cart_query = mysqli_query($conn,$insert_momo);
  
    if ($cart_query) {
        $insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status,cart_date,cart_payment,cart_shipping,order_status)VALUES('".$id_khachhang."','".$code_order."',1,'".$now."','".$cart_payment."','".$id_shipping."',0)";
        $cart_query = mysqli_query($conn,$insert_cart);

        foreach ($_SESSION['cart'] as $key => $value) {
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            $insert_order_detail = "INSERT INTO tbl_cart_detail(code_cart, id_sanpham, soluongmua) VALUES ('".$id_sanpham."','".$code_order."','".$soluong."')";
            mysqli_query($conn,$insert_order_detail);
                 //gui mail
        $tieude = "Dat hang website raiki shop thanh cong";
        $noidung ="<p>Cam on quy khach da dat hang cua chung toi voi ma don hang: ".$code_order."</p>";
        $noidung .="<p>Đơn hàng được đặt vào ngày ".$ngaydat."</p>";
        $noidung .="<h4>Don dat hang bao gom:</h4>";
        foreach ($_SESSION['cart'] as $key => $val) {
            $noidung .= "<ul style='border:1px solid blue;margin:10px;'>
            <li>Ten san pham: ".$val['tensanpham']."</li>
            <li>Ma san pham:".$val['masp']."</li>
            <li>Gia san pham:".number_format($val['giasp'],0,',','.')."d</li>
            <li>So luong:".$val['soluong']."</li>
            </ul>";
        }
        $noidung .="<h3>Thoi gian giao du kien khoang 5 ngay tu ngay ".$ngaydat." -> ".$ngaygiao."</h3>";
        $noidung .="Quy khach vui long nhan cuoc goi tu so 1800 5678 cua shop chung toi vao ngay".$ngaygiao."</h3>";
        $maildathang = $_SESSION['email'];
        $mail = new Mailer();
        $mail->dathangmail($tieude,$noidung,$maildathang);
        }
        echo '<h3>Giao dich thanh toan bang MOMO thanh cong</h3>';
        echo '<p>Vui long vao trang <a target="blank" href="#">Lich su don hang </a>de xem chi tiet don hang cua ban</p>';
    }else{
        echo'Giao dich MOMO that bai';
    }
}elseif(isset($cart_payment)=='tien mat'){
    echo '<p>Cam on ban da mua hang chung toi se lien he voi ban thoi gian som nhat</p>';
}elseif(isset($cart_payment)=='chuyen khoan'){
    $id_khachhang = $_SESSION['id_khachhang'];
    $sql_chuyenkhoan = "SELECT * FROM tbl_cart WHERE tbl_cart.id_khachhang = '".$id_khachhang."' AND tbl_cart.cart_payment = 'chuyen khoan'";
    $cart_chuyenkhoan = mysqli_query($conn,$sql_chuyenkhoan);

   
    // Số tài khoản của người nhận tiền.
    // Tên chủ tài khoản.
    // Số tiền chuyển khoản.
}

?>
<?php
if (isset($cart_payment)=='chuyen khoan') {
?>
    <h3>Thong tin chuyen khoan</h3>
    <p>So tai khoan nguoi nhan tien</p>
    <p>Ten chu tai khoan</p>
    <p>Noi dung chuyen khoan</p>
    <strong><p style="display: inline-block;">Chuyen khoan don hang</p></strong>
    
    <?php
    while($chuyen_khoan = mysqli_fetch_array($cart_chuyenkhoan)){
        if (date('Y-m-d',strtotime($chuyen_khoan['cart_date']))==$now_payment) {
        ?>
         <p style="display: inline-block;color:red;font-weight:bold;"><?php echo $chuyen_khoan['code_cart']?></p>
    <?php
        }
}
    ?>
    <?php
}
    ?>
    <?php
    if (isset($_SESSION['giamtheotien'])) {
        unset($_SESSION['giamtheotien']);
    }elseif (isset($_SESSION['giamphantram'])) {
        unset($_SESSION['giamphantram']);
    }
    ?>
    <h2>Cam on ban da mua hang chung toi se lien he voi ban thoi gian som nhat</h2>
    <h3>Quy khach nho kiem tra mail <?php echo $_SESSION['email']?> de xem thong tin va ngay giao don hang</h3>
    <h3><br> Vui long nhan dien thoai qua so 1900 5688 cua shop chung toi</h3>