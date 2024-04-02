<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <table class="table table-bordered">
      <thead>
        <tr>
          <th width="5%">STT</th>
          <th>ID Chi Tiết Đơn Hàng</th>
          <th>ID Đơn Hàng</th>
          <th>ID Sản Phẩm</th>
          <th>Tên Sản Phẩm</th>
          <th>Giá</th>
          <th>Số Lượng</th>
          <th>Tổng tiền</th>
          <th>Trạng thái</th>
          <th>Tool</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 0;
        if(count($detailOrder) > 0) {
          foreach($detailOrder as $row):
            $i++;
        ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $row['order_item_id'] ?></td>
          <td><?php echo $row['order_id'] ?></td>
          <td><?php echo $row['product_id'] ?></td>
          <td><?php echo $row['title'] ?></td>
          <td><?php echo $row['price'] ?></td>
          <td><?php echo $row['quantity'] ?></td>
          <td><?php echo $row['total_money'] ?></td>
          <td>
          <?php 
            if($row['status'] == 0) {
            echo "Chờ xác nhận";
            } elseif($row['status'] == 1) {
            echo "Vận chuyển";
            } elseif($row['status'] == 2) {
            echo "Đang giao hàng";
            } elseif($row['status'] == 3) {
            echo "Hoàn thành";
            }
          ?>
          </td>
          <td>
            <a href="<?= base_url() ?>admin/UpdateOrderItemStatus/<?= $row['order_item_id'] ?>/0"><button class="btn btn-primary">Chờ xác nhận</button></a>
            <a href="<?= base_url() ?>admin/UpdateOrderItemStatus/<?= $row['order_item_id'] ?>/1"><button class="btn btn-danger">Vận chuyển</button></a>
            <a href="<?= base_url() ?>admin/UpdateOrderItemStatus/<?= $row['order_item_id'] ?>/2"><button class="btn btn-warning">Đang giao hàng</button></a>
            <a href="<?= base_url() ?>admin/UpdateOrderItemStatus/<?= $row['order_item_id'] ?>/3"><button class="btn btn-success">Hoàn thành</button></a>
          </td>
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
