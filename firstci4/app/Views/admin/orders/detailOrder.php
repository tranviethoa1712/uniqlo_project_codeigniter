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
