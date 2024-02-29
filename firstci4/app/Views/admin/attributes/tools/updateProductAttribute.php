<!-- Main content -->
<section class="content">
  <div class="container-fluid">

  <table class="table table-bordered">
      <form method="post" action="<?= base_url('admin/doUpdateProductAttribute') ?>" class="form-inline">
        <?= view('massages/massage') ?>
        <input type="hidden" class="form-control" value="<?php echo $id ?>" name="id">
        <tr>
          <td>ID Sản Phẩm</td>
          <td>
            <select class="form-control" name="product_id">
              <?php foreach($products as $item): ?>
                
                <option value="<?php echo $item['product_id'] ?>"
                <?php
                foreach($productAttributeId as $each) {
                    if($each['product_id'] == $item['product_id']) {
                        echo " selected";
                    }
                }
                ?>
                ><?php echo $item['title']." (Mã sản phẩm: ". $item['sku'] . ";   Giới tính: ". $item['gender'] . ")" ?></option>
                
              <?php endforeach; ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>ID Thuộc Tính</td>
          <td>
            <select class="form-control" name="attribute_id">
              <?php foreach($attributes as $item){ ?>

                <option value="<?php echo $item['attribute_id'] ?>"
                <?php
                foreach($productAttributeId as $each) {
                    if($each['attribute_id'] == $item['attribute_id']) {
                        echo " selected";
                    }
                }
                ?>
                ><?php echo $item['name']." (Mã thuộc tính: ". $item['attribute_sku'] . ";   Unit: ". $item['unit'] . ")" ?></option>

              <?php } ?>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="2"><input class="btn btn-primary" type="submit" name="updateProductAttribute" value="Sửa thuộc tính"></td>
        </tr>
      </form>
    </table>

    </div><!-- /.container-fluid -->
</section>

