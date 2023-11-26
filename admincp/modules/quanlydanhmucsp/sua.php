<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($conn,$sql_sua_danhmucsp);
?>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            SUA DANH MUC SAN PHAM
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="post" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
                                    <?php
                                    while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
                                    ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">TEN DANH MUC</label>
                                    <input value="<?php echo $dong['ten_danhmuc']?>" name="tendanhmuc" type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">THU TU</label>
                                    <input value="<?php echo $dong['thutu']?>" name="thutu" type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                                <button type="submit" name="suadanhmuc" class="btn btn-info">Sua Danh Muc</button>
                           <?php
                                    }
                           ?>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div>