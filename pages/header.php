<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
								<li><a href="http://localhost/php_basic/admincp/"><i class="fas fa-user-cog"></i> Đăng nhập cho quản trị viên</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<?php
		if (isset($_GET['dangxuat'])&&$_GET['dangxuat']==1) {
			unset($_SESSION['dangky']);
		}
		?>
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<!-- <div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div> -->
					</div>
					<div class="col-sm-9">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="index.php?quanly=taikhoan"><i class="fa fa-user"></i>Tai khoan</a></li>
								<!-- <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li> -->
								<?php
								if(isset($_SESSION['cart'])&&isset($_SESSION['idkhachhang'])){
								?>
								<li><a href="index.php?quanly=thongtinthanhtoan"><i class="fas fa-money-check"></i> Thanh toan</a></li>
								<?php
								}
								?>
								<li><a href="index.php?quanly=giohang"><i class="fas fa-shopping-cart"></i> Gio hang</a></li>
								<?php
								if (isset($_SESSION['id_khachhang'])) {
								?>
								<?php
								}else{
									?>
								<li><a href="index.php?quanly=dangnhap"><i class="fas fa-sign-in-alt"></i> Dang Nhap</a></li>
									<?php
								}
									?>
								<?php
								if (isset($_SESSION['id_khachhang'])) {
								?>
									<li><a href="pages/main/yeuthich.php?dangxuat"><i class="fas fa-sign-out-alt"></i> Dang Xuat</a></li>
									<li><a href="index.php?quanly=thaydoimatkhau"><i class="fas fa-exchange-alt"></i> Thay doi mat khau</a></li>
									<li><a href="index.php?quanly=lichsudonhang"><i class="fas fa-history"></i>Lich su don hang</a></li>
									<?php
								}else{
									?>
									<li><a href="index.php?quanly=dangky"><i class="fas fa-cash-register"></i> Dang Ky</a></li>
								<?php
								}
								?>
							
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	

	</header><!--/header-->