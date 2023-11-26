<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            THEM BAI VIET
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="post" action="modules/quanlybaiviet/xuly.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">TEN BAI VIET</label>
                                    <input name="tenbaiviet" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ten Danh Muc">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">TAB TEN LIEN QUAN</label>
                                    <input name="tablienquan" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">HINH ANH</label>
                                    <input name="hinhanh" type="file" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">NOI DUNG</label>
                                    <textarea style="resize: none;" rows="5" name="noidung" class="form-control" id="noidungsanpham"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">TOM TAT</label>
                                    <textarea style="resize: none;" rows="5" name="tomtat" class="form-control" id="tomtatsanpham"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">TINH TRANG</label>
                                    <select  name="tinhtrang" class="form-control input-sm m-bot15">
                                        <option value="0">An</option>
                                        <option value="1">Kich hoat</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DANH MUC SAN PHAM</label>
                                    <select  name="danhmuc" class="form-control input-sm m-bot15">
                                        <?php
                                        $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
                                        $query_danhmuc = mysqli_query($conn,$sql_danhmuc); 
                                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                                        ?>
                                        <option value="<?php echo $row_danhmuc['id_baiviet']?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <button type="submit" name="thembaiviet" class="btn btn-info">Them Bai Viet</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div>