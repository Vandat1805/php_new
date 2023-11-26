<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            THEM SAN PHAM
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="post" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">TEN SAN PHAM</label>
                                    <input name="tensanpham" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ten Danh Muc">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">MA SAN PHAM</label>
                                    <input name="masanpham" type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">GIA SAN PHAM</label>
                                    <input name="giasanpham" type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">SO LUONG</label>
                                    <input name="soluong" type="text" class="form-control" id="exampleInputEmail1">
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
                                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                                        $query_danhmuc = mysqli_query($conn,$sql_danhmuc); 
                                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                                        ?>
                                        <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['ten_danhmuc']?></option>
                                        <?php
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
                                        ?>
                                        <option value="<?php echo $row_thuonghieu['id_thuonghieu']?>"><?php echo $row_thuonghieu['ten_thuonghieu']?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">CHON KHUYEN MAI</label>
                                    <select  name="khuyenmai" class="form-control input-sm m-bot15">
                                        <option value="">---CHON HINH THUC KHUYEN MAI---</option>
                                        <option value="0">Khong co khuyen mai</option>
                                        <option value="1">Co khuyen mai</option>
                                    </select>
                                </div>
                                <button type="submit" name="themsanpham" class="btn btn-info">Them San Pham</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div>
        <script type="text/javascript">
           $(document).ready(function() {
            $('#noidungsanpham').summernote({
                height:300,
                disableResizeEditor: true,
            });
            $('#tomtatsanpham').summernote({
                disableResizeEditor: true,
                height:300,
            });
            });
        </script>