
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Thêm danh mục</h3>
      </div> 
      <form action="<?php echo base_url('admin/addCategoryView') ?>" method="post" class="form-horizontal">
        <div class="card-body">
          <div class="form-group row">
            <label for="titlecate" class="col-sm-2 col-form-label">Tiêu đề</label>
            <div class="col-sm-10">
              <input type="text" name="title_category" id="titlecate" class="form-control" placeholder="Nhập tiêu đề danh mục">
            </div>
          </div>
          <div class="form-group row">
            <label for="namecate" class="col-sm-2 col-form-label">Tên danh mục</label>
            <div class="col-sm-10">
              <input type="text" name="name_category" id="namecate" class="form-control" placeholder="Nhập tên danh mục">
            </div>
          </div>
        </div>

        <div class="card-footer">
          <input type="submit" name="addCategory" class="btn btn-info" value="Thêm danh mục">
        </div>

      </form>
      <!-- </form>
    </div>
  </div> -->
  <!-- /.container-fluid -->
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


