<?php
if (isset($_SESSION['id_khachhang'])) {
  $id_dangky = $_SESSION['id_khachhang'];
  $sql_yeuthich = "SELECT * FROM tbl_sanpham,tbl_dangky,tbl_productlove WHERE tbl_sanpham.id_sanpham=tbl_productlove.id_sanpham AND tbl_dangky.id_dangky=tbl_productlove.id_dangky AND tbl_dangky.id_dangky='$id_dangky'";
  $query_yeuthich = mysqli_query($conn,$sql_yeuthich);
  $sql_taikhoan = "SELECT * FROM tbl_dangky WHERE tbl_dangky.id_dangky='$id_dangky'";
  $query_taikhoan = mysqli_query($conn,$sql_taikhoan);
  $row = mysqli_query($conn,$sql_yeuthich);
  $count = mysqli_num_rows($row);
}
?>
<style>
    /* .wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 450px;
  display: flex;
  box-shadow: 0 1px 20px 0 rgba(69,90,100,.08);
} */

.wrapper .left{
  width: 35%;
  background: linear-gradient(to right,#01a9ac,#01dbdf);
  padding: 30px 25px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  text-align: center;
  color: #fff;
}

.wrapper .left img{
  border-radius: 5px;
  margin-bottom: 10px;
}

.wrapper .left h4{
  margin-bottom: 10px;
}

.wrapper .left p{
  font-size: 12px;
}

.wrapper .right{
  width: 100%;
  background: #fff;
  padding: 30px 25px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

.wrapper .right .info,
.wrapper .right .projects{
  margin-bottom: 25px;
}

.wrapper .right .info h3,
.wrapper .right .projects h3{
    margin-bottom: 5px;
    padding-bottom: 5px;
    border-bottom: 1px solid #e0e0e0;
    color: #353c4e;
  text-transform: uppercase;
  letter-spacing: 5px;
}

.wrapper .right .info_data,
.wrapper .right .projects_data{
  display: flex;
  justify-content: space-between;
}

.wrapper .right .info_data .data,
.wrapper .right .projects_data .data{
  width: 45%;
}

.wrapper .right .info_data .data h4,
.wrapper .right .projects_data .data h4{
    color: #353c4e;
    margin-bottom: 5px;
}

.wrapper .right .info_data .data p,
.wrapper .right .projects_data .data p{
  font-size: 13px;
  margin-bottom: 10px;
  color: #919aa3;
}

.wrapper .social_media ul{
  display: flex;
}

.wrapper .social_media ul li{
  width: 45px;
  height: 45px;
  background: linear-gradient(to right,#01a9ac,#01dbdf);
  margin-right: 10px;
  border-radius: 5px;
  text-align: center;
  line-height: 45px;
}

.wrapper .social_media ul li a{
  color :#fff;
  display: block;
  font-size: 18px;
}
</style>
<div class="col-sm-12">
    <?php
    if (isset($_SESSION['id_khachhang'])) {
    ?>
    <?php
    while($row_khachhang=mysqli_fetch_array($query_taikhoan)){
    ?>
<div class="wrapper">
    <!-- <div class="left">
        <img src="https://i.imgur.com/cMy8V5j.png" alt="user" width="100">
        <h4>Alex William</h4>
         <p>UI Developer</p>
    </div> -->
    <div class="right">
        <div class="info">
            <h3>Thong tin tai khoan khach hang</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Ten khach hang</h4>
                    <p><?php echo $row_khachhang['tenkhachhang']?></p>
                 </div>
            </div>
        </div>
      
      <div class="projects">
            <h3>Lien he</h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>Dia chi</h4>
                    <p><?php echo $row_khachhang['diachi']?></p>
                 </div>
                 <div class="data">
                   <h4>Email</h4>
                    <p><?php echo $row_khachhang['email']?></p>
              </div>
                 <div class="data">
                   <h4>Dien thoai</h4>
                    <p><?php echo $row_khachhang['dienthoai']?></p>
              </div>
            </div>
        </div>
      
        <!-- <div class="social_media">
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
      </div> -->
    </div>
</div>
    <?php
    }
    ?>
    <div class="features_items"><!--features_items-->
    <?php
    if ($count>0) {
    ?>
						<h2 class="title text-center">Danh sach san pham yeu thich cua ban</h2>
                                    <?php
                         while($row_yeuthich=mysqli_fetch_array($query_yeuthich)){
                                    ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
                  <div class="productinfo text-center">
                    <a href="index.php?quanly=sanpham&idsanpham=<?php echo $row_yeuthich['id_sanpham']?>">
										<img src="admincp/modules/quanlysp/uploads/<?php echo $row_yeuthich['hinhanh']?>" alt="" />
										<h2><?php echo number_format($row_yeuthich['giasp'],0,',','.').' vnd'?></h2>
										<p><?php echo $row_yeuthich['tensanpham']?></p>
                  </a>
                    <form>
									<li align=center style="list-style: none;">
                  <i class="fas fa-trash"></i>
                  <input type="hidden" name="id_sanpham" value="<?php echo $row_yeuthich['id_productlove']?>" class="product_delete_<?php echo $row_yeuthich['id_productlove']?>">
											<!-- <input style="border: none;background-color: transparent;" type="submit" value="Xoa san pham yeu thich" name="xoayeuthich">	 -->
                      <button style="background-color: transparent;border:none;" type="button" class="delete-product-love" data-id_delete="<?php echo $row_yeuthich['id_productlove']?>">Xoa san pham yeu thich</button>
										</li>
										</form>
									</div>
								</div>
							</div>
						</div>
                                <?php
                                    }
                                ?>
						<?php
                        }else{
                            echo'<h3 style=margin-left:25%;color:#fe980f;">Ban chua co san pham yeu thich</h3>';
                        }
                        ?>
					</div><!--features_items-->
  
     <?php
        }else{
            echo '<h2>Ban can <a href="index.php?quanly=dangnhap">dang nhap</a> hoac <a href="index.php?quanly=dangky">dang ky</a> de xem thong tin tai khoan<h2>';
        }
    ?>
</div>
