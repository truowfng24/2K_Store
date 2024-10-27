<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangnhap']);
        header('location:login.php');
    }
?>
<div class="menu">
    <ul class="admincp_list">
        <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a></li>
        <li><a href="index.php?action=quanlysanpham&query=them">Quản lý sản phẩm</a></li>
        <li><a href="index.php?dangxuat=1">Đăng xuất<?php if(isset($_SESSION['dangnhap']))?></a></li>
    </ul>
</div>