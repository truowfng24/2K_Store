<?php
    session_start();
    include('config/config.php');
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['username'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_admin WHERE username = '".$taikhoan."' AND password = '".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $_SESSION['dangnhap'] = $taikhoan;
            header('Location:index.php');
        }else{
            echo "<script>alert('Sai thông tin');</script>";       
            // header('Location:login.php');
        }
    }
?>

    <style>
body {
    font-family: Arial, sans-serif;
    background-image: url('../images/banner/banner.jpg'); /* Replace with your image path */
    background-size: cover; /* This will cover the entire viewport */
    background-position: center; /* Center the image */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    color: white; /* Optional: Change text color to white for better contrast */
}

.wrapper-login {
    background-color: #222; /* Màu nền không trong suốt */
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    width: 350px;
    text-align: center;
}

h3 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #ff6600;
}

table {
    width: 100%;
}

td {
    padding: 12px; /* Khoảng cách nhiều hơn */
}

td label {
    font-size: 18px; /* Kích thước chữ lớn hơn */
    color: #ff6600; /* Màu chữ cam */
    font-weight: bold; /* In đậm chữ */
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ff6600;
    border-radius: 5px;
    box-sizing: border-box;
    transition: border-color 0.3s;
    background-color: #222;
    color: white;
}

input[type="text"]:focus,
input[type="password"]:focus {
    border-color: #ff6600;
    outline: none;
}

input[type="submit"] {
    background-color: #ff6600;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%; /* Để nút rộng ra 100% */
    font-size: 16px;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #e65c00; /* Đổi màu nền khi hover */
}
    </style>
</head>
<body>
<div class="wrapper-login">
    <form action="" autocapitalize="off" method="POST">
        <table>
            <h3>Đăng nhập Admin</h3>
            <tr>
                <td><label for="username">Tài khoản</label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="password">Mật khẩu</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="dangnhap" value="Đăng nhập">
                </td>
            </tr>
        </table>
    </form>
</div>
