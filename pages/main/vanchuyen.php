<p>Van chuyen</p>
<?php
if (isset($_SESSION['id_khachhang'])) {
?>
<div class="arrow-steps clearfix">
<div class="step done"> <span> <a href="giohang.html" >Gio hang</a></span> </div>
    <div class="step current"> <span><a href="index.php?quanly=vanchuyen" >Van chuyen</a></span> </div>
    <div class="step"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toan</a><span> </div>
    <div class="step"> <span><a href="index.php?quanly=donhangdadat" >Lich su don hang</a><span> </div>
  </div>
</div>
<?php
}
?>
  <h4>Thong tin van chuyen</h4>
  <?php
  if (isset($_POST['themvanchuyen'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    $id_dangky = $_SESSION['id_khachhang'];
    $sql_them_vanchuyen = mysqli_query($conn,"INSERT INTO tbl_shipping(name,phone,address,note,id_dangky) VALUES('$name','$phone','$address','$note','$id_dangky')");
    if($sql_them_vanchuyen){
        echo '<script>alert("Them van chuyen thanh cong")</script>';
    }
}elseif(isset($_POST['capnhatvanchuyen'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        $id_dangky = $_SESSION['id_khachhang'];
        $sql_update_vanchuyen = mysqli_query($conn,"UPDATE tbl_shipping SET name='$name',phone='$phone',address='$address',note='$note',id_dangky='$id_dangky' WHERE id_dangky='$id_dangky'");
        if($sql_update_vanchuyen){
            echo '<script>alert("Cap nhat van chuyen thanh cong")</script>';
        }
    }
  ?>
  <div class="col-sm-4">
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
  <form action="" autocomplete="off" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Ho va ten nguoi nhan</label>
    <input type="text" name="name" class="form-control" value="<?php echo $name?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">So dien thoai nguoi nhan</label>
    <input type="text" name="phone" class="form-control"value="<?php echo $phone?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Dia chi nhan hang</label>
    <input type="text" name="address" class="form-control" value="<?php echo $address?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ghi chu</label>
    <input type="text" name="note" class="form-control" value="<?php echo $note?>">
  </div>
  <?php
  if ($name==''&& $phone=='') {
  ?>
  <button type="submit" name="themvanchuyen" class="btn btn-info">Them van chuyen</button>
  <?php
    }elseif($name!=''&& $phone!=''){
        ?>
  <button type="submit" name="capnhatvanchuyen" class="btn btn-success">Cap nhat van chuyen</button>
        <?php
    }
        ?>
</form>
</div>
<div class="table-responsive cart_info col-sm-9" style="margin-left: 22%;">
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
                            if (isset($_SESSION['coupon'])) {
                                if ($_SESSION['coupon'][0][1]==1) {
                                    $tongtien = $_SESSION['giamphantram'];
                                }
                                elseif($_SESSION['coupon'][0][1]==2){
                                    $tongtien = $_SESSION['giamtheotien'];
                                }
                           }else{
                               $tongtien = 0;
                               foreach ($_SESSION['cart'] as $cart_item) {
                                   $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
                                   $tongtien+=$thanhtien;
                                }
                        ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']?>" width="100" alt=""></a>
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
                <div class="col-sm-9">
					<div class="total_area">
						<ul>
                            <?php
                            if(isset($_SESSION['cart'])){
                            ?>
							<li>Tong tien <span><?php echo number_format($tongtien,0,',','.').' đ' ?></span></li>
                            <?php
                            }
                            ?>
							<!-- dang ky dat hang -->
								<?php
							if(isset($_SESSION['dangky'])&&isset($_SESSION['cart'])){
							?>
                            <a class="btn btn-default check_out" style="margin-left: 80%;" href="index.php?quanly=thongtinthanhtoan">Hinh thuc thanh toan</a>
							<?php
							}else if(!isset($_SESSION['dangky'])){
								?>
                            <a class="btn btn-default check_out"style="margin-left: 80%;" href="index.php?quanly=dangky">Dang ky dat hang</a>
							<?php
							}
							?>
							<!-- <li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li> -->
						</ul>
                      
					</div>
				</div>
			</div>
		</div>
