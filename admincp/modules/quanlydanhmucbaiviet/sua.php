<?php
    $sql_sua_danhmucbaiviet = "SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet='$_GET[iddanhmucbaiviet]' LIMIT 1";
    $query_sua_danhmucbaiviet = mysqli_query($conn,$sql_sua_danhmucbaiviet);
?>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            SUA DANH MUC BAI VIET
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="post" action="modules/quanlydanhmucbaiviet/xuly.php?iddanhmucbaiviet=<?php echo $_GET['iddanhmucbaiviet']?>">
                                    <?php
                                    while($dong = mysqli_fetch_array($query_sua_danhmucbaiviet)){
                                    ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">TEN DANH MUC BAI VIET</label>
                                    <input value="<?php echo $dong['tendanhmuc_baiviet']?>" name="tendanhmucbaiviet" type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">THU TU DANH MUC BAI VIET</label>
                                    <input value="<?php echo $dong['thutu']?>" name="thutudanhmucbaiviet" type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                                <button type="submit" name="suadanhmucbaiviet" class="btn btn-info">Sua Danh Muc Bai Viet</button>
                           <?php
                                    }
                           ?>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div>