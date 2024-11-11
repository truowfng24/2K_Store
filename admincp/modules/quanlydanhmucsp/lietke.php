<?php
  $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ";
  $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<p style="text-align: center; font-size: 1.8em; font-weight: bold; color: #2c3e50; margin-bottom: 20px;">Danh mục hiện có</p>
<table border="0" style="width: 50%; margin: 0 auto; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border-radius: 8px; overflow: hidden;">
  <tr style="background-color: #2c3e50; color: white; text-align: center;">
    <th style="padding: 12px;">Id</th>
    <th style="padding: 12px;">Tên danh mục</th>
    <th style="padding: 12px;">Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
    $i++;
  ?>
  <tr style="text-align: center; border-bottom: 1px solid #ddd;">
    <td style="padding: 12px;"><?php echo $row['id_danhmuc']?></td>
    <td style="padding: 12px;"><?php echo $row['tendanhmuc']?></td>
    <td style="padding: 12px;">
        <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>" style="color: #e74c3c; text-decoration: none; font-weight: bold;">Xoá</a> | 
        <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>" style="color: #3498db; text-decoration: none; font-weight: bold;">Sửa</a>
    </td>
  </tr>
  <?php
  }
  ?>
</table>
