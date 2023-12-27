<h3>Lich su don hang</h3>
<?php
    $id_khachhang = $_SESSION['id_khachhang'];
    $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky AND tbl_cart.id_khachhang='$id_khachhang' ORDER BY tbl_cart.id_cart DESC";
    $query_lietke_dh = mysqli_query($conn,$sql_lietke_dh);
?>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      LIET KE DON HANG
    </div>
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
            <!-- <th>Tinh trang</th> -->
            <th>Ngay dat</th>
            <th>Quan ly</th>
            <th>In don hang</th>
            <th>Hinh thuc thanh toan</th>
            <th>Trang thai don hang</th>
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
                <td><?php echo $row['cart_date']?></td>
                <td>
              <a href="index.php?quanly=xemdonhang&code=<?php echo $row['code_cart']?>" class="active" ui-toggle-class=""><i class="fas fa-eye"></i></a>
            </td>
                <td>
              <a href="pages/main/indonhang.php?code=<?php echo $row['code_cart']?>" ui-toggle-class="">In don hang</i></a>
            </td>
            <td>
            <?php
            if ($row['cart_payment']=='vnpay'||$row['cart_payment']=='momo') {
            ?>        
            <a href="index.php?quanly=lichsudonhang&congthanhtoan=<?php echo $row['cart_payment']?>&code_cart=<?php echo $row['code_cart']?>"><?php echo $row['cart_payment']?></a>
        <?php
                }else{
        ?>
            <?php echo $row['cart_payment']?>
        <?php
                }
        ?>
        </td>
        <?php
            if ($row['order_status']==0) {
              echo'<td style="color:#D82D8B;">Dang cho xac nhan don hang</td>';
            }elseif ($row['order_status']==1) {
              echo'<td style="color:blue;">Da xac nhan don hang</td>';
            }elseif ($row['order_status']==2) {
              echo'<td style="color:orange;">Dang cho van chuyen</td>';
            }elseif ($row['order_status']==3) {
              echo'<td style="color:green;">Da giao xong</td>';
            }elseif ($row['order_status']==4) {
              echo'<td style="color:red;">Huy don hang</td>';
            }
            ?>
        <!-- <td style="color:green;">Da giao xong</td> -->
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
<?php
if (isset($_GET['congthanhtoan'])) {
    $congthanhtoan = $_GET['congthanhtoan'];
    $code_cart = $_GET['code_cart'];
    echo'<h4>Chi tiet thanh toan qua cong thanh toan: '.$congthanhtoan.'</h4>';
    if ($congthanhtoan=='momo') {
   $sql_momo = mysqli_query($conn,"SELECT * FROM tbl_momo WHERE code_cart='$code_cart' LIMIT 1");
   $row_momo = mysqli_fetch_array($sql_momo);
   ?>
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>partner_code</th>
        <th>order_id</th>
        <th>amount</th>
        <th>order_info</th>
        <th>order_type</th>
        <th>trans_id</th>
        <th>pay_type</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $row_momo['partner_code']?></td>
        <td><?php echo $row_momo['order_id']?></td>
        <td><?php echo number_format( $row_momo['amount'],0,',','.').' vnd'?></td>
        <td><?php echo $row_momo['order_info']?></td>
        <td><?php echo $row_momo['order_type']?></td>
        <td><?php echo $row_momo['trans_id']?></td>
        <td><?php echo $row_momo['pay_type']?></td>
      </tr>
    </tbody>
  </table>
  </div>
   <?php
    }elseif($congthanhtoan=='vnpay'){
        $sql_vnpay = mysqli_query($conn,"SELECT * FROM tbl_vnpay WHERE code_cart='$code_cart' LIMIT 1");
        $row_vnpay = mysqli_fetch_array($sql_vnpay);
   ?>
   <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>vnp_amount</th>
        <th>vnp_bankcode</th>
        <th>vnp_banktran</th>
        <th>vnp_cardtype</th>
        <th>vnp_orderinfo</th>
        <th>Ngày thanh toán</th>
        <th>vnp_tmncode</th>
        <th>vnp_transac</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo number_format(substr($row_vnpay['vnp_amount'],0,6),0,',','.').' vnd'?></td>
        <td><?php echo $row_vnpay['vnp_bankcode']?></td>
        <td><?php echo $row_vnpay['vnp_banktran']?></td>
        <td><?php echo $row_vnpay['vnp_cardtype']?></td>
        <td><?php echo $row_vnpay['vnp_orderinfo']?></td>
        <td><?php echo  date('d-m-Y', strtotime($row_vnpay['vnp_paydate']))?><br><?php echo date('H:i:s', strtotime($row_vnpay['vnp_paydate']));?></td>
        <td><?php echo $row_vnpay['vnp_tmncode']?></td>
        <td><?php echo $row_vnpay['vnp_transac']?></td>
      </tr>
    </tbody>
  </table>
  </div>
   <?php 
    }
}
?>