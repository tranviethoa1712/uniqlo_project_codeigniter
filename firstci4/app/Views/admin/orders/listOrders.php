<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Danh sách sản phẩm</h3>
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
                  <th width="5%">STT</th>
                  <th>ID Đơn hàng</th>
                  <th>ID Khách Hàng</th>
                  <th>Tên Khách Hàng</th>
                  <th>Địa chỉ</th>
                  <th>Số điện thoại</th>
                  <th>Tổng tiền</th>
                  <th>Thời gian đặt hàng</th>
                  <th width="6%">Sửa</th>
                  <th width="6%">Xóa</th>
                  <th width="6%">Chi tiết đơn hàng</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 0;
                if (count($orders) > 0) {
                  foreach ($orders as $row) :
                    $i++;
                ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['order_id'] ?></td>
                      <td><?php echo $row['customer_id'] ?></td>
                      <td><?php echo $row['fullname'] ?></td>
                      <td><?php echo $row['address'] ?></td>
                      <td><?php echo $row['phone_number'] ?></td>
                      <td><?php echo $row['total_price'] ?></td>
                      <td><?php echo $row['order_date'] ?></td>
                      <?php
                      $urlUpdate = base_url('admin/updateOrder');
                      $urlDelete = base_url('admin/deleteOrder');
                      $urlDetailOrders = base_url('admin/showOrderDetail');
                      ?>
                      <td><a href="<?php echo $urlUpdate . '/' . $row['order_id'] ?>">Sửa</a></td>
                      <td><a href="<?php echo $urlDelete . '/' . $row['order_id'] ?>">Xóa</a></td>
                      <td><a href="<?php echo $urlDetailOrders . '/' . $row['order_id'] ?>">Xem</a></td>
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
        <div class="row">
          <?= $pager->links('default', 'custom_pagination') ?>
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