<?php
  $sql_lietke_dh = "SELECT * FROM tbl_cart, tbl_dangky WHERE tbl_cart.id_khachhang = tbl_dangky.id_khachhang ORDER BY id_cart DESC";
  $query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>
<p style="text-align: center; font-size: 1.8em; font-weight: bold; color: #2c3e50; margin-bottom: 20px;">Đơn hàng hiện có</p>
<table border="0" style="width: 100%; margin: 0 auto; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border-radius: 8px; overflow: hidden;">
  <tr style="background-color: #2c3e50; color: white; text-align: center;">

    <th style="padding: 12px;">Mã đơn hàng</th>
    <th style="padding: 12px;">Tên khách hàng</th>
    <th style="padding: 12px;">Địa chỉ</th>
    <th style="padding: 12px;">Email</th>
    <th style="padding: 12px;">Số điện thoại</th>
    <th style="padding: 12px;">Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
    $i++;
  ?>
  <tr style="text-align: center; border-bottom: 1px solid #ddd;">
    <td style="padding: 12px;"><?php echo $row['code_cart']?></td>
    <td style="padding: 12px;"><?php echo $row['tenkhachhang']?></td>
    <td style="padding: 12px;"><?php echo $row['diachi']?></td>
    <td style="padding: 12px;"><?php echo $row['email']?></td>
    <td style="padding: 12px;"><?php echo $row['dienthoai']?></td>
    <td style="padding: 12px;">
        <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>" style="color: #e74c3c; text-decoration: none; font-weight: bold;">Xem đơn hàng</a>
    </td>
  </tr>
  <?php
  }
  ?>
</table>
