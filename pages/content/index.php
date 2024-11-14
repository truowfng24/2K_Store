<?php
    $sql="SELECT * FROM tbl_danhmuc, tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 20";
    $query = mysqli_query($mysqli, $sql);
?>

<ul class="list-product">
    <?php
        while($row = mysqli_fetch_array($query)){
    ?>
        <li>
            <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">

                <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" alt="">
                <p><?php echo $row['tensanpham']?></p>
                <p>Gia: <?php echo ($row['giasp'])?> $</p>
            </a>
        </li>
    <?php
        }
    ?>
</ul>