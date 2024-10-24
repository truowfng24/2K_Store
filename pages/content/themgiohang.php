<?php
    session_start();
    include('../../admincp/config/config.php');
    //them so luog
    if(isset($_GET['cong'])){
        $id = $_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $product[] = array(
                    'tensanpham' => $cart_item['tensanpham'],
                    'id' => $cart_item['id'],
                    'soluong' => $cart_item['soluong'],
                    'giasp' => $cart_item['giasp'],
                    'hinhanh' => $cart_item['hinhanh'],
                    'masp' => $cart_item['masp']
                );
                $_SESSION['cart'] = $product;
            }else{
                $tangsoluong= $cart_item['soluong'] + 1;
                if($cart_item['soluong']<10){
                    $product[] = array(
                        'tensanpham' => $cart_item['tensanpham'],
                        'id' => $cart_item['id'],
                        'soluong' => $tangsoluong,
                        'giasp' => $cart_item['giasp'],
                        'hinhanh' => $cart_item['hinhanh'],
                        'masp' => $cart_item['masp']
                    );
                }else{
                    $product[] = array(
                        'tensanpham' => $cart_item['tensanpham'],
                        'id' => $cart_item['id'],
                        'soluong' => $cart_item['soluong'],
                        'giasp' => $cart_item['giasp'],
                        'hinhanh' => $cart_item['hinhanh'],
                        'masp' => $cart_item['masp']
                    );
                }
                $_SESSION['cart'] = $product;
            }
          
        }
        header('Location:../../index.php?quanly=giohang');
    }
    //tru so luong
    if(isset($_GET['tru'])){
        $id = $_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $product[] = array(
                    'tensanpham' => $cart_item['tensanpham'],
                    'id' => $cart_item['id'],
                    'soluong' => $cart_item['soluong'],
                    'giasp' => $cart_item['giasp'],
                    'hinhanh' => $cart_item['hinhanh'],
                    'masp' => $cart_item['masp']
                );
                $_SESSION['cart'] = $product;
            }else{
                $giamsoluong= $cart_item['soluong'] - 1;
                if($cart_item['soluong']>1){
                    $product[] = array(
                        'tensanpham' => $cart_item['tensanpham'],
                        'id' => $cart_item['id'],
                        'soluong' => $giamsoluong,
                        'giasp' => $cart_item['giasp'],
                        'hinhanh' => $cart_item['hinhanh'],
                        'masp' => $cart_item['masp']
                    );
                }else{
                    $product[] = array(
                        'tensanpham' => $cart_item['tensanpham'],
                        'id' => $cart_item['id'],
                        'soluong' => $cart_item['soluong'],
                        'giasp' => $cart_item['giasp'],
                        'hinhanh' => $cart_item['hinhanh'],
                        'masp' => $cart_item['masp']
                    );
                }
                $_SESSION['cart'] = $product;
            }
          
        }
        header('Location:../../index.php?quanly=giohang');
    }

    //xoa san pham
    if(isset($_SESSION['cart'])&& isset($_GET['xoa'])){
        $id = $_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $product[] = array(
                    'tensanpham' => $cart_item['tensanpham'],
                    'id' => $id,
                    'soluong' => $soluong,
                    'giasp' => $cart_item['giasp'],
                    'hinhanh' => $cart_item['hinhanh'],
                    'masp' => $cart_item['masp']
                );
            }
            $_SESSION['cart'] = $product;
            header('Location:../../index.php?quanly=giohang');
        }
    }

    //xoa tat ca
    if(isset($_GET['xoatatca'])&& $_GET['xoatatca']==1){
        unset($_SESSION['cart']);
        header('location:../../index.php?quanly=giohang');
    }

    //them san pham
    if(isset($_POST['themgiohang'])){
        // session_destroy();
        $id = $_GET['idsanpham'];
        $soluong = 1;
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='" . $id . "' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);
        
        if ($row) {
            $new_product = array(
                'tensanpham' => $row['tensanpham'],
                'id' => $id,
                'soluong' => $soluong,
                'giasp' => $row['giasp'],
                'hinhanh' => $row['hinhanh'],
                'masp' => $row['masp']
            );
        
            // Kiểm tra session giỏ hàng tồn tại
            if (isset($_SESSION['cart'])) {
                $found = false;
                foreach ($_SESSION['cart'] as &$cart_item) { // Sử dụng tham chiếu để sửa đổi trực tiếp
                    if ($cart_item['id'] == $id) {
                        $cart_item['soluong'] += 1; // Cộng thêm 1 vào số lượng
                        $found = true;
                        break; // Thoát khỏi vòng lặp nếu tìm thấy sản phẩm
                    }
                }
                if (!$found) {
                    $_SESSION['cart'][] = $new_product; // Thêm sản phẩm mới nếu không tìm thấy
                }
            } else {
                $_SESSION['cart'] = array($new_product); // Khởi tạo giỏ hàng với sản phẩm mới
            }
        }
        
        header('Location:../../index.php?quanly=giohang');
    }

?>