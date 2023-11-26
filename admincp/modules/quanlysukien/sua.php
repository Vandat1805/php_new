<?php
    $sql_sua_sukien = "SELECT * FROM tbl_even WHERE id_even='$_GET[idsukien]' LIMIT 1";
    $query_sua_sukien = mysqli_query($conn,$sql_sua_sukien);
?>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            SUA SU KIEN
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="post" action="modules/quanlysukien/xuly.php?idsukien=<?php echo $_GET['idsukien']?>">
                                    <?php
                                    while($dong = mysqli_fetch_array($query_sua_sukien)){
                                    ?>
                               <div class="form-group">
                                    <label for="exampleInputEmail1">TEN SU KIEN</label>
                                    <input name="tensukien" type="text" class="form-control" value="<?php echo $dong['title_even']?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">% GIAM GIA</label>
                                    <input name="phantramgiam" type="text" class="form-control" value="<?php echo $dong['even_number']?>" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">TINH TRANG</label>
                                    <select  name="tinhtrang" class="form-control input-sm m-bot15">
                                        <?php
                                        if($dong['even_status']==1){
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
                                <button type="submit" name="suasukien" class="btn btn-info">Sua Danh Muc</button>
                           <?php
                                    }
                           ?>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div>