<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <table class="table table-bordered">
      <form method="post" class="form-inline">
        <?php foreach($data['order'] as $item) { ?>
        <tr>
          <td>Họ và tên</td>
          <td><input class="form-control" type="text" name="fullname" value="<?php echo $item['fullname'] ?>"></td>
        </tr>
        <tr>
          <td>Số điện thoại</td>
          <td><input class="form-control" type="text" name="address" value="<?php echo $item['address'] ?>"></td>
        </tr>
        <tr>
          <td>Địa chỉ</td>
          <td><input class="form-control" type="text" name="phone_number" value="<?php echo $item['phone_number'] ?>"></td>
        </tr>
        <tr>
          <td>Tổng tiền</td>
          <td><input class="form-control" type="text" name="total_price" value="<?php echo $item['total_price'] ?>"></td>
        </tr>
        <tr>
          <td>Trạng thái</td>
          <td><input class="form-control" type="text" name="status" value="<?php echo $item['status'] ?>"></td>
        </tr>
        <?php 
        }
        ?>
        <tr>
          <td colspan="2"><input class="btn btn-primary" type="submit" name="updateOrder" value="Cập nhật đơn hàng"></td>
        </tr>
      </form>
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
