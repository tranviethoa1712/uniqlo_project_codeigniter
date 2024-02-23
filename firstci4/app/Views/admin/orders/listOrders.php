<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <table class="table table-bordered">
      <thead>
        <tr>
          <th width="5%">STT</th>
          <th>ID Đơn hàng</th>
          <th>ID Khách Hàng</th>
          <th>Tên Khách Hàng</th>
          <th>Địa chỉ</th>
          <th>Số điện thoại</th>
          <th>Tổng tiền</th>
          <th>Trạng thái</th>
          <th>Thời gian đặt hàng</th>
          <th width="6%">Sửa</th>
          <th width="6%">Xóa</th>
          <th width="6%">Chi tiết đơn hàng</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 0;
        if(count($orders) > 0) {
          foreach($orders as $row):
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
          <td><?php echo $row['status'] ?></td>
          <td><?php echo $row['created_at'] ?></td>
          <?php
          $urlUpdate = base_url('admin/updateOrder');
          $urlDelete = base_url('admin/deleteOrder');
          $urlDetailOrders = base_url('admin/showOrderDetail');
          ?> 
          <td><a href="<?php echo $urlUpdate . $row['order_id'] ?>">Sửa</a></td>
          <td><a href="<?php echo $urlDelete . $row['order_id'] ?>">Xóa</a></td>
          <td><a href="<?php echo $urlDetailOrders . $row['order_id'] ?>">Xem</a></td>
        </tr>
        <?php
          endforeach;
        } else {
          echo "<h1>". "Danh mục rỗng" ."</h1>";
        }
        ?>
      </tbody>
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

