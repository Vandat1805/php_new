


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
                            $tongtien = 0;
                            foreach ($_SESSION['cart'] as $cart_item) {
                                $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
                                $tongtien+=$thanhtien;
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
	</section> <!--/#cart_items-->
    <section id="do_action">
		<div class="container">

			<div class="row">
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
                            <a class="btn btn-default check_out" style="margin-left: 80%;" href="index.php?quanly=vanchuyen">Hinh thuc van chuyen</a>
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
	</section><!--/#do_action-->