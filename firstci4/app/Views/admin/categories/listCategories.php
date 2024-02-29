<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Danh sách danh mục</h3>
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="card-body table-responsive p-0">
            <table class="table table-bordered table-hover dataTable dtr-inline" id="example2" aria-describedby="example2_info">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tiêu Đề</th>
                  <th>Danh mục</th>
                  <th>Công cụ</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $urlUpdateString = base_url('admin/updateCategory/');
                $urleDeleteString = base_url('admin/deleteCategory/');
                $i = 0;
                if (count($categories) > 0) {
                  foreach ($categories as $row) :
                    $i++;
                ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['title'] ?></td>
                      <td><?php echo $row['name'] ?></td>
                      <td>
                        <a href="<?php echo $urlUpdateString . $row['category_id'] ?>">Sửa</a>
                        &nbsp; | &nbsp;
                        <a href="<?php echo $urleDeleteString . $row['category_id'] ?>">Xóa</a>
                      </td>
                    </tr>
                <?php
                  endforeach;
                } else {
                  echo "<h1>" . "Danh mục rỗng" . "</h1>";
                }
                ?>
              </tbody>
            </table>
          </div>

        </div>

      </div>
    </div>
    <div class="row">
      <?= $pager->links('default', 'custom_pagination') ?>
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