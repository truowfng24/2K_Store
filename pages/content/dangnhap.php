<?php

if(isset($_POST['dangnhap'])){
    $email = $_POST['email'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM tbl_dangky WHERE email = '".$email."' AND matkhau = '".$matkhau."' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if($count > 0){
        $row_data = mysqli_fetch_array($row);
        $_SESSION['dangky'] = $row_data['tenkhachhang']; // Use $row_data here
        header('Location:index.php?quanly=giohang');
    } else {
        echo "<script>alert('Sai thông tin');</script>";       
        // header('Location:login.php');
    }
}
?>
<form action="" autocapitalize="off" method="POST">
        <table style="width: 100%; border-collapse: collapse;">
        <h2 style="text-align: center;">Đăng nhập</h2>
            <tr>
                <td style="padding: 10px; font-weight: bold;">Email</td>
                <td style="padding: 10px;"><input type="text" name="email" id="username" style="width: 100%; padding: 8px;"></td>
            </tr>
            <tr>
                <td style="padding: 10px; font-weight: bold;">Mật khẩu</td>
                <td style="padding: 10px;"><input type="password" name="password" id="password" style="width: 100%; padding: 8px;"></td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 10px; text-align: center;">
                    <input type="submit" name="dangnhap" value="Đăng nhập">
                </td>
            </tr>
        </table>
    </form>