<?php
    $sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
    $query_sua_sp = mysqli_query($conn,$sql_sua_sp);
?>
<div class="row">
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            SUA SAN PHAM
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="post" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $_GET['idsanpham']?>" enctype="multipart/form-data">
                                    <?php
                                    while ($row = mysqli_fetch_array($query_sua_sp)) {
                                    ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">TEN SAN PHAM</label>
                                    <input name="tensanpham" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row['tensanpham']?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">MA SAN PHAM</label>
                                    <input name="masanpham" type="text" class="form-control" id="exampleInputEmail1"value="<?php echo $row['masp']?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">GIA SAN PHAM</label>
                                    <input name="giasanpham" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row['giasp']?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">SO LUONG</label>
                                    <input name="soluong" type="text" class="form-control" id="exampleInputEmail1"value="<?php echo $row['soluong']?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">HINH ANH</label>
                                    <input name="hinhanh" type="file" class="form-control" id="exampleInputEmail1">
                                    <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" alt="" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">NOI DUNG</label>
                                    <textarea style="resize: none;" rows="5" name="noidung" class="form-control" id="noidungsanpham"><?php echo $row['noidung']?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">TOM TAT</label>
                                    <textarea style="resize: none;" rows="5" name="tomtat" class="form-control" id="tomtatsanpham"><?php echo $row['tomtat']?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">TINH TRANG</label>
                                    <select  name="tinhtrang" class="form-control input-sm m-bot15">
                                        <?php
                                        if($row['tinhtrang']==1){
                                        ?>
                                        <option value="0">An</option>
                                        <option value="1" selected>Kich hoat</option>
                                        <?php
                                        }else{
                                        ?>
                                        <option value="0" selected>An</option>
                                        <option value="1">Kich hoat</option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DANH MUC SAN PHAM</label>
                                    <select  name="danhmuc" class="form-control input-sm m-bot15">
                                        <?php
                                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                                        $query_danhmuc = mysqli_query($conn,$sql_danhmuc); 
                                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                                            if ($row_danhmuc['id_danhmuc']==$row['id_danhmuc']) {
                                        ?>
                                        <option selected value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['ten_danhmuc']?></option>
                                        <?php
                                            }else{
                                        ?>
                                                    <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['ten_danhmuc']?></option>
                                                <?php
                                            }    
                                    }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DANH MUC THUONG HIEU</label>
                                    <select  name="thuonghieu" class="form-control input-sm m-bot15">
                                        <?php
                                        $sql_thuonghieu = "SELECT * FROM tbl_thuonghieu ORDER BY id_thuonghieu DESC";
                                        $query_thuonghieu = mysqli_query($conn,$sql_thuonghieu); 
                                        while($row_thuonghieu = mysqli_fetch_array($query_thuonghieu)){
                                            if ($row_thuonghieu['id_thuonghieu']==$row['id_thuonghieu']) {
                                        ?>
                                        <option selected value="<?php echo $row_thuonghieu['id_thuonghieu']?>"><?php echo $row_thuonghieu['ten_thuonghieu']?></option>
                                        <?php
                                            }else{
                                        ?>
                                                    <option value="<?php echo $row_thuonghieu['id_thuonghieu']?>"><?php echo $row_thuonghieu['ten_thuonghieu']?></option>
                                                <?php
                                            }    
                                    }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">CHON KHUYEN MAI</label>
                                    <select  name="khuyenmai" class="form-control input-sm m-bot15">
                                    <option value="0">Khong co khuyen mai</option>
                                        <?php
                                        $sql_khuyenmai = "SELECT * FROM tbl_even ORDER BY id_even DESC";
                                        $query_khuyenmai = mysqli_query($conn,$sql_khuyenmai); 
                                        while($row_khuyenmai = mysqli_fetch_array($query_khuyenmai)){
                                            if ($row_khuyenmai['id_even']==$row['id_even']) {
                                        ?>
                                        <option selected value="<?php echo $row_khuyenmai['id_even']?>"><?php echo $row_khuyenmai['title_even']?></option>
                                        <?php
                                            }else{
                                        ?>
                                                    <option value="<?php echo $row_khuyenmai['id_even']?>"><?php echo $row_khuyenmai['title_even']?></option>
                                                <?php
                                            }    
                                    }
                                        ?>
                                    </select>
                                </div>
                                <button type="submit" name="suasanpham" class="btn btn-info">Sua san pham</button>
                                <?php
                                    }
                                    ?>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div>