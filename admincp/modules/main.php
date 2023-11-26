<section id="main-content">
	<section class="wrapper">
    <?php
                if(isset($_GET['action']) && $_GET['query']){
                    $tam = $_GET['action'];
                    $query = $_GET['query'];
                }else{
                    $tam = '';
                    $query = '';
                }
                if ($tam=='quanlydanhmucsanpham' && $query=='them') {
                    include("modules/quanlydanhmucsp/them.php");
                    include("modules/quanlydanhmucsp/lietke.php");
                }elseif($tam=='quanlydanhmucsanpham' && $query=='sua'){
                    include("modules/quanlydanhmucsp/sua.php");
                }elseif($tam=='quanlysanpham' && $query=='them'){
                    include("modules/quanlysp/them.php");
                    include("modules/quanlysp/lietke.php");
                }elseif($tam=='quanlysanpham' && $query=='sua'){
                    include("modules/quanlysp/sua.php");
                }elseif($tam=='quanlydonhang' && $query=='lietke'){
                    include("modules/quanlydonhang/lietke.php");
                }elseif($tam=='donhang' && $query=='xemdonhang'){
                    include("modules/quanlydonhang/xemdonhang.php");
                }elseif($tam=='quanlydanhmucbaiviet' && $query=='them'){
                    include("modules/quanlydanhmucbaiviet/them.php");
                    include("modules/quanlydanhmucbaiviet/lietke.php");
                }elseif($tam=='quanlydanhmucbaiviet' && $query=='sua'){
                    include("modules/quanlydanhmucbaiviet/sua.php");
                }elseif($tam=='quanlybaiviet' && $query=='them'){
                    include("modules/quanlybaiviet/them.php");
                    include("modules/quanlybaiviet/lietke.php");
                }elseif($tam=='quanlybaiviet' && $query=='sua'){
                    include("modules/quanlybaiviet/sua.php");
                }elseif($tam=='quanlyweb' && $query=='capnhat'){
                    include("modules/thongtinweb/quanly.php");
                }elseif($tam=='thongke' && $query=='xem'){
                    include("modules/dashboard.php");
                }elseif($tam=='quanlydanhmucthuonghieu' && $query=='them'){
                    include("modules/quanlydanhmucthuonghieu/them.php");
                    include("modules/quanlydanhmucthuonghieu/lietke.php");
                }elseif($tam=='quanlydanhmucthuonghieu' && $query=='sua'){
                    include("modules/quanlydanhmucthuonghieu/sua.php");
                }elseif($tam=='quanlymagiamgia' && $query=='them'){
                    include("modules/quanlymagiamgia/them.php");
                    include("modules/quanlymagiamgia/lietke.php");
                }elseif($tam=='quanlymagiamgia' && $query=='sua'){
                    include("modules/quanlymagiamgia/sua.php");
                }elseif($tam=='quanlysukien' && $query=='them'){
                    include("modules/quanlysukien/them.php");
                    include("modules/quanlysukien/lietke.php");
                }elseif($tam=='quanlysukien' && $query=='sua'){
                    include("modules/quanlysukien/sua.php");
                }elseif($tam=='quanlykhuyenmai' && $query=='them'){
                    include("modules/quanlykhuyenmai/them.php");
                    include("modules/quanlykhuyenmai/lietke.php");
                }else{
                    include("modules/welcome.php");
                }
                ?>
</section>