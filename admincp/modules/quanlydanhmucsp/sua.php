<p style="text-align: center; font-size: 1.8em; font-weight: bold; color: #2c3e50; margin-bottom: 20px;">Sửa danh mục</p>
<?php
  $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc = '$_GET[iddanhmuc]' LIMIT 1";
  $query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>
<table border="0" style="width: 50%; margin: 0 auto; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border-radius: 8px; overflow: hidden;">
    <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>" style="padding: 20px;">
        <?php
        while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
        ?>
        <tr>
          <td style="padding: 15px; font-weight: bold; color: #2c3e50;">Tên danh mục</td>
          <td style="padding: 15px;"><input type="text" value="<?php echo $dong['tendanhmuc']?>" name="tendanhmuc" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #dcdcdc; font-size: 1em; box-sizing: border-box;"></td>
        </tr>
        
        <tr>
          <td colspan="2" style="text-align: center; padding: 20px;">
            <input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm" style="padding: 12px 25px; background-color: #27ae60; color: white; border: none; border-radius: 5px; font-size: 1.1em; cursor: pointer; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s ease;">
          </td>
        </tr>
        <?php
        }
        ?>
    </form>
</table>
