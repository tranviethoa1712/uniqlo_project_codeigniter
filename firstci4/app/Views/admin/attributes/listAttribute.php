<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Danh sách thuộc tính</h3>
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
                  <th>Tên thuộc tính</th>
                  <th>Mã thuộc tính</th>
                  <th>Unit</th>
                  <th>Công cụ</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 0;
                if (count($attributes) > 0) {
                  foreach (($attributes) as $row) :
                    $i++;
                ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['name'] ?></td>
                      <td><?php echo $row['attribute_sku'] ?></td>
                      <td>
                        <?php
                        // $arrayUnit = explode(", ", $row['unit']);
                        // print_r($arrayUnit);
                        echo $row['unit']
                        ?>
                      </td>
                      <td>
                        <?php
                        $urlUpdateAtt = base_url('admin/updateAttribute/');
                        $urlDeleteAtt = base_url('admin/deleteAttribute/');
                        ?>
                        <a href="<?php echo $urlUpdateAtt . $row['attribute_id'] ?>">Sửa</a>
                        &nbsp; | &nbsp;
                        <a href="<?php echo $urlDeleteAtt . $row['attribute_id'] ?>">Xóa</a>
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