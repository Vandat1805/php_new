<?php
    $sql_lietke_bv = "SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet WHERE tbl_baiviet.id_baiviet=tbl_danhmucbaiviet.id_baiviet ORDER BY tbl_baiviet.id DESC";
    $query_lietke_bv = mysqli_query($conn,$sql_lietke_bv);
?>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      LIET KE SAN PHAM
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Id</th>
            <th>Ten Bai Viet</th>
            <th>Hinh Anh</th>
            <th>Danh Muc</th>
            <th>Tom Tat</th>
            <th>Trang Thai</th>
            <th>Quan ly</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $i = 0;
            while($row = mysqli_fetch_array($query_lietke_bv)){
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['tenbaiviet']?></td>
                <td><img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh']?>" alt="" width="100"></td>
                <td><?php echo $row['tendanhmuc_baiviet']?></td>
                <td><?php echo $row['tomtat']?></td>
                <td><?php if($row['tinhtrang']==1){
                  echo 'Kich hoat';
                }else{
                  echo 'An';
                }
                  ?></td>
                <td>
              <a href="?action=quanlybaiviet&query=sua&idbaiviet=<?php echo $row['id'] ?>" class="active" ui-toggle-class=""><i class="fas fa-edit" style="color: #0ae60d;"></i></a>
              <a href="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>" class="active" ui-toggle-class=""><i class="fas fa-trash" style="color: #f10404;"></i></a>
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