<p style="text-align: center; font-size: 2.5em; font-weight: bold; color: #2c3e50; margin-bottom: 20px;">Thêm sản phẩm</p>
<table style="width: 100%; border-collapse: collapse; background-color: #f8f9fa; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
        <tr>
          <td style="padding: 15px; font-weight: bold;">Tên sản phẩm</td>
          <td style="padding: 15px;"><input type="text" name="tensanpham" style="width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 4px;"></td>
        </tr>
        <tr>
          <td style="padding: 15px; font-weight: bold;">Mã sản phẩm</td>
          <td style="padding: 15px;"><input type="text" name="masp" style="width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 4px;"></td>
        </tr>
        <tr>
          <td style="padding: 15px; font-weight: bold;">Giá sản phẩm</td>
          <td style="padding: 15px;"><input type="text" name="giasp" style="width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 4px;"></td>
        </tr>
        <tr>
          <td style="padding: 15px; font-weight: bold;">Số lượng</td>
          <td style="padding: 15px;"><input type="text" name="soluong" style="width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 4px;"></td>
        </tr>
        <tr>
          <td style="padding: 15px; font-weight: bold;">Hình ảnh sản phẩm</td>
          <td style="padding: 15px;"><input type="file" name="hinhanh" style="padding: 8px; border: 1px solid #ced4da; border-radius: 4px;"></td>
        </tr>
        <tr>
          <td style="padding: 15px; font-weight: bold;">Tóm tắt</td>
          <td style="padding: 15px;"><textarea name="tomtat" rows="10" style="resize: none; width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 4px;"></textarea></td>
        </tr>
        <tr>
          <td style="padding: 15px; font-weight: bold;">Nội dung</td>
          <td style="padding: 15px;"><textarea name="noidung" rows="10" style="resize: none; width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 4px;"></textarea></td>
        </tr>
        <tr>
          <td style="padding: 15px; font-weight: bold;">Danh mục sản phẩm</td>
          <td style="padding: 15px;">
            <select name="danhmuc" style="width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 4px;">
              <?php
                $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
              ?>
              <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
              <?php
                }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td style="padding: 15px; font-weight: bold;">Tình trạng</td>
          <td style="padding: 15px;">
            <select name="tinhtrang" style="width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 4px;">
              <option value="1">Kích hoạt</option>
              <option value="0">Ẩn</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="2" style="padding: 15px; text-align: center;">
            <input type="submit" name="themsanpham" value="Thêm sản phẩm" style="padding: 10px 20px; border: none; border-radius: 4px; background-color: #3498db; color: white; font-weight: bold; cursor: pointer;">
          </td>
        </tr>
    </form>
</table>
