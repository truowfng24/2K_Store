<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleadmincp.css">
    <title>admincp</title>
</head>
<body>
    <div class="wrapper">
        <h2>WELLCOME TO ADMINCP</h2>
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