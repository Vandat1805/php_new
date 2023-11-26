<?php
    $sql_lh = "SELECT * FROM tbl_lienhe WHERE id=1";
    $query_lh = mysqli_query($conn,$sql_lh);
?>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            THEM THONG TIN LIEN HE
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                    <?php
                                    while($dong = mysqli_fetch_array($query_lh)){
                                    ?>
                                <form method="post" action="modules/thongtinweb/xuly.php?id=<?php echo $dong['id']?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">NOI DUNG</label>
                                    <textarea style="resize: none;" rows="5" name="thongtinlienhe" class="form-control" id="noidungsanpham"><?php echo $dong['thongtinlienhe']?></textarea>
                                </div>
                                <?php
                                    }
                                ?>
                                <button type="submit" name="submitlienhe" class="btn btn-info">Cap nhat</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div>