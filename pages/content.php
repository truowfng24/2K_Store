<div class="content">
<div class="category">
    <?php
        include("./pages/category/category.php"); 
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
                include("product/trend.php");
            }
            elseif($tam == 'giohang'){
                include("content/giohang.php");
            }
            elseif($tam == 'lienhe'){
                include("content/lienhe.php");
            }
            elseif($tam == 'nike'){
                include("product/nike.php");
            }
            elseif($tam == 'adidas'){
                include("product/adidas.php");
            }
            elseif($tam == 'converse'){
                include("product/converse.php");
            }
            elseif($tam == 'tat'){
                include("product/tat.php");
            }
            elseif($tam == 'dep'){
                include("product/dep.php");
            }
            else{
                include("product/trend.php");
            }
        ?>
    </div>
</div>