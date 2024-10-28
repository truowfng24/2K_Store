<?php
    
    if(isset($_POST['dangky'])){
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $matkhau = md5($_POST['matkhau']);
        $diachi = $_POST['diachi'];
        $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang, email, dienthoai, matkhau, diachi) VALUE ('".$tenkhachhang."','".$email."','".$dienthoai."','".$matkhau."','".$diachi."')");
        if($sql_dangky){
            echo '<p style="color:green">Đăng ký thành công</p>';
           
            $_SESSION['dangky'] = $tenkhachhang;
            header('location:index.php?quanly=giohang');
        }
    }
?>


<form action="" method="POST">
    <table style="width: 100%; border-collapse: collapse;">
        <h2 style="text-align: center;">Đăng ký thành viên</h2>
        <tr>
            <td style="padding: 10px; font-weight: bold;">Họ và tên</td>
            <td style="padding: 10px;"><input type="text" name="hovaten" required style="width: 100%; padding: 8px;"></td>
        </tr>
        <tr>
            <td style="padding: 10px; font-weight: bold;">Email</td>
            <td style="padding: 10px;"><input type="text" name="email" required style="width: 100%; padding: 8px;"></td>
        </tr>
        <tr>
            <td style="padding: 10px; font-weight: bold;">Điện thoại</td>
            <td style="padding: 10px;"><input type="text" name="dienthoai" required style="width: 100%; padding: 8px;"></td>
        </tr>
        <tr>
            <td style="padding: 10px; font-weight: bold;">Địa chỉ</td>
            <td style="padding: 10px;"><input type="text" name="diachi" required style="width: 100%; padding: 8px;"></td>
        </tr>
        <tr>
            <td style="padding: 10px; font-weight: bold;">Mật khẩu</td>
            <td style="padding: 10px;"><input type="password" name="matkhau" required style="width: 100%; padding: 8px;"></td>
        </tr>
        <tr>
            <td colspan="2" style="padding: 10px; text-align: center;">
                <input type="submit" name="dangky" value="Đăng ký" required style="padding: 10px 20px;">
            </td>   
        </tr>
        <tr>
            <td colspan="2" style="padding: 10px; text-align: center;">
                <a href="index.php?quanly=dangnhap">Đăng nhập nếu đã có tài khoản</a>
            </td>
        </tr>
    </table>
</form>
