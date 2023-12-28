<?php
        $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]'";
        $query_pro = mysqli_query($conn,$sql_pro); 
		$sql_cate="SELECT * FROM tbl_danhmuc where tbl_danhmuc.id_danhmuc='$_GET[id]'";
		$query_cate=mysqli_query($conn, $sql_cate);
		$row_title=mysqli_fetch_array($query_cate);
 ?>
						<h2 class="title text-center">Danh muc san pham: <?php echo $row_title['ten_danhmuc']?></h2>
		<div class="product-grid">
						<?php
						while($row_pro = mysqli_fetch_array($query_pro)){
						?>
						<div class="product-item">
							<a href="index.php?quanly=sanpham&idsanpham=<?php echo $row_pro['id_sanpham']?>">
							<img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']?>" alt="" />
							<div class="product-content">
											<h2 style="color: orange;"><?php echo number_format($row_pro['giasp'],0,',','.').' vnd'?></h2>
											<p><?php echo $row_pro['tensanpham']?></p>
									</a>
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
										
										<!-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> -->
									</ul>
								</div>
								</div>
						</div>
						<?php
						} 
						?>
					</div><!--features_items-->
					