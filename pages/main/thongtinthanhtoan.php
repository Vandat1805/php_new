<p>Thong tin thanh toan</p>
<?php
if (isset($_SESSION['id_khachhang'])) {
?>
<div class="arrow-steps clearfix">
<div class="step done"> <span> <a href="giohang.html" >Gio hang</a></span> </div>
    <div class="step done"> <span><a href="index.php?quanly=vanchuyen" >Van chuyen</a></span> </div>
    <div class="step current"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toan</a><span> </div>
    <div class="step"> <span><a href="index.php?quanly=donhangdadat" >Lich su don hang</a><span> </div>
  </div>
</div>
<?php
}
?>

<div class="content col-md-9">
<form action="pages/main/xulythanhtoan.php" method="POST">
<?php
    $id_dangky = $_SESSION['id_khachhang'];
    $sql_get_vanchuyen = mysqli_query($conn,"SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
    $count = mysqli_num_rows($sql_get_vanchuyen);
    if ($count>0) {
        $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
        $name = $row_get_vanchuyen['name'];
        $phone = $row_get_vanchuyen['phone'];
        $address = $row_get_vanchuyen['address'];
        $note = $row_get_vanchuyen['note'];
    }else{
        $name = '';
        $phone = '';
        $address = '';
        $note = '';
    }
    ?>
    <div class="col-md-8">
        <h4>Thong tin van chuyen va gio hang</h4>
        <ul>
            <li>Ho va ten nguoi van chuyen: <b><?php echo $name?></b></li>
            <li>So dien thoai: <b><?php echo $phone?></b></li>
            <li>Dia chi: <b><?php echo $address?></b></li>
            <li>Ghi chu: <b><?php echo $note?></b></li>
        </ul>
        <h5>Gio hang cua ban</h5>
        <div class="table-responsive cart_info col-md-12">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td style="text-align: center;" class="image">Hinh anh</td>
							<td style="text-align: center;" class="description">Ten san pham</td>
							<td class="price">Gia</td>
							<td class="quantity">Quantity</td>
							<td class="total">Tong Cong</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                        <?php
                        if (isset($_SESSION['cart'])) {
                            $tongtien = 0;
                            foreach ($_SESSION['cart'] as $cart_item) {
                                $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
                                $tongtien+=$thanhtien;
                        ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']?>" width="70" alt=""></a>
							</td>
							<td class="cart_description" style="text-align: center;">
								<h4><a href=""><?php echo $cart_item['tensanpham']?></a></h4>
								<p><?php echo $cart_item['masp']?></p>
							</td>
							<td class="cart_price">
								<p><?php echo number_format($cart_item['giasp'],0,',','.').' đ'?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $cart_item['soluong']?>" autocomplete="off" size="1" disabled>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo number_format($thanhtien,0,',','.').' đ' ?></p>
							</td>
						</tr>
                        <?php
                        }
                        ?>
                        <tr>
                            <td>
                                <!-- <a class="btn btn-default update" href="">Cap nhat</a> -->
                                <!-- <a class="btn btn-default update" href="pages/main/themgiohang.php?xoatatca=1">Xoa tat ca</a> -->
                            </td>
                        </tr>
                        <?php
                         }else{
                        ?>
                        <tr>
                            <td colspan="5"><center>
                                <p>Hien tai gio hang trong</p></td>
                            </center>
                        </tr>
                        <?php
                         }
                        ?>
					</tbody>
				</table>
               
			</div>
		</div>
        <div class="col-md-4">
            <h4>Phuong thuc thanh toan</h4>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="payment" id="exampleCheck1" value="tien mat" checked>
                <img src="" alt="">
                <label class="form-check-label" for="exampleCheck1">Tien mat</label>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="payment" id="exampleCheck2" value="chuyen khoan">
                <label class="form-check-label" for="exampleCheck2">Chuyen khoan</label>
            </div>
            <!-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="payment" id="exampleCheck3" value="paypal">
                <label class="form-check-label" for="exampleCheck3">Paypal</label>
            </div> -->
            <!-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="payment" id="exampleCheck4" value="momo">
                <label class="form-check-label" for="exampleCheck4">Momo</label>
            </div> -->
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="payment" id="exampleCheck5" value="vnpay">
                <label class="form-check-label" for="exampleCheck5">Vnpay</label>
            </div>
					</div>
            <input type="submit" value="Thanh toan ngay" name="redirect" class="btn btn-danger" id="redirect">
        </form>
        <br>
        <?php
        if (isset($_SESSION['cart'])) {
            if (isset($_SESSION['coupon'])) {

                if ($_SESSION['coupon'][0][1]==1) {
                 $tongtien = $_SESSION['giamphantram'];
             }
             elseif($_SESSION['coupon'][0][1]==2){
                    $tongtien = $_SESSION['giamtheotien'];
             }
                }else{
        $tongtien = 0;
        foreach ($_SESSION['cart'] as $key => $value) {
            $thanhtien = $value['soluong']*$value['giasp'];
            $tongtien+=$thanhtien;
        }
    }
        $tongtien_vnd = $tongtien;
            }
        ?>
        <form action="pages/main/xulythanhtoanmomo_atm.php" method="POST" target="_blank" enctype="application/x-www-form-urlencoded">
            <input type="submit" value="Thanh toan qua MOMO ATM"  class="btn btn-danger" name="momo">
            <input type="hidden" value="<?php echo $tongtien_vnd?>" name="tongtien_vnd"> 
        </form>
        <br>
        <div class="col-md-4">
        <div class="total_area">
						<ul>
                            <?php
                            if(isset($_SESSION['cart'])){
                            ?>
							<li>Tong tien <span><?php echo number_format($tongtien,0,',','.').' đ' ?></span></li>
                            <?php
                            }
                            ?>
						</ul>
        </div>
        </div>
    </div>
</div>