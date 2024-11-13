<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
        unset($_SESSION['id_khachhang']);
    }
?>
<div class="header">
    <h2><a href="">2🄺 ˢᵗᵒʳᵉ</a></h2>
    <ul class="menu">
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
        <li><a href="index.php?quanly=lienhe">Liên hệ</a></li>
        <?php
            if(isset($_SESSION['dangky'])){
        ?>
        <li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
        <?php
            }else{
        ?>
        <li><a href="index.php?quanly=dangky">Đăng ký</a></li>
        <?php
            }
        ?>
    </ul>
    <form action="index.php?quanly=timkiem" method="POST">
        <input type="text" placeholder ="Tìm kiếm sản phẩm" name="tukhoa">
        <input type="submit" value="Tìm kiếm">
    </form>
</div>