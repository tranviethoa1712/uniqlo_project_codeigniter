<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Liên kết thuộc tính sản phẩm</h3>
      </div>

      <div class="card-body">
      <form method="post" class="form-horizontal">
        <div class="form-group">
          <label for="idsanpham">ID Sản Phẩm</label>
          <select class="custom-select rounded-0" name="product_id" id="idsanpham">
            <?php foreach ($products as $item) : ?>
              <option value="<?php echo $item['product_id'] ?>"><?php echo $item['title'] . " (Mã sản phẩm: " . $item['sku'] . ";   Giới tính: " . $item['gender'] . "; ID: " . $item['product_id'] . ");" ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="idatt">ID Thuộc Tính</label>
          <select class="custom-select rounded-0" name="attribute_id" id="idatt">
            <?php foreach ($attributes as $item) :?>
              <option value="<?php echo $item['attribute_id'] ?>"><?php echo $item['name'] . " (Mã thuộc tính: " . $item['attribute_sku'] . ";   Unit: " . $item['unit'] . ")" ?></option>
              <?php endforeach; ?>
          </select>
        </div>
          <div class="form-group">
          <input class="btn btn-primary" type="submit" name="addProductAttribute" value="Thêm thuộc tính mới">
        </div>
      </div>
      </form>
    </div>
  </div><!-- /.container-fluid -->
</section>

