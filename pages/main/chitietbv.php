<?php
    $sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id='$_GET[id]'";
    $query_bv = mysqli_query($conn,$sql_bv);
    
    $query_bv_all = mysqli_query($conn,$sql_bv);
    $row_bv_title = mysqli_fetch_array($query_bv);
?>
<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">chi tiet bai viet</h2>
						<?php
                        while($row_bv=mysqli_fetch_array($query_bv_all)){
                        ?>
                        <div class="single-blog-post">
							<h3><?php echo $row_bv['tenbaiviet']?></h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> <?php echo $row_bv['tablienquan']?></li>
									<li><i class="fas fa-clock"></i> <?php echo date('H:i:s', strtotime($row_bv['date_baiviet']));?></li>
									<li><i class="fa fa-calendar"></i> <?php echo  date('d-m-Y', strtotime($row_bv['date_baiviet']))?></li>
								</ul>
								<!-- <span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</span> -->
							</div>
							<a href="">
								<img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh']?>" alt="">
							</a>
							<p>
								<?php echo $row_bv['noidung']?></p> <br>

							<!-- <p>
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p> <br>

							<p>
								Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p> <br>

							<p>
								Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
							</p> -->
							<!-- <div class="pager-area">
								<ul class="pager pull-right">
									<li><a href="#">Pre</a></li>
									<li><a href="#">Next</a></li>
								</ul>
							</div> -->
						</div>
<?php
}
?>
					</div><!--/blog-post-area-->
<?php
					$sql_binhluanbaiviet = "SELECT DISTINCT id_binhLuanbaiviet,tenkhachhang,date_coment,noidung_binhluan FROM tbl_binhluanbaiviet,tbl_baiviet,tbl_dangky WHERE tbl_binhluanbaiviet.id_dangky=tbl_dangky.id_dangky AND tbl_binhluanbaiviet.id_chitietbv = '$_GET[id]'";
                    $query_binhluanbaiviet = mysqli_query($conn,$sql_binhluanbaiviet);
					?>
					<div class="response-area">
					<h2>BINH LUAN</h2>
					<?php
						if (isset($_SESSION['id_khachhang'])) {
							while($row_binhluanbaiviet = mysqli_fetch_array($query_binhluanbaiviet)){
								?>
						<ul class="media-list">
							<li class="media">
								<a class="pull-left" href="#">
								</a>
								<div class="media-body">
									<ul class="sinlge-post-meta">
										<li><i class="fas fa-user fa-lg"></i><?php echo $row_binhluanbaiviet['tenkhachhang']?></li>
										<li><i class="fas fa-clock"></i> <?php echo date('H:i:s', strtotime($row_binhluanbaiviet['date_coment']));?></li>
										<li><i class="fa fa-calendar"></i><?php echo  date('d-m-Y', strtotime($row_binhluanbaiviet['date_coment']))?></li>
									</ul>
									<p><?php echo $row_binhluanbaiviet['noidung_binhluan']?></p>
									<!-- <a class="btn btn-primary" href=""><i class="fa fa-reply"></i>Replay</a> -->
								</div>
							</li>
							<!-- <li class="media second-media">
								<a class="pull-left" href="#">
									<img class="media-object" src="images/blog/man-three.jpg" alt="">
								</a>
								<div class="media-body">
									<ul class="sinlge-post-meta">
										<li><i class="fa fa-user"></i>Janis Gallagher</li>
										<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
										<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									<a class="btn btn-primary" href=""><i class="fa fa-reply"></i>Replay</a>
								</div>
							</li>
							<li class="media">
								<a class="pull-left" href="#">
									<img class="media-object" src="images/blog/man-four.jpg" alt="">
								</a>
								<div class="media-body">
									<ul class="sinlge-post-meta">
										<li><i class="fa fa-user"></i>Janis Gallagher</li>
										<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
										<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									<a class="btn btn-primary" href=""><i class="fa fa-reply"></i>Replay</a>
								</div>
							</li> -->
						</ul>					
									<?php
					}
									?>
					</div><!--/Response-area-->
					<?php
					$sql_mota="SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet where tbl_baiviet.id_baiviet=tbl_danhmucbaiviet.id_baiviet AND tbl_baiviet.id='$_GET[id]'  LIMIT 1";
					$query_mota=mysqli_query($conn,$sql_mota);
					?>
					<div class="replay-box">
						<div class="row">
							<div class="col-sm-12">
								<div class="text-area">
									<div class="blank-arrow">
										<label>Noi dung binh luan</label>
									</div>
									<span>*</span>
										<?php
										while($row_baiviet=mysqli_fetch_array($query_mota)){
										?>
									<form action="pages/main/yeuthich.php" method="POST">
									<textarea style="border: 1px solid orange;" name="noidungbinhluan"></textarea>
										<input type="hidden" name="id_chitietbv" value="<?php echo $row_baiviet['id']?>">
										<input type="hidden" name="id_dangky" value="<?php echo $_SESSION['id_khachhang']?>">
										<!-- <img src="images/product-details/rating.png" alt="" /> -->
										<button style="padding: 10px;" type="submit" name="binhluanbaiviet" class="btn btn-primary">
											Gui binh luan
										</button>
                    				</form>
										<?php
										}
										?>
								</div>
							</div>
										<?php
										}else{
											?>
											<p style="font-weight: bold;color: orange;text-align:center;">Ban can dang nhap de xem va binh luan</p>
										  <?php
										  }
										  ?>
						</div>
					</div><!--/Repaly Box-->
				</div>	