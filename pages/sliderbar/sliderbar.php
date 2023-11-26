<?php
        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
        $query_danhmuc = mysqli_query($conn,$sql_danhmuc); 
        $sql_thuonghieu = "SELECT * FROM tbl_thuonghieu ORDER BY id_thuonghieu DESC";
        $query_thuonghieu = mysqli_query($conn,$sql_thuonghieu); 
 ?>
<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh muc</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
			
										<?php
						while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
										?>
						<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['ten_danhmuc']?></a></h4>
								</div>
							</div>
							<?php
						}
							?>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Thuong hieu</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
							<?php
						while($row_thuonghieu = mysqli_fetch_array($query_thuonghieu)){
							?>
									<li><a href="index.php?quanly=danhmucthuonghieu&idthuonghieu=<?php echo $row_thuonghieu['id_thuonghieu']?>"><?php echo $row_thuonghieu['ten_thuonghieu']?></a></li>
							<?php
							}
							?>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>