<?php
  $sql_lietke_sp = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
  $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>
<p style="text-align: center; font-size: 1.8em; font-weight: bold; color: #2c3e50; margin-bottom: 20px;">Sản phẩm hiện có</p>
<table border="0" style="width: 100%; margin: 0 auto; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border-radius: 8px; overflow: hidden;">
  <tr style="background-color: #2c3e50; color: white; text-align: center;">
    <th style="padding: 12px;">Id</th>
    <th style="padding: 12px;">Tên sản phẩm</th>
    <th style="padding: 12px;">Hình ảnh</th>
    <th style="padding: 12px;">Giá</th>
    <th style="padding: 12px;">Số lượng</th>
    <th style="padding: 12px;">Danh mục</th>
    <th style="padding: 12px;">Mã sản phẩm</th>
    <th style="padding: 12px;">Tóm tắt</th>
    <th style="padding: 12px;">Trạng thái</th>
    <th style="padding: 12px;">Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_sp)){
    $i++;
  ?>
  <tr style="text-align: center; border-bottom: 1px solid #ddd;">
    <td style="padding: 12px;"><?php echo $i?></td>
    <td style="padding: 12px;"><?php echo $row['tensanpham']?></td>
    <td style="padding: 12px;"><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width="150px" style="border-radius: 5px;"></td>
    <td style="padding: 12px;"><?php echo $row['giasp']?></td>
    <td style="padding: 12px;"><?php echo $row['soluong']?></td>
    <td style="padding: 12px;"><?php echo $row['tendanhmuc']?></td>
    <td style="padding: 12px;"><?php echo $row['masp']?></td>
    <td style="padding: 12px;"><?php echo $row['tomtat']?></td>
    <td style="padding: 12px;"><?php echo $row['tinhtrang'] == 1 ? 'Kích hoạt' : 'Ẩn'; ?></td>
    <td style="padding: 12px;">
        <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>" style="color: #e74c3c; text-decoration: none; font-weight: bold;">Xoá</a> | 
        <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham']?>" style="color: #3498db; text-decoration: none; font-weight: bold;">Sửa</a>
    </td>
  </tr>
  <?php
  }
  ?>
</table>
