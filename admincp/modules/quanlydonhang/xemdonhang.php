<?php
    $code = $_GET['code'];
  $sql_lietke_dh = "SELECT * FROM tbl_cart_detail, tbl_sanpham WHERE tbl_cart_detail.id_sanpham = tbl_sanpham.id_sanpham AND tbl_cart_detail.code_cart = '".$code."' ORDER BY tbl_cart_detail.id_cart_detail DESC";
  $query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>
<p style="text-align: center; font-size: 1.8em; font-weight: bold; color: #2c3e50; margin-bottom: 20px;">Đơn hàng hiện có</p>
<table border="0" style="width: 100%; margin: 0 auto; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border-radius: 8px; overflow: hidden;">
  <tr style="background-color: #2c3e50; color: white; text-align: center;">

    <th style="padding: 12px;">Mã đơn hàng</th>
    <th style="padding: 12px;">Tên sản phẩm</th>
    <th style="padding: 12px;">Hình ảnh</th>
    <th style="padding: 12px;">Số lượng</th>
    <th style="padding: 12px;">Đơn giá</th>
    <th style="padding: 12px;">Thành tiền</th>
   
  </tr>
  <?php
  $i = 0;
  $tongtien = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
    $i++;
    $thanhtien = $row['giasp']*$row['soluongmua'];
    $tongtien += $thanhtien;
  ?>
  <tr style="text-align: center; border-bottom: 1px solid #ddd;">
    <td style="padding: 12px;"><?php echo $row['code_cart']?></td>
    <td style="padding: 12px;"><?php echo $row['tensanpham']?></td>
    <td style="padding: 12px;"><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width="150px" style="border-radius: 5px;"></td>
    <td style="padding: 12px;"><?php echo $row['soluongmua']?></td>
    <td style="padding: 12px;"><?php echo $row['giasp']?>$</td>
    <td style="padding: 12px;"><?php echo $thanhtien?>$</td>
  </tr>
  <?php
  }
  ?>
  <tr>
    <td>
        <p>Tổng tiền: <?php echo $tongtien?>$</p>
    </td>
  </tr>
</table>
