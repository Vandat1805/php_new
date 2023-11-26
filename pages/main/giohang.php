


<?php
if (isset($_SESSION['cart'])) {
}
?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
				<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <?php
if (isset($_SESSION['id_khachhang'])) {
?>
  <div class="arrow-steps clearfix">
    <div class="step current"> <span> <a href="giohang.html" >Gio hang</a></span> </div>
    <div class="step"> <span><a href="index.php?quanly=vanchuyen" >Van chuyen</a></span> </div>
    <div class="step"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toan</a><span> </div>
    <div class="step"> <span><a href="index.php?quanly=donhangdadat" >Lich su don hang</a><span> </div>
  </div>
  <?php
}

  ?>
  <!-- end Responsive Arrow Progress Bar -->
</div>
				<h4>Gio hang <?php
				if(isset($_SESSION['id_khachhang'])){
				if ($_SESSION['id_khachhang']) {
					echo 'xin chao: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
				}}
				?></h4>
			</div>
			<div class="table-responsive cart_info col-sm-9">
			<?php
			if (isset($_POST['coupon'])) {
					$coupon = $_POST['coupon'];
					$sql_coupon = "SELECT * FROM tbl_coupon WHERE tbl_coupon.coupon_code = '$coupon'";
					$check_coupon = mysqli_query($conn, $sql_coupon);
   					$count = mysqli_num_rows($check_coupon);
					while ($coupon = mysqli_fetch_array($check_coupon) ) {
						$cou[] = array(
						$coupon['coupon_code'],
						$coupon['coupon_condition'],
						$coupon['coupon_number']
						);
						$_SESSION['coupon'] = $cou;
					};
					//    if ($count>0) {
					// 	echo '<p style="color:green;font-weight: bold;">Ap dung ma giam gia thanh cong</p>';
					// 	// $cou[] = array (
					// 	// 	'coupon_code' => $coupon-

					// 	// );
					// }else{
					// 	echo '<p style="color:red;font-weight: bold;">Ma giam gia sai hoac khong ton tai</p>';
					// }
					
					// echo '<pre>';
					// print_r($_SESSION['coupon']);
					// echo '</pre>';
			}

				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hinh anh</td>
							<td class="description">Ten san pham</td>
							<td class="price">Gia</td>
							<td class="quantity">Quantity</td>
							<td class="total">Tong Cong</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                        <?php
                        if (isset($_SESSION['cart'])) {
                            $total = 0;
                            foreach ($_SESSION['cart'] as $cart_item) {
                                $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
                                $total+=$thanhtien;
                        ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']?>" width="100" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $cart_item['tensanpham']?></a></h4>
								<p><?php echo $cart_item['masp']?></p>
							</td>
							<td class="cart_price">
								<p><?php echo number_format($cart_item['giasp'],0,',','.').' đ'?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
                                    <a class="cart_quantity_down" href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id']?>"> - </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $cart_item['soluong']?>" autocomplete="off" size="1">
									<a class="cart_quantity_up" href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id']?>"> + </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo number_format($thanhtien,0,',','.').' đ' ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id']?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
                        <?php
                        }
                        ?>
                        <tr>
                            <td>
                                <!-- <a class="btn btn-default update" href="">Cap nhat</a> -->
                                <a class="btn btn-default update" href="pages/main/themgiohang.php?xoatatca=1">Xoa tat ca</a>
                            </td>
							<td></td>
							<td>
							<li  style="list-style: none;">Tong tien: <?php
                            if(isset($_SESSION['cart'])){
                            ?>
							<span><?php echo number_format($total,0,',','.').' đ' ?></span>
                            <?php
                            }
                            ?></span></li>
							<li style="list-style: none;">
							<?php
							if (isset($_POST['coupon'])) {
							 if ($count>0) {
							if (isset($_SESSION['coupon'])) {
									if ($_SESSION['coupon'][0][1]==1) {
										echo 'Ma giam: ';
										echo $_SESSION['coupon'][0][2];
										echo '%';
										$total_coupon = ($total*$_SESSION['coupon'][0][2])/100;
										echo '<p><li>Tong giam: '.number_format($total_coupon,0,',','.').' đ</li></p>';
										echo '<li>Tong da giam: ';
										echo number_format($total-$total_coupon,0,',','.').' đ';
										echo '</li>';
										$_SESSION['giamphantram'] = $total-$total_coupon;
									}elseif ($_SESSION['coupon'][0][1]==2) {
										echo 'Ma giam: ';
										echo number_format($_SESSION['coupon'][0][2],0,',','.');
										echo ' k';
										$total_coupon = $total-$_SESSION['coupon'][0][2];
										echo '<li>Tong da giam: ';
										echo number_format($total-$total_coupon,0,',','.').' đ';
										echo '</li>';
										$_SESSION['giamtheotien'] = $total-$total_coupon;
									}
								}	
								?>
							</li>
							<?php
								echo '<p style="color:green;font-weight: bold;">Ap dung ma giam gia thanh cong</p>';
							}else{
								unset($_SESSION['coupon']);
								echo '<p style="color:red;font-weight: bold;">Ma giam gia sai hoac khong ton tai</p>';
							}
						}
								?>
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
				
				<?php
				if (isset($_SESSION['cart'])) {
				?>
                <form method="POST">
					<!-- @if(session::get('cart'))
					@csrf -->
							<input type="text" class="form-control" name="coupon" placeholder="Nhap ma giam gia"> <br>
							<input type="submit" class="btn btn-default check_coupon" value="Tinh ma giam gia" name="check_coupon">
					<!-- @endif -->
						</form>
						<?php
							}
						?>
							<!-- dang ky dat hang -->
							<?php
							if(isset($_SESSION['dangky'])&&isset($_SESSION['cart'])){
							?>
                            <a class="btn btn-default check_out" style="margin-left: 80%;" href="index.php?quanly=vanchuyen">Hinh thuc van chuyen</a>
							<?php
							}else if(!isset($_SESSION['dangky'])){
								?>
                            <a class="btn btn-default check_out"style="margin-left: 80%;" href="index.php?quanly=dangky">Dang ky dat hang</a>
							<?php
							}
							?>
			</div>
		</div>
	</section> <!--/#cart_items-->