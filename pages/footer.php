<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
	<script src="js/sweetalert.min.js"></script>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.add-product-love').click(function(){
				var id= $(this).data('id');
				var product_id = $('.product_id_' + id).val();
				$.ajax({
					url:'/php_basic/pages/main/yeuthich.php',
					method:'POST',
					data:{product_id:product_id},
					success:function(data){
						swal({
							title: "Them san pham yeu thich thanh cong",
							text: "Ban co the xem danh sach yeu thich hoac them san pham yeu thich",
							icon: "success",
							buttons:true,
							buttons: ["Tiếp tục them san pham yeu thich", "Danh sach yeu thich"],
								}).then(function(result) {
									if (result) {
										window.location.href = "/php_basic/index.php?quanly=taikhoan";
									} else {
										// Tiếp tục mua hàng
									}
									});
					}
				});
			});
		});
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
	$('.delete-product-love').click(function(){
				var id= $(this).data('id_delete');
				var product_delete = $('.product_delete_' + id).val();
				swal({
					title: "Bạn có chắc chắn muốn xóa san pham yeu thich này?",
					text: "San pham yeu thich sẽ bị xóa!",
					icon: "warning",
					buttons: true,
					dangerMode: true,
					showCancelButton: true, // Add this line to show cancel button
					cancelButtonText: "Hủy", // Add this line to set cancel button text
					})
					.then((willDelete) => {
					if (willDelete) {
						$.ajax({
					url:'/php_basic/pages/main/yeuthich.php',
					method:'POST',
					data:{product_delete:product_delete},
					success:function(data){
						swal({
							title: 'Da xoa',
							text: 'San pham yeu thich da duoc xoa',
							icon: 'success',
							timer: 3000,
							timerProgressBar: true,
							showConfirmButton: false,
						}).then(() => {
						window.location.href = '/php_basic/index.php?quanly=taikhoan';
						});
					}
					});
						// Code to delete the record goes here
					} else {
						swal("San pham yeu thich khong bi xoa!");
					}
					});
			});
	$('.add-to-cart').click(function(){
		var id= $(this).data('id_cart');
		var product_cart = $('.product_cart_' + id).val();
		alert(product_cart);
				$.ajax({
					url:'/php_basic/pages/main/themgiohang.php',
					method:'POST',
					data:{product_cart:product_cart,id:id},
					success:function(data){
						swal({
							title: "Them san pham vao gio hang thanh cong",
							text: "Ban co the xem gio hang hoac them san pham khac vao gio",
							icon: "success",
							buttons:true,
							buttons: ["Tiếp tục them san pham vao gio hang", "Gio hang cua ban"],
								}).then(function(result) {
									if (result) {
										window.location.href = "/php_basic/index.php?quanly=giohang";
									} else {
										window.location.href = "/php_basic/index.php";
									}
									});
					}
				});
			});
		});
	</script>