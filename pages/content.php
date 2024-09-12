<div class="content">
<div class="category">
    <?php
    if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            }
            else{
                $tam = '';
            }

            if($tam == 'danhmucsanpham'){
                include("./pages/category/category.php");
            }
    ?>
</div>
    <div class="product">
        <?php
             if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            }
            else{
                $tam = '';
            }

            if($tam == 'danhmucsanpham'){
                include("product/nike.php");
            }
            elseif($tam == 'giohang'){
                include("content/giohang.php");
            }
            elseif($tam == 'lienhe'){
                include("content/lienhe.php");
            }
            else{
                include("product/nike.php");
            }
        ?>
    </div>
</div>