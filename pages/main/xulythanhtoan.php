<?php
    session_start();
    include("../../admincp/config/config.php");
    require('../../mail/sendmail.php');
    require_once('config_vnpay.php');
    require('../../Carbon/autoload.php');
    use Carbon\Carbon;
    use Carbon\CarbonInterval;
    
    $now = Carbon::now('Asia/Ho_Chi_Minh');
    $id_khachhang = $_SESSION['id_khachhang'];
    $code_order = rand(0,9999);
    $cart_payment = $_POST['payment'];
    // $_SESSION['cart_condition'] = $cart_payment;
        if ($_SESSION['coupon'][0][1]==1) {
         $tongtien = $_SESSION['giamphantram'];
     }
     elseif($_SESSION['coupon'][0][1]==2){
            $tongtien = $_SESSION['giamtheotien'];
        }else{
    $tongtien = 0;
    foreach ($_SESSION['cart'] as $key => $value) {
        $thanhtien = $value['soluong']*$value['giasp'];
        $tongtien+=$thanhtien;
    }
}
        //lay id_shipping
        $id_khachhang = $_SESSION['id_khachhang'];
        $sql_get_vanchuyen = mysqli_query($conn,"SELECT * FROM tbl_shipping WHERE id_dangky='$id_khachhang' LIMIT 1");
        $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
        $id_shipping = $row_get_vanchuyen['id_shipping'];

        if ($cart_payment=='tien mat') {
        //insert gio hang
    $insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status,cart_date,cart_payment,cart_shipping)VALUES('".$id_khachhang."','".$code_order."',1,'".$now."','".$cart_payment."','".$id_shipping."')";
    $cart_query = mysqli_query($conn,$insert_cart);

    if ($cart_query) {
        //them gio hang chi tiet
                foreach ($_SESSION['cart'] as $key => $value) {
                    $id_sanpham = $value['id'];
                    $soluong = $value['soluong'];
                    $insert_order_detail = "INSERT INTO tbl_cart_detail(id_sanpham,code_cart,soluongmua)VALUES('".$id_sanpham."','".$code_order."','".$soluong."')";
                    mysqli_query($conn,$insert_order_detail);
                }
            }
    echo '<script>location.href="../../index.php?quanly=camon"</script>';
            }elseif ($cart_payment=='vnpay') {

                //thanh toan bang vn pay
                $vnp_TxnRef = $code_order; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                $vnp_OrderInfo = 'Thanh toan don hang tai web';
                $vnp_OrderType = 'billpayment';
                $vnp_Amount = $tongtien * 100;
                $vnp_Locale = 'vn';
                $vnp_BankCode = 'NCB';
                $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
                //Add Params of 2.0.1 Version
                $vnp_ExpireDate = $expire;
                $inputData = array(
                    "vnp_Version" => "2.1.0",
                    "vnp_TmnCode" => $vnp_TmnCode,
                    "vnp_Amount" => $vnp_Amount,
                    "vnp_Command" => "pay",
                    "vnp_CreateDate" => date('YmdHis'),
                    "vnp_CurrCode" => "VND",
                    "vnp_IpAddr" => $vnp_IpAddr,
                    "vnp_Locale" => $vnp_Locale,
                    "vnp_OrderInfo" => $vnp_OrderInfo,
                    "vnp_OrderType" => $vnp_OrderType,
                    "vnp_ReturnUrl" => $vnp_Returnurl,
                    "vnp_TxnRef" => $vnp_TxnRef,
                    "vnp_ExpireDate"=>$vnp_ExpireDate
                );

                if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                    $inputData['vnp_BankCode'] = $vnp_BankCode;
                }
                // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
                //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
                // }

                //var_dump($inputData);
                ksort($inputData);
                $query = "";
                $i = 0;
                $hashdata = "";
                foreach ($inputData as $key => $value) {
                    if ($i == 1) {
                        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                    } else {
                        $hashdata .= urlencode($key) . "=" . urlencode($value);
                        $i = 1;
                    }
                    $query .= urlencode($key) . "=" . urlencode($value) . '&';
                }

                $vnp_Url = $vnp_Url . "?" . $query;
                if (isset($vnp_HashSecret)) {
                    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
                    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                }
                $returnData = array('code' => '00'
                    , 'message' => 'success'
                    , 'data' => $vnp_Url);
                    if (isset($_POST['redirect'])) {
                        $_SESSION['code_cart'] = $code_order;
                        $insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status,cart_date,cart_payment,cart_shipping)VALUES('".$id_khachhang."','".$code_order."',1,'".$now."','".$cart_payment."','".$id_shipping."')";
                         $cart_query = mysqli_query($conn,$insert_cart);

                         if ($cart_query) {
                          //them gio hang chi tiet
                   foreach ($_SESSION['cart'] as $key => $value) {
                    $id_sanpham = $value['id'];
                    $soluong = $value['soluong'];
                    $insert_order_detail = "INSERT INTO tbl_cart_detail(id_sanpham,code_cart,soluongmua)VALUES('".$id_sanpham."','".$code_order."','".$soluong."')";
                    mysqli_query($conn,$insert_order_detail);
                }
            }
                        header('Location: ' . $vnp_Url);
                        die();
                    } else {
                        echo json_encode($returnData);
                    }
                    
        }elseif ($cart_payment=='chuyen khoan') {
            $insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status,cart_date,cart_payment,cart_shipping)VALUES('".$id_khachhang."','".$code_order."',1,'".$now."','".$cart_payment."','".$id_shipping."')";
            $cart_query = mysqli_query($conn,$insert_cart);
        
            if ($cart_query) {
                //them gio hang chi tiet
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $id_sanpham = $value['id'];
                            $soluong = $value['soluong'];
                            $insert_order_detail = "INSERT INTO tbl_cart_detail(id_sanpham,code_cart,soluongmua)VALUES('".$id_sanpham."','".$code_order."','".$soluong."')";
                            mysqli_query($conn,$insert_order_detail);
                        }
                    }
            echo '<script>location.href="../../index.php?quanly=camon"</script>';
        }elseif ($cart_payment=='paypal') {
                echo 'thanh toan bang paypal';
        }
if ($cart_query) {
        //gui mail
        $tieude = "Dat hang website raiki shop thanh cong";
        $noidung ="<p>Cam on quy khach da dat hang cua chung toi voi ma don hang: ".$code_order."</p>";
        $noidung .="<h4>Don dat hang bao gom:</h4>";
        foreach ($_SESSION['cart'] as $key => $val) {
            $noidung .= "<ul style='border:1px solid blue;margin:10px;'>
            <li>Ten san pham: ".$val['tensanpham']."</li>
            <li>Ma san pham:".$val['masp']."</li>
            <li>Gia san pham:".number_format($val['giasp'],0,',','.')."d</li>
            <li>So luong:".$val['soluong']."</li>
            </ul>";
        }
        $maildathang = $_SESSION['email'];
        $mail = new Mailer();
        $mail->dathangmail($tieude,$noidung,$maildathang);
    
    unset($_SESSION['cart']);
}
    // echo '<script>location.href="../../index.php?quanly=camon"</script>';
    // header('Location:../../index.php?quanly=camon');
?>
