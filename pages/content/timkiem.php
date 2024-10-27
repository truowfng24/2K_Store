<?php
    $tukhoa = $_POST['tukhoa'];
    $sql_pro = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
    $query_pro = mysqli_query($mysqli, $sql_pro);
?>
<h3 style="color: #000; font-size: 24px;">
    Kết quả tìm kiếm:
    <?php echo $_POST['tukhoa'];?>
</h3>
<ul class="list-product">
    <?php
        while($row = mysqli_fetch_array($query_pro)){
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