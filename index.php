<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2K Store</title>
    <link rel="stylesheet" href="css/stylezz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
</head>
<body>
    <div class="wrapper">
        <?php
        session_start();
            include("./admincp/config/config.php");
            include("./pages/header.php");
            include("./pages/slider.php");
            include("./pages/content.php");
            include("./pages/footer.php");
        ?>
    </div>
</body>
</html>