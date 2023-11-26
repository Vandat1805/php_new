<?php
    $sql_lietke_sukien = "SELECT * FROM tbl_even ORDER BY id_even DESC";
    $query_lietke_sukien = mysqli_query($conn,$sql_lietke_sukien);
?>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      LIET KE SU KIEN
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Id</th>
            <th>Ten Su Kien</th>
            <th>Phan Tram Giam</th>
            <th>Tinh trang</th>
            <th>Quan ly</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $i = 0;
            while($row = mysqli_fetch_array($query_lietke_sukien)){
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['title_even']?></td>
                <td><?php echo $row['even_number']?></td>
                <td><?php if($row['even_status']==1){
                  echo 'Kich hoat';
                }else{
                  echo 'An';
                }
                  ?></td>
                <td>
              <a href="?action=quanlysukien&query=sua&idsukien=<?php echo $row['id_even'] ?>" class="active" ui-toggle-class=""><i class="fas fa-edit" style="color: #0ae60d;"></i></a>
              <a href="modules/quanlysukien/xuly.php?idsukien=<?php echo $row['id_even'] ?>" class="active" ui-toggle-class=""><i class="fas fa-trash" style="color: #f10404;"></i></a>
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