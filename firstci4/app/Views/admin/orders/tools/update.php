<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <table class="table table-bordered">
      <form method="post" action="<?= base_url('admin/doUpdateOrder') ?>" class="form-inline">
        <?= view('massages/massage') ?>
        <?php foreach($order as $item) { ?>
        <tr>
          <td>Họ và tên</td>
          <td><input class="form-control" type="text" name="fullname" value="<?= $item['fullname'] ?>"></td>
        </tr>
        <tr>
          <td>Số điện thoại</td>
          <td><input class="form-control" type="text" name="address" value="<?= $item['address'] ?>"></td>
        </tr>
        <tr>
          <td>Địa chỉ</td>
          <td><input class="form-control" type="text" name="phone_number" value="<?= $item['phone_number'] ?>"></td>
        </tr>
        <tr>
          <td>Trạng thái</td>
          <td><input class="form-control" type="text" name="status" value="<?= $item['status'] ?>"></td>
          <input hidden class="form-control" type="text" name="order_id" value="<?= $order_id ?>">
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
