<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            THEM SAN PHAM KHUYEN MAI
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="post" action="modules/quanlykhuyenmai/xuly.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">SAN PHAM KHUYEN MAI</label>
                                    <select  name="khuyenmai" class="form-control input-sm m-bot15">
                                        <?php
                                        $sql_khuyenmai = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_sale = 1 ORDER BY id_sanpham DESC";
                                        $query_khuyenmai = mysqli_query($conn,$sql_khuyenmai); 
                                        while($row_khuyenmai = mysqli_fetch_array($query_khuyenmai)){
                                        ?>
                                        <option value="<?php echo $row_khuyenmai['id_sanpham']?>"><?php echo $row_khuyenmai['tensanpham']?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">SU KIEN KHUYEN MAI</label>
                                    <select  name="sukien" class="form-control input-sm m-bot15">
                                        <?php
                                        $sql_sukien = "SELECT * FROM tbl_even ORDER BY id_even DESC";
                                        $query_sukien = mysqli_query($conn,$sql_sukien); 
                                        while($row_sukien = mysqli_fetch_array($query_sukien)){
                                        ?>
                                        <option value="<?php echo $row_sukien['id_even']?>"><?php echo $row_sukien['title_even']?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <button type="submit" name="themkhuyenmai" class="btn btn-info">Them San Pham Khuyen Mai</button>
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