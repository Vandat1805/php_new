<?php
        $sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_baiviet='$_GET[id]' ORDER BY id";
        $query_bv = mysqli_query($conn,$sql_bv); 
		$sql_cate="SELECT * FROM tbl_danhmucbaiviet where tbl_danhmucbaiviet.id_baiviet='$_GET[id]'";
		$query_cate=mysqli_query($conn, $sql_cate);
		$row_title=mysqli_fetch_array($query_cate);
 ?>
	<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">Danh muc bai viet: <?php echo $row_title['tendanhmuc_baiviet']?></h2>
						<?php
						while($row_bv = mysqli_fetch_array($query_bv)){
                        ?>
                        <div class="single-blog-post">
							<h3><?php echo $row_bv['tenbaiviet']?></h3>
							<!-- <div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> Mac Doe</li>
									<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
									<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
								</ul>
								<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
							</div> -->
							<a href="#">
								<img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh']?>" alt="">
							</a>
							<p><?php echo $row_bv['tomtat']?></p>
							<a  class="btn btn-primary" href="index.php?quanly=baiviet&id=<?php echo $row_bv['id']?>">Đọc thêm</a>
						</div>
                        <?php
                        }
                        ?>
						<!-- <div class="pagination-area">
							<ul class="pagination">
								<li><a href="" class="active">1</a></li>
								<li><a href="">2</a></li>
								<li><a href="">3</a></li>
							</ul>
						</div> -->
						<!-- ========== -->
					</div>
				</div>

					