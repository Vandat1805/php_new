<?php
    $sql_lietke_magiamgia = "SELECT * FROM tbl_coupon ORDER BY coupon_id DESC";
    $query_lietke_magiamgia = mysqli_query($conn,$sql_lietke_magiamgia);
?>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      LIET KE MA GIAM GIA
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Id</th>
            <th>Ten ma giam gia</th>
            <th>So luong ma</th>
            <th>Dieu kien giam gia</th>
            <th>So tien giam</th>
            <th>Ma giam gia</th>
            <th>Quan ly</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $i = 0;
            while($row = mysqli_fetch_array($query_lietke_magiamgia)){
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['coupon_name']?></td>
                <td><?php echo $row['coupon_time']?></td>
                <td> <?php
           if($row['coupon_condition']==1){
            ?>
            Giam theo %
          <?php
        }else{
          ?>  
            Giam theo tien
           <?php
        }
           ?></td>
                <td> <?php
           if($row['coupon_condition']==1){
          echo 'Giam'.' '.$row['coupon_number'].' '.'%'; 
        }else{
            echo 'Giam'.' '.number_format($row['coupon_number'],0,',','.').' '.'d'; 
          }
           ?></td>
                <td><?php echo $row['coupon_code']?></td>
                <td>
              <a href="?action=quanlymagiamgia&query=sua&idmagiamgia=<?php echo $row['coupon_id'] ?>" class="active" ui-toggle-class=""><i class="fas fa-edit" style="color: #0ae60d;"></i></a>
              <a href="modules/quanlymagiamgia/xuly.php?idmagiamgia=<?php echo $row['coupon_id'] ?>" class="active" ui-toggle-class=""><i class="fas fa-trash" style="color: #f10404;"></i></a>
            </td>
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