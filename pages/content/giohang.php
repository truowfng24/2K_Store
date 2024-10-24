
<?php
    session_start();
?>
<?php
    if(isset($_SESSION['cart'])){
     
    }
?>
<table>
  <tr>
    <th>Id </th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
    <th>Thành tiền</th>
    <th>Quản lý</th>
  </tr>
  <?php
  if(isset($_SESSION['cart'])){
    $i = 0;
    $tongtien = 0;
    foreach($_SESSION['cart'] as $cart_item){
        $thanhtien = $cart_item['soluong'] *  $cart_item['giasp'];
        $tongtien =  $tongtien + $thanhtien;

        $i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['masp']?></td>
    <td><?php echo $cart_item['tensanpham']?></td>
    <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']?>" width="50%"></td>
    <td>
        <a href="pages/content/themgiohang.php?tru=<?php echo $cart_item['id']?>"><i class="fas fa-minus"></i></a>
        <?php echo $cart_item['soluong']?>
        <a href="pages/content/themgiohang.php?cong=<?php echo $cart_item['id']?>"><i class="fas fa-plus"></i></a>
    </td>
    <td><?php echo $cart_item['giasp']?>$</td>
    <td><?php echo $thanhtien?>$</td>
    <td><a href="pages/content/themgiohang.php?xoa=<?php echo $cart_item['id']?>">Xoá</a></td>
   
  </tr>
<?php
 }
?>
    <tr>
        <td><p>Tong tien: <?php echo $tongtien?>$</p></td>
        <td><a href="pages/content/themgiohang.php?xoatatca=1">Xoá tất cả</a></td>
    </tr>
<?php
  }else{
?> 
 <tr>
    <td >Giỏ hàng trống</td>
  </tr>
<?php
  }
?>
</table>