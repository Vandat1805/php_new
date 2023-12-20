<section>
		<div class="container">
			<div class="row">
                <?php
                include("sliderbar/sliderbar.php");
                ?>				
				<div class="col-sm-9 padding-right">
                <?php
                if(isset($_GET['quanly'])){
                    $tam = $_GET['quanly'];
                }else{
                    $tam = '';
                }
                if ($tam=='danhmucsanpham') {
                    include("main/danhmucsanpham.php");
                }elseif($tam=='giohang'){
                    include("main/giohang.php");
                }elseif($tam=='lienhe'){
                    include("main/lienhe.php");
                }elseif($tam=='sanpham'){
                    include("main/chitietsp.php");
                }elseif($tam=='khuyenmai'){
                    include("main/chitietkm.php");
                }elseif($tam=='dangky'){
                    include("main/dangky.php");
                }elseif($tam=='dangxuat'){
                    include("main/yeuthich.php");
                // }elseif($tam=='thanhtoan'){
                //     include("main/thanhtoan.php");
                }elseif($tam=='dangnhap'){
                    include("main/dangnhap.php");
                }elseif($tam=='timkiem'){
                    include("main/timkiem.php");
                }elseif($tam=='camon'){
                    include("main/camon.php");
                }elseif($tam=='thaydoimatkhau'){
                    include("main/thaydoimatkhau.php");
                }elseif($tam=='danhmucbaiviet'){
                    include("main/danhmucbaiviet.php");
                }elseif($tam=='baiviet'){
                    include("main/chitietbv.php");
                }elseif($tam=='vanchuyen'){
                    include("main/vanchuyen.php");
                }elseif($tam=='donhangdadat'){
                    include("main/donhangdadat.php");
                }elseif($tam=='lichsudonhang'){
                    include("main/lichsudonhang.php");
                }elseif($tam=='thongtinthanhtoan'){
                    include("main/thongtinthanhtoan.php");
                }elseif($tam=='xemdonhang'){
                    include("main/xemdonhang.php");
                }elseif($tam=='danhmucthuonghieu'){
                    include("main/danhmucthuonghieu.php");
                }elseif($tam=='yeuthich'){
                    include("main/yeuthich.php");
                }elseif($tam=='taikhoan'){
                    include("main/taikhoan.php");
                }else{
                    include("main/index.php");
                }
                ?>
				</div>
			</div>
		</div>
	</section>