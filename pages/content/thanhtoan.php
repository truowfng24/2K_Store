<?php
    session_start();
    include('../../admincp/config/config.php');
    $id_khachhang = $_SESSION['id_khachhang'];
    $code_order = rand(0,9999);
    $insert_cart = "INSERT INTO tbl_cart(id_khachhang, code_cart) VALUE ('".$id_khachhang."','".$code_order."')";
    $cart_query = mysqli_query($mysqli, $insert_cart);
    if($cart_query){
        foreach($_SESSION['cart'] as $key => $value){
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            $insert_order_detail = "INSERT INTO tbl_cart_detail(id_sanpham, code_cart, soluongmua) VALUE ('".$id_sanpham."','".$code_order."','".$soluong."')";
            mysqli_query($mysqli, $insert_order_detail);
        }
    }
    unset($_SESSION['cart']);
   
    header('Location:index.php?quanly=camon');
?>