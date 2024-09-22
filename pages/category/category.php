<!-- Danh mục sản phẩm -->
<h3>Danh Mục Sản Phẩm</h3>
<ul class="list-category">
    <?php
        $sql = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
        $query = mysqli_query($mysqli, $sql);
        while($row = mysqli_fetch_array($query)){
    ?>
        <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc']?>"><?php echo $row['tendanhmuc']?></a></li>
    <?php
    }
    ?>
</ul>
            