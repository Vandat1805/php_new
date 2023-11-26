<?php
        $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_thuonghieu='$_GET[idthuonghieu]'";
        $query_pro = mysqli_query($conn,$sql_pro); 
		$sql_cate="SELECT * FROM tbl_thuonghieu where tbl_thuonghieu.id_thuonghieu='$_GET[idthuonghieu]'";
		$query_cate=mysqli_query($conn, $sql_cate);
		$row_title=mysqli_fetch_array($query_cate);
 ?>
<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Thuong hieu: <?php echo $row_title['ten_thuonghieu']?></h2>
						<?php
						while($row_pro = mysqli_fetch_array($query_pro)){
						?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
												<img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']?>" alt="" />
												<h2><?php echo number_format($row_pro['giasp'],0,',','.').' vnd'?></h2>
												<p><?php echo $row_pro['tensanpham']?></p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</a>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
									<?php
										if(isset($_SESSION['id_khachhang'])){
										?>
										<form method="POST">
											<li align=center><i class="fas fa-heart"></i>
											<input type="hidden" name="id_sanpham" value="<?php echo $row_pro['id_sanpham']?>" class="product_id_<?php echo $row_pro['id_sanpham']?>">
											<button style="background-color: transparent;border:none;" type="button" class="add-product-love" data-id="<?php echo $row_pro['id_sanpham']?>">Them san pham yeu thich</button>
										</li>
										</form>
											<?php
											}else {
												echo '<p style="color:orange;font-weight:bold;text-align:center;"><br>Ban can dang nhap hoac dang ky de them san pham yeu thich</p>';
											}
											?>
									</ul>
								</div>
							</div>
						</div>
						<?php
						} 
						?>
					</div><!--features_items-->
					
					