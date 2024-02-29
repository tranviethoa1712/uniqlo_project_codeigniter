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
                  <th>Tên sản phẩm</th>
                  <th>Mã sẩn phẩm</th>
                  <th>Tên thuộc Tính</th>
                  <th>Mã thuộc tính</th>
                  <th>Unit</th>
                  <th>Giới tính</th>
                  <th>Tools</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 0;
                if (count($productAttribute['result']) > 0) {
                  foreach ($productAttribute['result'] as $row) :
                    $i++;
                ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['title'] ?></td>
                      <td><?php echo $row['sku'] ?></td>
                      <td><?php echo $row['name'] ?></td>
                      <td><?php echo $row['attribute_sku'] ?></td>
                      <td><?php echo $row['unit'] ?></td>
                      <td><?php echo $row['gender'] ?></td>
                      <?php
                      $urlUpdate = base_url('admin/updatePalink/');
                      $urlDelete = base_url('admin/deletePalink/');
                      ?>
                      <td><a href="<?php echo $urlUpdate . $row['id'] ?>">Sửa</a>
                        &nbsp; | &nbsp;
                        <a href="<?php echo $urlDelete . $row['id'] ?>">Xóa</a>
                      </td>
                    </tr>
                <?php
                  endforeach;
                }
                ?>
              </tbody>
            </table>
          </div>

        </div>

      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 col-md-5">
        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
      </div>
      <div class="col-sm-12 col-md-7">
        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
          <ul class="pagination">
            <?php if ($page > '1') : ?>
              <li class="paginate_button page-item previous" id="example2_previous">
                <?php $previous = $page - 1 ?>
                <a href="<?= base_url('admin/showPalink') . '?page=' . $previous ?>" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
              </li>
            <?php endif; ?>

            <?php
            for ($pageIndex = 1; $pageIndex <= $productAttribute['numberOfPage']; $pageIndex++) {
            ?>
              <li class="paginate_button page-item <?= $pageIndex == $page ? " active" : "" ?>">
                <?php
                echo '<a  href = "' . base_url('admin/showPalink') . '?page=' . $pageIndex . '" aria-controls="example2" data-dt-idx="' . $pageIndex . '" tabindex="0" class="page-link">' . $pageIndex . ' </a>';
                ?>
              </li>
            <?php
            }
            ?>

            <?php if ($page < $productAttribute['numberOfPage']) : ?>
              <li class="paginate_button page-item next" id="example2_next">
                <?php $next =  $page + 1; ?>
                <a href="<?= base_url('admin/showPalink') . '?page=' . $next ?>" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
              </li>
            <?php endif; ?>

          </ul>
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>