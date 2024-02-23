<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <table class="table table-bordered">
      <form method="post" class="form-inline" enctype="multipart/form-data">
        <tr>
          <td>Danh mục</td>
          <td>
            <select class="form-control" name="category_id">
              <?php foreach($categories as $col){ ?>

                <option value="<?php echo $col['category_id'] ?>"><?php echo $col['title']." - ". $col['name'] . " - "?></option>

                  <?php 
                      }
                    ?>
            </select>
          </td>
        </tr>
        <?php foreach($product as $item) { ?>
        <tr>
          <td>Mã sản phẩm</td>
          <td><input class="form-control" type="text" name="code_product" value="<?php echo $item['sku'] ?>"></td>
        </tr>
        <tr>
          <td>Tiêu đề</td>
          <td><input class="form-control" type="text" name="title_product" value="<?php echo $item['title'] ?>"></td>
        </tr>
        <tr>
          <td>Giá</td>
          <td><input class="form-control" type="text" name="price_product" value="<?php echo $item['price'] ?>"></td>
        </tr>
        <tr>
          <td>Thumbnail</td>
          <td><input type="file" name="thumbnails[]" multiple></td>
        </tr>
        <tr>
          <td>Chi tiết sản phẩm</td>
          <td><input class="form-control" type="text" name="description_product" value="<?php echo $item['description'] ?>"></td>
        </tr>
        <tr>
          <td>Giới tính</td>
          <td>
            <div class="custom-control custom-radio">
              <input id="woman_gender" class="custom-control-input" type="radio" name="gender_product" value="woman" <?php if($item['gender'] == "woman") { echo " checked";} ?>>
              <label for="woman_gender" class="custom-control-label">Nữ</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="man_gender" class="custom-control-input" type="radio" name="gender_product" value="man" <?php if($item['gender'] == "man") { echo " checked";} ?>>          
              <label for="man_gender" class="custom-control-label">Nam</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="baby_gender" class="custom-control-input" type="radio" name="gender_product" value="baby" <?php if($item['gender'] == "baby") { echo " checked";} ?>>
              <label for="baby_gender" class="custom-control-label">Trẻ em</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="nonbaby_gender" class="custom-control-input" type="radio" name="gender_product" value="nonbaby" <?php if($item['gender'] == "nonbaby") { echo " checked";} ?>>
              <label for="nonbaby_gender" class="custom-control-label">Trẻ sơ sinh</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>Các ảnh nhỏ</td>
          <td><input type="file" name="images[]" multiple></td>
        </tr>
        <tr>
          <td>Trạng thái</td>
          <td><input class="form-control" type="text" name="status_product" placeholder="0 (chưa có sẵn) 1 (có sẵn)" value="<?php echo $item['status'] ?>"></td>
        </tr>
        <?php 
        }
        ?>
        <tr>
          <td colspan="2"><input class="btn btn-primary" type="submit" name="updateProduct" value="Thêm sản phẩm mới"></td>
        </tr>
      </form>
    </table>

  </div><!-- /.container-fluid -->
</section>
  <!-- /.content -->
  </div>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
