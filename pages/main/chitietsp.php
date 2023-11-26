<?php
            $sql_chitiet="SELECT * FROM tbl_sanpham,tbl_danhmuc,tbl_thuonghieu where tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[idsanpham]' AND tbl_sanpham.id_thuonghieu=tbl_thuonghieu.id_thuonghieu LIMIT 1";
            $query_chitiet=mysqli_query($conn,$sql_chitiet);
?>
<div class="col-sm-9 padding-right">
    <?php
     while($row_chitiet=mysqli_fetch_array($query_chitiet)){
    ?>
            <div class="product-details">
              <!--product-details-->
              <div class="col-sm-5">
                <div class="view-product">
                  <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>" alt="" />
                  <h3>ZOOM</h3>
                </div>
                <div
                  id="similar-product"
                  class="carousel slide"
                  data-ride="carousel"
                >
                  <a
                    class="left item-control"
                    href="#similar-product"
                    data-slide="prev"
                  >
                    <i class="fa fa-angle-left"></i>
                  </a>
                  <a
                    class="right item-control"
                    href="#similar-product"
                    data-slide="next"
                  >
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="product-information">
                  <!--/product-information-->
                  <form method="POST">
                  <h2><?php echo $row_chitiet['tensanpham']?></h2>
                  <p>Ma san pham: <?php echo $row_chitiet['masp']?></p>
                  <span>
                     <span><?php echo number_format($row_chitiet['giasp'],0,',','.').' vnd'?></span>
                    <br><br><br>
                  <input type="hidden" value="<?php echo $row_chitiet['id_sanpham']?>" class="product_cart_<?php echo $row_chitiet['id_sanpham']?>">
                    <button style="background: #FE980F;border: 0 none;border-radius: 0;color: #FFFFFF;font-family: 'Roboto', sans-serif;font-size: 15px;margin-bottom: 10px;margin-left: 20px;padding: 6px 12px;" type="button" name="themgiohang" class="add-to-cart" data-id_cart="<?php echo $row_chitiet['id_sanpham']?>">
                      <i class="fa fa-shopping-cart" ></i>
                      Add to cart
                    </button>
                  </span>
                  <!-- <p><b>Availability:</b> In Stock</p>
                  <p><b>Condition:</b> New</p> -->
                  <p><b>Danh muc:</b> <?php echo $row_chitiet['ten_danhmuc']?></p>
                  <p><b>Thuong hieu:</b> <?php echo $row_chitiet['ten_thuonghieu']?></p>
                  </form>
                </div>
                <!--/product-information-->
              </div>
            </div>
<?php
     }
?>
            <!--/product-details-->
<?php
$sql_mota="SELECT * FROM tbl_sanpham,tbl_danhmuc where tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[idsanpham]'  LIMIT 1";
$query_mota=mysqli_query($conn,$sql_mota);
?>
            <div class="category-tab shop-details-tab">
              <!--category-tab-->
              <div class="col-sm-12">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#details" data-toggle="tab">NOI DUNG</a></li>
                  <li>
                    <a href="#companyprofile" data-toggle="tab"
                      >Tom tat</a
                    >
                  </li>
                  <!-- <li><a href="#tag" data-toggle="tab"></a></li> -->
                  <li class="">
                    <a href="#reviews" data-toggle="tab">Danh gia</a>
                  </li>
                </ul>
              </div>
                    <?php
     while($row_mota=mysqli_fetch_array($query_mota)){

                    ?>
              <div class="tab-content">
              <div class="tab-pane fade in active" id="details">
                  <div class="col-sm-12">
                    <p>
                      <?php echo $row_mota['noidung'] ?>
                    </p>

                  </div>
              </div>
                <div class="tab-pane fade" id="companyprofile">
                  <div class="col-sm-12">
                   <p>
                   <?php echo $row_mota['tomtat'] ?>
                   </p>
                  </div>
                </div>
                <div class="tab-pane fade in" id="reviews">
                  <div class="col-sm-12">
                    <?php 

                    $sql_binhluan = "SELECT DISTINCT id_coment,tenkhachhang,date_coment,noidung_coment FROM tbl_coment,tbl_sanpham,tbl_dangky WHERE tbl_coment.id_dangky=tbl_dangky.id_dangky AND tbl_coment.id_chitietsanpham = '$_GET[idsanpham]'";
                    $query_binhluan = mysqli_query($conn,$sql_binhluan);
                    ?>
                    <?php
                       if (isset($_SESSION['id_khachhang'])) {
                    while($row_binhluan = mysqli_fetch_array($query_binhluan)){
                      ?>
                    <ul>
                      <li>
                        <a href=""><i class="fa fa-user"></i><?php echo $row_binhluan['tenkhachhang']?></a>
                      </li>
                      <li>
                        <a href=""><i class="fa fa-clock-o"></i><?php echo date('H:i:s', strtotime($row_binhluan['date_coment']));?></a>
                      </li>
                      <li>
                        <a href=""
                          ><i class="fa fa-calendar-o"></i><i class="fa fa-clock-o"></i><?php echo  date('Y-m-d', strtotime($row_binhluan['date_coment']))?></a>
                      </li>
                    </ul>
                    <p>
                      <?php echo $row_binhluan['noidung_coment']?>
                    </p>
                    <?php
                    }
                    ?>
                    <p><b>Noi dung binh luan</b></p>
                 
                    <form action="pages/main/yeuthich.php" method="POST">
                      <textarea name="noidungbinhluan"></textarea>
                      <input type="hidden" name="id_sanpham" value="<?php echo $row_mota['id_sanpham']?>">
                      <input type="hidden" name="id_dangky" value="<?php echo $_SESSION['id_khachhang']?>">
                      <img src="images/product-details/rating.png" alt="" />
                      <button type="submit" name="binhluan" class="btn btn-default pull-right">
                        Gui binh luan
                      </button>
                    </form>
                    <?php
                        }else{
                          ?>
                          <p>Ban can dang nhap de xem va binh luan</p>
                        <?php
                        }
                        ?>
                  </div>
                </div>
              </div>
                <?php
     }
                    ?>
            <!--/category-tab-->

            <!-- <div class="recommended_items">
              <h2 class="title text-center">recommended items</h2>

              <div
                id="recommended-item-carousel"
                class="carousel slide"
                data-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend1.jpg" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <button
                              type="button"
                              class="btn btn-default add-to-cart"
                            >
                              <i class="fa fa-shopping-cart"></i>Add to cart
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend2.jpg" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <button
                              type="button"
                              class="btn btn-default add-to-cart"
                            >
                              <i class="fa fa-shopping-cart"></i>Add to cart
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend3.jpg" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <button
                              type="button"
                              class="btn btn-default add-to-cart"
                            >
                              <i class="fa fa-shopping-cart"></i>Add to cart
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend1.jpg" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <button
                              type="button"
                              class="btn btn-default add-to-cart"
                            >
                              <i class="fa fa-shopping-cart"></i>Add to cart
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend2.jpg" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <button
                              type="button"
                              class="btn btn-default add-to-cart"
                            >
                              <i class="fa fa-shopping-cart"></i>Add to cart
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend3.jpg" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <button
                              type="button"
                              class="btn btn-default add-to-cart"
                            >
                              <i class="fa fa-shopping-cart"></i>Add to cart
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a
                  class="left recommended-item-control"
                  href="#recommended-item-carousel"
                  data-slide="prev"
                >
                  <i class="fa fa-angle-left"></i>
                </a>
                <a
                  class="right recommended-item-control"
                  href="#recommended-item-carousel"
                  data-slide="next"
                >
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </div> -->
            <!--/recommended_items-->
          </div>