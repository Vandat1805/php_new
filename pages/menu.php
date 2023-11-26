<?php
        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
        $query_danhmuc = mysqli_query($conn,$sql_danhmuc);
		$sql_sale = "SELECT * FROM tbl_even";
		$query_sale = mysqli_query($conn,$sql_sale);
 ?>
 <?php
 while($row_sale = mysqli_fetch_array($query_sale)){
	 if($row_sale['even_status'] == 1){
	 ?>
   <marquee style=" font-size: 50px;
	  background: linear-gradient(135deg, rgb(255, 168, 168) 10%, rgb(252, 255, 0) 100%);
	  text-transform: uppercase;
	  "
      direction="left"
      behavior="scroll"
      direction="left"
      scrollamount="20"
      bgcolor="aqua"
      ><?php echo $row_sale['title_even']?></marquee
	  >
	  <?php
	}
}
	  ?>
<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Trang chu</a></li>
								<li class="dropdown"><a href="">Danh muc san pham<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
								<?php
						while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
										?>
                                        <li style="text-transform: uppercase;"><a href="danh-muc/<?php echo $row_pro['id_danhmuc']?>.html"><?php echo $row_danhmuc['ten_danhmuc']?></a></li>
									<?php
						}
							?>
                                    </ul>
                                </li> 
								<?php
								$sql_danhmuc_bv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
								$query_danhmuc_bv = mysqli_query($conn,$sql_danhmuc_bv)
								?>
								<li class="dropdown"><a href="index.php?quanly=tintuc">Danh muc bai viet<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
										<?php
										while($row = mysqli_fetch_array($query_danhmuc_bv)){
										?>
                                        <li style="text-transform: uppercase;"><a href="index.php?quanly=danhmucbaiviet&id=<?php echo $row['id_baiviet']?>"><?php echo $row['tendanhmuc_baiviet']?></a></li>
										<?php
										}
										?>
										<!-- <li><a href="blog-single.html">Blog Single</a></li> -->
                                    </ul>
                                </li> 
								<li><a href="index.php?quanly=lienhe">Lien he</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<form action="index.php?quanly=timkiem" method="POST">
							<div class="search_box pull-right">
								<input style="width: 200px;" name="tukhoa" type="text" placeholder="Tim kiem san pham"/>
								<input type="submit" style="color:white;background-color: #FE980F;" value="Tim kiem" name="timkiem"/>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Mo hinh do choi one piece re va chat luong</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/banner1.png" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/banner2.png" class="girl img-responsive" alt=""/>
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/banner3.gif" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->