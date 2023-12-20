<?php
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = '';
	}
	if ($page == '' || $page == 1) {
		$begin = 0;
	}else{
		$begin = ($page*2)-2;
	}
     $sql_pro="SELECT * FROM tbl_sanpham,tbl_danhmuc,tbl_thuonghieu where tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_thuonghieu=tbl_thuonghieu.id_thuonghieu AND tbl_sanpham.id_sale = 0 order by tbl_sanpham.id_sanpham DESC limit $begin,2";
	 $query_pro=mysqli_query($conn,$sql_pro);
     $sql_sale="SELECT * FROM tbl_sanpham,tbl_danhmuc,tbl_thuonghieu,tbl_even,tbl_khuyenmai where tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_thuonghieu=tbl_thuonghieu.id_thuonghieu AND tbl_khuyenmai.id_sanpham = tbl_sanpham.id_sanpham AND tbl_khuyenmai.id_even = tbl_even.id_even order by tbl_sanpham.id_sanpham";
	 $query_sale=mysqli_query($conn,$sql_sale); 
	//  $sql_price_sale = "SELECT ROUND(tbl_sanpham.giasp * (tbl_even.even_number/100)) AS giasukien FROM tbl_sanpham,tbl_even WHERE tbl_sanpham.id_even = tbl_even.id_even;";
	//  $query_price_sale=mysqli_query($conn,$sql_price_sale); 
	 ?>
					<?php
					while($row_sale = mysqli_fetch_array($query_sale)){
						$gia_sale = $row_sale['giasp'] * ($row_sale['even_number']/100);
						if ($row_sale['even_status']==1) {
					?>
		<div class="features_items">
						<h2 class="title text-center">San pham khuyen mai</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<a href="index.php?quanly=khuyenmai&idkhuyenmai=<?php echo $row_sale['id_sanpham']?>">
											<img src="admincp/modules/quanlysp/uploads/<?php echo $row_sale['hinhanh']?>" alt="" />
											<!-- <h2 style="color: black;text-decoration:line-through;"><?php echo number_format($row_sale['giasp'],0,',','.').' vnd'?></h2> -->
											<h2 style="color: black;text-decoration:line-through;"><?php echo number_format($row_sale['giasp'],0,',','.').' vnd'?></h2>
											<h2><?php echo number_format($gia_sale,0,',','.').' vnd'?></h2>
											<p><?php echo $row_sale['tensanpham']?></p>
											<p>Danh muc: <?php echo $row_sale['ten_danhmuc']?></p>
											<p>Thuong hieu: <?php echo $row_sale['ten_thuonghieu']?></p>
										</a>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
								</div>
							</div>
						</div>
						</div>
						<?php
						}
					}
						?>
		<div class="features_items">
						<h2 class="title text-center">San pham moi nhat</h2>
					<?php
					while($row = mysqli_fetch_array($query_pro)){
					?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<a href="index.php?quanly=sanpham&idsanpham=<?php echo $row['id_sanpham']?>">
											<img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" alt="" />
											<h2><?php echo number_format($row['giasp'],0,',','.').' vnd'?></h2>
											<p><?php echo $row['tensanpham']?></p>
											<p>Danh muc: <?php echo $row['ten_danhmuc']?></p>
											<p>Thuong hieu: <?php echo $row['ten_thuonghieu']?></p>
										</a>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
									<?php
										if(isset($_SESSION['id_khachhang'])){
										?>
									<form method="POST">
									<li align=center><i class="fas fa-heart"></i>
											<input type="hidden" name="id_sanpham" value="<?php echo $row['id_sanpham']?>" class="product_id_<?php echo $row['id_sanpham']?>">
											<!-- <input style="border: none;background-color: transparent;" type="submit" value="Them san pham yeu thich" name="yeuthich"> -->
											<button style="background-color: transparent;border:none;" type="button" class="add-product-love" data-id="<?php echo $row['id_sanpham']?>">Them san pham yeu thich</button>
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
						</div>
						
						<?php
						$sql_trang = mysqli_query($conn,"SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_sale = 0");
						$row_count = mysqli_num_rows($sql_trang);
						$trang = ceil($row_count/2);
						?>
						<p>Trang hien tai: <?php echo $page?>/<?php echo $trang?></p>
						<ul>
							<?php
							for($i=1;$i<=$trang;$i++){
							
							?>
								<li class="trang"<?php if ($i==$page) {
									echo 'style="background:brown;"';
								}else{ echo '';}
									?>><a style="color:white" href="index.php?trang=<?php echo $i?>"><?php echo $i?></a></li>
								<?php
							}
								?>
							</ul>
							
							
					
					