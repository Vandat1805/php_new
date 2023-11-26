<?php
    $sql_sua_magiamgia = "SELECT * FROM tbl_coupon WHERE coupon_id='$_GET[idmagiamgia]' LIMIT 1";
    $query_sua_magiamgia = mysqli_query($conn,$sql_sua_magiamgia);
?>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            SUA MA GIAM GIA
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="post" action="modules/quanlydanhmucbaiviet/xuly.php?idmagiamgia=<?php echo $_GET['idmagiamgia']?>">
                                    <?php
                                    while($dong = mysqli_fetch_array($query_sua_magiamgia)){
                                    ?>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">TEN MA GIAM GIA</label>
                                    <input name="coupon_name" value="<?php echo $dong['coupon_name']?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ten Danh Muc">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">MA GIAM GIA</label>
                                    <input name="coupon_code" value="<?php echo $dong['coupon_code']?>" type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">SO LUONG MA</label>
                                    <input name="coupon_time" value="<?php echo $dong['coupon_time']?>" type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">TINH NANG MA</label>
                                <select  name="coupon_condition" class="form-control input-sm m-bot15">
                                    <option value="0">----Chon------</option>
                                    <option value="1">Giam theo phan tram</option>
                                    <option value="2">Giam theo tien</option>
                                </select>
                            </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">NHAP SO % HOAC TIEN GIAM</label>
                                    <input name="coupon_number" type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                                <button type="submit" name="edit_coupon" class="btn btn-info">Sua Ma Giam Gia</button>
                           <?php
                                    }
                           ?>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div>