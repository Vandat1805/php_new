<?php
    $sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE id='$_GET[idbaiviet]' LIMIT 1";
    $query_sua_bv = mysqli_query($conn,$sql_sua_bv);
?>
<div class="row">
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            SUA BAI VIET
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="post" action="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet']?>" enctype="multipart/form-data">
                                    <?php
                                    while ($row = mysqli_fetch_array($query_sua_bv)) {
                                    ?>
                                     <div class="form-group">
                                    <label for="exampleInputEmail1">TEN BAI VIET</label>
                                    <input name="tenbaiviet" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row['tenbaiviet']?>" placeholder="Ten Danh Muc">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">TAB TEN LIEN QUAN</label>
                                    <input name="tablienquan" type="text" class="form-control" value="<?php echo $row['tablienquan']?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">HINH ANH</label>
                                    <input name="hinhanh" type="file" class="form-control" id="exampleInputEmail1">
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
                                    <label for="exampleInputPassword1">DANH MUC BAI VIET</label>
                                    <select  name="danhmuc" class="form-control input-sm m-bot15">
                                        <?php
                                        $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
                                        $query_danhmuc = mysqli_query($conn,$sql_danhmuc); 
                                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                                            if ($row_danhmuc['id_baiviet']==$row['id_baiviet']) {
                                        ?>
                                        <option selected value="<?php echo $row_danhmuc['id_baiviet']?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']?></option>
                                        <?php
                                            }else{
                                        ?>
                                                    <option value="<?php echo $row_danhmuc['id_baiviet']?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']?></option>
                                                <?php
                                            }    
                                    }
                                        ?>
                                    </select>
                                </div>
                                <button type="submit" name="suabaiviet" class="btn btn-info">Sua Bai Viet</button>
                                <?php
                                    }
                                    ?>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div>