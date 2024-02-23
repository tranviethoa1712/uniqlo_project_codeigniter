<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <?= view('massages/massage') ?>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Danh sách khách hàng</h3>
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
                  <th>Tên người dùng</th>
                  <th>Email</th>
                  <th>Ngày sinh</th>
                  <th>Giới tính</th>
                  <th>Công cụ</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $urlUpdateString = base_url('admin/updateUser/');
                $urleDeleteString = base_url('admin/deleteUser/');
                $i = 0;
                if (count($users) > 0) {
                    foreach($users as $row):
                    $i++;
                ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['name'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['dob'] ?></td>
                      <td><?php echo $row['gender'] ?></td>
                      <td>
                        <a href="<?= $urlUpdateString . $row['customer_id'] ?>">Sửa</a>
                        &nbsp; | &nbsp;
                        <a data-url="<?= $urleDeleteString . $row['customer_id'] ?>" class="btn-del-confirm" onclick="delAlert(this)">Xoá</a>
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
<script src="<?php echo base_url('assets/admin/access/js/eventCustomers.js') ?>"></script>