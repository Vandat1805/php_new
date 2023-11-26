<?php
    $sql_lietke_khuyenmai = "SELECT * FROM tbl_khuyenmai,tbl_sanpham,tbl_thuonghieu,tbl_danhmuc WHERE tbl_khuyenmai.id_sanpham=tbl_sanpham.id_sanpham AND tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_thuonghieu=tbl_thuonghieu.id_thuonghieu ORDER BY id_khuyenmai DESC";
    $query_lietke_khuyenmai = mysqli_query($conn,$sql_lietke_khuyenmai);
?>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      LIET KE SAN PHAM KHUYEN MAI
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Id</th>
            <th>Ten San Pham</th>
            <th>Hinh Anh</th>
            <th>Gia San pham</th>
            <th>So Luong</th>
            <th>Tom Tat</th>
            <th>Trang Thai</th>
            <th>Danh Muc</th>
            <th>Thuong Hieu</th>
            <th>Quan ly</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $i = 0;
            while($row = mysqli_fetch_array($query_lietke_khuyenmai)){
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['tensanpham']?></td>
                <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" alt="" width="100"></td>
                <td><?php echo $row['giasp']?></td>
                <td><?php echo $row['soluong']?></td>
                <td><?php echo $row['tomtat']?></td>
                <td><?php if($row['tinhtrang']==1){
                  echo 'Kich hoat';
                }else{
                  echo 'An';
                }
                  ?></td>
                <td><?php echo $row['ten_danhmuc']?></td>
                <td><?php echo $row['ten_thuonghieu']?></td>
                <td>
              <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>" class="active" ui-toggle-class=""><i class="fas fa-edit" style="color: #0ae60d;"></i></a>
              <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" class="active" ui-toggle-class=""><i class="fas fa-trash" style="color: #f10404;"></i></a>
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