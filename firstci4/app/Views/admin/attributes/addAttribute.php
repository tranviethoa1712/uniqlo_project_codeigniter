<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Thêm danh mục</h3>
      </div>

      <form method="post" class="form-horizontal">
        <div class="card-body">
          <div class="form-group row">
            <label for="nameatt" class="col-sm-2 col-form-label">Tên</label>
            <div class="col-sm-10">
              <input type="text" name="name_attribute" id="nameatt" class="form-control" placeholder="Nhập tên thuộc tính">
            </div>
          </div>
          <div class="form-group row">
            <label for="codeadd" class="col-sm-2 col-form-label">Mã thuộc tính</label>
            <div class="col-sm-10">
              <input type="text" name="code_attribute" id="codeadd" class="form-control" placeholder="Nhập mã thuộc tính">
            </div>
          </div>
          <div class="form-group row">
            <label for="unitatt" class="col-sm-2 col-form-label">Unit</label>
            <div class="col-sm-10">
              <input type="text" name="unit_attribute" id="unitatt" class="form-control" placeholder="xs, s, m...">
            </div>
          </div>
        </div>

        <div class="card-footer">
          <input type="submit" name="addAttribute" class="btn btn-info" value="Thêm danh mục">
        </div>

      </form>
    </div>
  
    </div><!-- /.container-fluid -->
</section>

