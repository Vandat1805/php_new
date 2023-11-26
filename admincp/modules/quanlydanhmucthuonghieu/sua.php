<?php
    $sql_sua_danhmucthuonghieu = "SELECT * FROM tbl_thuonghieu WHERE id_thuonghieu='$_GET[iddanhmucthuonghieu]' LIMIT 1";
    $query_sua_danhmucthuonghieu = mysqli_query($conn,$sql_sua_danhmucthuonghieu);
?>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            SUA DANH MUC THUONG HIEU
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="post" action="modules/quanlydanhmucthuonghieu/xuly.php?iddanhmucthuonghieu=<?php echo $_GET['iddanhmucthuonghieu']?>">
                                    <?php
                                    while($dong = mysqli_fetch_array($query_sua_danhmucthuonghieu)){
                                    ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">TEN DANH MUC THUONG HIEU</label>
                                    <input value="<?php echo $dong['ten_thuonghieu']?>" name="tendanhmucthuonghieu" type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">THU TU DANH MUC THUONG HIEU</label>
                                    <input value="<?php echo $dong['thutu']?>" name="thutudanhmucthuonghieu" type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                                <button type="submit" name="suadanhmucthuonghieu" class="btn btn-info">Sua Danh Muc Thuong Hieu</button>
                           <?php
                                    }
                           ?>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div>