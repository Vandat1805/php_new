<?php
    $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
    $query_lietke_dh = mysqli_query($conn,$sql_lietke_dh);
?>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      LIET KE DON HANG
    </div>
    <div class=""><h4 style="text-align: center;color:red;">
    Để thống kê đơn hàng bạn cần xem chi tiết đơn hàng
  </h4></div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Id</th>
            <th>Ma Don hang</th>
            <th>Ten khach hang</th>
            <th>Dia chi</th>
            <th>Email</th>
            <th>So dien thoai</th>
            <th>Tinh trang</th>
            <th>Ngay dat</th>
            <th>Quan ly</th>
            <th>In don hang</th>
            <th>Trạng thái đơn hàng</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $i = 0;
            while($row = mysqli_fetch_array($query_lietke_dh)){
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['code_cart']?></td>
                <td><?php echo $row['tenkhachhang']?></td>
                <td><?php echo $row['diachi']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['dienthoai']?></td>
                <td>
                <?php
                if ($row['cart_status']==1) {
                    echo '<a href="modules/quanlydonhang/xuly.php?cart_status=0&code='.$row['code_cart'].'"> Thống kê đơn hàng</a>';
                }else{
                    echo'Đã thống kê đơn hàng';
                }
                ?>
                </td>
                <td><?php echo $row['cart_date']?></td>
                <td>
              <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>" class="active" ui-toggle-class=""><i class="fas fa-eye"></i></a>
            </td>
                <td>
              <a href="modules/quanlydonhang/indonhang.php?code=<?php echo $row['code_cart']?>" ui-toggle-class="">In don hang</i></a>
            </td>
            <form action="modules/quanlydonhang/xuly.php?idcart=<?php echo $row['id_cart'];?>" method="post">
              <td><select name="order_status" class="form-control input-sm m-bot15">
                <option value="">---CHON TRANG THAI DON HANG---</option>
                                        <option value="0">Dang cho xac nhan don hang</option>
                                        <option value="1">Da xac nhan don hang</option>
                                        <option value="2">Dang cho van chuyen</option>
                                        <option value="3">Da giao xong</option>
                                      </select>
                                      <button type="submit" name="tinhtrangdon" class="btn btn-info">Xac nhan</button>
                </form>
                <?php
            if ($row['order_status']==0) {
              echo'Dang cho xac nhan don hang';
            }elseif ($row['order_status']==1) {
              echo'Da xac nhan don hang';
            }elseif ($row['order_status']==2) {
              echo'Dang cho van chuyen';
            }elseif ($row['order_status']==3) {
              echo'Da giao xong';
            }
            ?>
            </td>
            <!-- <td>Da xac nhan don hang</td>
            <td>Dang cho van chuyen</td>
            <td>Da giao xong</td> -->
                </tr>
            <?php
            }
            ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>