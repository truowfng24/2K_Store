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
                    include("content/category.php");
                }
                elseif($tam == 'giohang'){
                    include("content/giohang.php");
                }
                elseif($tam == 'lienhe'){
                    include("content/lienhe.php");
                }
                elseif($tam == 'sanpham'){
                    include("content/product.php");
                }
                else{
                    include("content/index.php");
                }
            ?>
        </div>
</div>