<p style="text-align: center; font-size: 2.5em; font-weight: bold; color: #2c3e50; margin-bottom: 20px;">Sửa sản phẩm</p>
<?php
  $sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
  $query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>
<table style="width: 100%; border-collapse: collapse; background-color: #f8f9fa; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
  <?php
    while($row = mysqli_fetch_array($query_sua_sp)){
  ?>
    <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $_GET['idsanpham']?>" enctype="multipart/form-data">
        <tr>
          <td style="padding: 15px; font-weight: bold;">Tên sản phẩm</td>
          <td style="padding: 15px;"><input type="text" value="<?php echo $row['tensanpham']?>" name="tensanpham" style="width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 4px;"></td>
        </tr>
        <tr>
          <td style="padding: 15px; font-weight: bold;">Mã sản phẩm</td>
          <td style="padding: 15px;"><input type="text" value="<?php echo $row['masp']?>" name="masp" style="width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 4px;"></td>
        </tr>
        <tr>
          <td style="padding: 15px; font-weight: bold;">Giá sản phẩm</td>
          <td style="padding: 15px;"><input type="text" value="<?php echo $row['giasp']?>" name="giasp" style="width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 4px;"></td>
        </tr>
        <tr>
          <td style="padding: 15px; font-weight: bold;">Số lượng</td>
          <td style="padding: 15px;"><input type="text" value="<?php echo $row['soluong']?>" name="soluong" style="width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 4px;"></td>
        </tr>
        <tr>
          <td style="padding: 15px; font-weight: bold;">Hình ảnh sản phẩm</td>
          <td style="padding: 15px;">
            <input type="file" name="hinhanh" style="padding: 8px; border: 1px solid #ced4da; border-radius: 4px;">
            <br>
            <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width="150px" style="margin-top: 10px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
          </td>
        </tr>
        <tr>
          <td style="padding: 15px; font-weight: bold;">Tóm tắt</td>
          <td style="padding: 15px;"><textarea name="tomtat" rows="10" style="resize: none; width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 4px;"><?php echo $row['tomtat']?></textarea></td>
        </tr>
        <tr>
          <td style="padding: 15px; font-weight: bold;">Nội dung</td>
          <td style="padding: 15px;"><textarea name="noidung" rows="10" style="resize: none; width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 4px;"><?php echo $row['noidung']?></textarea></td>
        </tr>
        <tr>
          <td style="padding: 15px; font-weight: bold;">Danh mục sản phẩm</td>
          <td style="padding: 15px;">
            <select name="danhmuc" style="width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 4px;">
              <?php
                $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                  if($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']){
              ?>
              <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
              <?php
                  } else{
              ?>
                <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
              <?php
                } 
                }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td style="padding: 15px; font-weight: bold;">Tình trạng</td>
          <td style="padding: 15px;">
            <select name="tinhtrang" style="width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 4px;">
              <?php
                if($row['tinhtrang'] == 1){
              ?>
              <option value="1" selected>Kích hoạt</option>
              <option value="0">Ẩn</option>
              <?php
                }else{
              ?>
              <option value="1">Kích hoạt</option>
              <option value="0" selected>Ẩn</option>
              <?php
                }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="2" style="padding: 15px; text-align: center;"><input type="submit" name="suasanpham" value="Sửa sản phẩm" style="padding: 10px 20px; border: none; border-radius: 4px; background-color: #3498db; color: white; font-weight: bold; cursor: pointer;"></td>
        </tr>
    </form>
  <?php
    }
  ?>
</table>
