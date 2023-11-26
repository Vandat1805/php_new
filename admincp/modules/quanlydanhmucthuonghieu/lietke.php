<?php
    $sql_lietke_danhmucthuonghieu = "SELECT * FROM tbl_thuonghieu ORDER BY thutu DESC";
    $query_lietke_danhmucthuonghieu = mysqli_query($conn,$sql_lietke_danhmucthuonghieu);
?>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      LIET KE DANH MUC THUONG HIEU
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Id</th>
            <th>Ten Danh Muc Thuong Hieu</th>
            <th>Quan ly</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $i = 0;
            while($row = mysqli_fetch_array($query_lietke_danhmucthuonghieu)){
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['ten_thuonghieu']?></td>
                <td>
              <a href="?action=quanlydanhmucthuonghieu&query=sua&iddanhmucthuonghieu=<?php echo $row['id_thuonghieu'] ?>" class="active" ui-toggle-class=""><i class="fas fa-edit" style="color: #0ae60d;"></i></a>
              <a href="modules/quanlydanhmucthuonghieu/xuly.php?iddanhmucthuonghieu=<?php echo $row['id_thuonghieu'] ?>" class="active" ui-toggle-class=""><i class="fas fa-trash" style="color: #f10404;"></i></a>
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