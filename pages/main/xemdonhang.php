<?php
    $code = $_GET['code'];
    $sql_lietke_dh = "SELECT * FROM tbl_cart_detail,tbl_sanpham WHERE tbl_cart_detail.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_detail.code_cart='".$code."' ORDER BY tbl_cart_detail.id_cart_detail DESC";
    $query_lietke_dh = mysqli_query($conn,$sql_lietke_dh);
?>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      XEM DON HANG
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Id</th>
            <th>Ma Don hang</th>
            <th>Ten san pham</th>
            <th>So luong</th>
            <th>Don gia</th>
            <th>Thanh tien</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $i = 0;
            $tongtien = 0;
            while($row = mysqli_fetch_array($query_lietke_dh)){
                $i++;
                $thanhtien = $row['giasp']*$row['soluongmua'];
                $tongtien += $thanhtien;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['code_cart']?></td>
                <td><?php echo $row['tensanpham']?></td>
                <td><?php echo $row['soluongmua']?></td>
                <td><?php echo number_format($row['giasp'],0,',','.').' vnd'?></td>
                <td><?php echo number_format($thanhtien,0,',','.').' vnd'?></td>
                </tr>
            <?php
            }
            ?>
          </tr>
          <tr>
          <td>Tong tien: <?php echo number_format($tongtien,0,',','.').' vnd'?></td>
          <?php
          $_SESSION['doanhthu'] = $tongtien;
          // echo $_SESSION['doanhthu'];
          ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>