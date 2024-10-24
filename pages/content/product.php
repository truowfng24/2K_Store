<!-- Chi tiet -->
<?php
    $sql="SELECT * FROM tbl_danhmuc, tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while($row = mysqli_fetch_array($query)){
?>
    <div class="detail" style="display: flex; flex-direction: row; align-items: flex-start; max-width: 100%;">
        <div class="images">
            <img width="50%" src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" alt="" style="width: 300px; height: auto; border-radius: 10px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-right: 20px;">
        </div>
        <form method="POST" action="pages/content/themgiohang.php?idsanpham=<?php echo $row['id_sanpham']?>">
            <div class="product-detail" style="max-width: 60%; font-family: 'Arial', sans-serif;">
                <h3 style="font-size: 2em; color: #333; margin-bottom: 10px;"><?php echo $row['tensanpham']?></h3>
                <p style="font-size: 1.1em; color: #666; margin: 10px 0;">Mã sản phẩm: <?php echo $row['masp']?></p>
                <p style="font-size: 1.1em; color: #666; margin: 10px 0;">Giá: <?php echo $row['giasp']?> VND</p>
                <p style="font-size: 1.1em; color: #666; margin: 10px 0;">Số lượng: <?php echo $row['soluong']?></p>
                <p><input class="addtocart" name="themgiohang" type="submit" value="Thêm vào gỏ hàng" style="background-color: #e74c3c; color: white; border: none; padding: 12px 20px; font-size: 1em; cursor: pointer; transition: background-color 0.3s ease; border-radius: 5px;"></p>
            </div>
        </form>
    </div>
<?php
    }
?>
