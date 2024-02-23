<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <table>
            <form method="post" action="<?php echo base_url('admin/updateCategory') ?>" class="form-inline">
                <?php
                foreach ($category as $row) {
                ?>
                    <tr>
                        <td>Tiêu đề</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['title'] ?>" name="title_update"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Tên danh mục</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['name'] ?>" name="name_update"></td>
                        <td><input type="hidden" class="form-control" value="<?php echo $iddanhmuc ?>" name="id_update"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="btn btn-primary" name="updateCategory" value="Sửa danh mục"></td>
                    </tr>
                <?php
                }
                ?>
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
