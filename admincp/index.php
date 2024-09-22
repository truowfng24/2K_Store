<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admincp</title>
    <style>
            /* Tổng thể */
body, html {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif; /* Sử dụng font chữ hiện đại */
    background-color: #f5f7fa;
}

.wrapper {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    background-color: #fff;
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    padding-bottom: 20px; /* Thêm khoảng cách với footer */
}

/* Header */
.header {
    background: linear-gradient(135deg, #2c3e50, #4ca1af);
    color: white;
    text-align: center;
    padding: 30px 0;
    font-size: 1.8em;
    letter-spacing: 2px;
    text-transform: uppercase;
    font-weight: bold;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}


/* Menu */
.menu {
    background-color: #34495e;
    padding: 15px 0;
}

.menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: center;
}

.menu ul li {
    display: inline-block;
    margin: 0 30px;
}

.menu ul li a {
    color: white;
    text-decoration: none;
    font-size: 1.2em;
    padding: 12px 20px;
    display: inline-block;
    transition: all 0.3s ease;
    border-radius: 30px; /* Bo góc mềm mại */
}

.menu ul li a:hover {
    background-color: #1abc9c;
    transform: scale(1.1); /* Hiệu ứng phóng to khi hover */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
}

/* Main Content */
.main {
    padding: 30px;
    min-height: 400px;
    background-color: #ecf0f1;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.05);
    margin: 20px;
    text-align: center;
}

.main p {
    font-size: 1.4em;
    color: #333;
    font-weight: 300;
    text-align: center;
}

/* Footer */
.footer {
    background-color: #2c3e50;
    color: white;
    text-align: center;
    padding: 15px 0;
    font-size: 1.1em;
    letter-spacing: 1px;
}

.footer p {
    margin: 0;
}

/* Hiệu ứng nút trong Main */
.main .button {
    background-color: #3498db;
    color: white;
    padding: 10px 25px;
    border: none;
    font-size: 1.1em;
    border-radius: 30px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.main .button:hover {
    background-color: #2980b9;
    transform: translateY(-3px); /* Hiệu ứng nhấn nút */
}
    </style>
</head>
<body>
    <div class="wrapper">
        <h2 style="text-align: center;">WELLCOME TO ADMINCP</h2>
        <?php
            include("config/config.php");
            include("modules/header.php");
            include("modules/menu.php");
            include("modules/main.php");
            include("modules/footer.php");
        ?> 
    </div>
</body>
</html>