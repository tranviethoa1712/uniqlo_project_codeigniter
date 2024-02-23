<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Thêm sản phẩm</h3>
      </div>

      <form method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="card-body">
          <div class="form-group row">
            <label for="idcategory" class="col-sm-2 col-form-label">Danh mục</label>
            <div class="col-sm-10">
              <select class="custom-select rounded-0" name="category_id" id="idcategory">
                <?php foreach ($categories as $col) { ?>
                  <option value="<?php echo $col['category_id'] ?>"><?php echo $col['title'] . " - " . $col['name'] . " - " ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="skuproduct" class="col-sm-2 col-form-label">Tên danh mục</label>
            <div class="col-sm-10">
              <input type="text" name="code_product" id="skuproduct" class="form-control" placeholder="Nhập mã sản phẩm">
            </div>
          </div>
          <div class="form-group row">
            <label for="titleproduct" class="col-sm-2 col-form-label">Tiêu đề</label>
            <div class="col-sm-10">
              <input type="text" name="title_product" id="titleproduct" class="form-control" placeholder="Nhập tiêu đề sản phẩm">
            </div>
          </div>
          <div class="form-group row">
            <label for="priceprd" class="col-sm-2 col-form-label">Giá</label>
            <div class="col-sm-10">
              <input type="text" name="price_product" id="priceprd" class="form-control" placeholder="Nhập giá sản phẩm">
            </div>
          </div>
          <div class="form-group row">
            <label for="thumbnail" class="col-sm-2">Thumbnail</label>
            <div class="input-group col-sm-10">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="thumbnail" name="thumbnails[]" multiple>
                <label class="custom-file-label" for="thumbnail">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="detailprd" class="col-sm-2 col-form-label">Chi tiết sản phẩm</label>
            <div class="col-sm-10">
              <input type="text" name="description_product" id="detailprd" class="form-control" placeholder="Nhập chi tiết sản phẩm">
            </div>
          </div>
          <div class="form-group row">
            <h5 class="col-sm-2">Giới tính</h4>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" id="woman_gender" type="radio" name="gender_product" value="woman">
                <label class="woman_gender">Nữ</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" id="man_gender" type="radio" name="gender_product" value="man">
                <label class="man_gender">Nam</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" id="baby_gender" type="radio" name="gender_product" value="baby">
                <label class="baby_gender">Trẻ em</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" id="nonbaby_gender" type="radio" name="gender_product" value="nonbaby">
                <label class="nonbaby_gender">Trẻ em</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="images" class="col-sm-2">Images</label>
            <div class="input-group col-sm-10">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="images" name="images[]" multiple>
                <label class="custom-file-label" for="images">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="statusprd" class="col-sm-2 col-form-label">Trạng thái</label>
            <div class="col-sm-10">
              <input type="text" name="status_product" id="statusprd" class="form-control" placeholder="Nhập trạng thái sản phẩm">
            </div>
          </div>
        </div>

        <div class="card-footer">
          <input type="submit" name="addProduct" class="btn btn-info" value="Thêm sản phẩm">
        </div>

      </form>
    </div>

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

