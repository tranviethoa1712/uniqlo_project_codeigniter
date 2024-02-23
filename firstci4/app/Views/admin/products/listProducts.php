<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12">
        <form action="" method="post">
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Gender Data Filter</h3>
            </div>
            <div class="card-body">

              <div class="form-group">
                <?php
                $checked = [];
                if (isset($_POST['containerInputFilter'])) {
                  $checked = $_POST['containerInputFilter'];
                }
                ?>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="containerInputFilter[]" value="<?php echo "woman" ?>" 
                  <?php if (in_array('woman', $checked)) {
                      echo "checked";
                  } 
                  ?> 
                  />
                  <label class="form-check-label"><?php echo "Nữ"; ?></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="containerInputFilter[]" value="<?php echo "man" ?>" 
                  <?php if (in_array('man', $checked)) {
                      echo "checked";
                  } ?> 
                  />
                  <label class="form-check-label"><?php echo "Nam"; ?></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="containerInputFilter[]" value="<?php echo "baby" ?>" 
                  <?php if (in_array('baby', $checked)) {
                    echo "checked";
                  } 
                  ?> 
                  />
                  <label class="form-check-label"><?php echo "Trẻ em"; ?></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="containerInputFilter[]" value="<?php echo "nonbaby" ?>" 
                  <?php if (in_array('nonbaby', $checked)) {
                            echo "checked";
                  } 
                  ?> 
                  />
                  <label class="form-check-label"><?php echo "Trẻ sơ sinh"; ?></label>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="row justify-content-center">
                <div class="col-md-5">
                  <input type="submit" name="filterSubmit" class="btn btn-block btn-info btn-lg" value="Search">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

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
                  <th>STT</th>
                  <th>ID Danh Mục</th>
                  <th>Thumbnail</th>
                  <th>Mã sản phẩm</th>
                  <th>Tiêu đề</th>
                  <th>Giá</th>
                  <th>Miêu tả</th>
                  <th>Giới tính</th>
                  <th>Đã tạo</th>
                  <th>Đã cập nhật</th>
                  <th>Trạng thái</th>
                  <th>Tools</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (isset($_POST['container'])) {
                  $i = 0;
                  // var_dump((object)$data['filterProducts']['resultPaginationFilter']);
                  foreach ((object)$filterProducts['resultPaginationFilter'] as $key => $row) {
                    $i++
                ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['1'] ?></td>
                      <td>
                        <?php
                        $dataThumbnail = (array)json_decode($row['5']);
                        foreach ($dataThumbnail as $key => $value) {
                          if (is_array($value) || is_object($value)) {
                            foreach ($value as $item) {
                              if ($key == "name") {
                                echo "<img src='views/uploads/" . $item . "' height='100px' width='100px'>";
                              }
                            }
                          }
                        }
                        ?>
                      </td>
                      <td><?php echo $row['2'] ?></td>
                      <td><?php echo $row['3'] ?></td>
                      <td><?php echo number_format($row['4'], 0, ',', '.') . ' VND'; ?></td>
                      <td><?php echo $row['6'] ?></td>
                      <td><?php echo $row['8'] ?></td>
                      <td><?php echo $row['9'] ?></td>
                      <td><?php echo $row['10'] ?></td>
                      <td>
                        <?php
                        if ($row['11'] == "1") {
                          echo "Sẵn có";
                        } else {
                          echo "Hết hàng";
                        }
                        $urlUpdateString = base_url('admin/updateProduct/');
                        $urlDeleteString = base_url('admin/deleteProduct/');
                        ?>
                      </td>
                      <td><a href="<?php echo $urlUpdateString . $row['product_id'] ?>">Sửa</a>
                        &nbsp; | &nbsp;
                        <a href="<?php echo $urlDeleteString . $row['product_id'] ?>">Xóa</a>
                      </td>
                    </tr>

                  <?php

                  }
                  ?>
                  <?php
                } else {
                  $i = 0;
                  if (count($pagination['result']) > 0) {
                    foreach($pagination['result'] as $row):
                      $i++;
                  ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['category_id'] ?></td>
                        <td>
                          <?php
                          $dataThumbnail = (array)json_decode($row['thumbnail']);
                          foreach ($dataThumbnail as $key => $value) {
                            if (is_array($value) || is_object($value)) {
                              foreach ($value as $item) {
                                if ($key == "name") {
                                  echo "<img src='views/uploads/" . $item . "' height='100px' width='100px'>";
                                }
                              }
                            }
                          }

                          ?>

                        </td>
                        <td><?php echo $row['sku'] ?></td>
                        <td><?php echo $row['title'] ?></td>
                        <td><?php echo number_format($row['price'], 0, ',', '.') . ' VND'; ?></td>
                        <td><?php echo $row['description'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td><?php echo $row['created_at'] ?></td>
                        <td><?php echo $row['updated_at'] ?></td>
                        <td>
                          <?php
                          if ($row['status'] == "1") {
                            echo "Sẵn có";
                          } else {
                            echo "Hết hàng";
                          }
                          ?>

                        </td>
                        <?php
                        $urlUpdateString = base_url('admin/updateProduct/');
                        $urlDeleteString = base_url('admin/deleteProduct/');        
                        ?>

                        <td><a href="<?php echo $urlUpdateString . $row['product_id'] ?>">Sửa</a>
                          &nbsp; | &nbsp;
                          <a href="<?php echo $urlDeleteString . $row['product_id'] ?>">Xóa</a>
                        </td>
                      </tr>
                    <?php
                    endforeach;
                    ?>
                  <?php
                  } else {
                    echo "<h1>" . "Danh mục rỗng" . "</h1>";
                  }
                  ?>


                <?php
                }
                ?>
              </tbody>
            </table>
            <?php
            if (isset($_POST['container'])) {
            ?>
              <div class="row">
                <div class="col-sm-12 col-md-5">
                  <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10</div>
                </div>
                <div class="col-sm-12 col-md-7">
                  <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                    <ul class="pagination">
                      <li class="paginate_button page-item previous" id="example2_previous">
                        <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                      </li>
                      <!-- <li class="paginate_button page-item active">
                          <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                        </li> -->
                      <?php
                      for ($page = 1; $page <= $filterProducts['numberOfPageFilter']; $page++) {
                      ?>
                        <li class="paginate_button page-item ">
                          <?php
                          $urlShowProductsPageString = base_url('admin/showProducts?page=');
                          echo '<a  href = "' . $urlShowProductsPageString . $page . '" aria-controls="example2" data-dt-idx="' . $page . '" tabindex="0" class="page-link">' . $page . ' </a>';
                          ?>
                        </li>
                      <?php
                      }
                      ?>
                      <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                    </ul>
                  </div>
                </div>
              </div> 
              <?php
              } else {
                ?>
              <div class="row">
                <div class="col-sm-12 col-md-5">
                  <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 </div>
                </div>
                <div class="col-sm-12 col-md-7">
                  <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                    <ul class="pagination">
                      <li class="paginate_button page-item previous" id="example2_previous">
                        <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                      </li>
                      <!-- <li class="paginate_button page-item active">
                          <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                        </li> -->
                      <?php
                      for ($page = 1; $page <= $pagination['numberOfPage']; $page++) {
                      ?>
                        <li class="paginate_button page-item ">
                          <?php
                          $urlShowProductsPageString = base_url('admin/showProducts?page=');
                          echo '<a  href = "' . $urlShowProductsPageString . $page . '" aria-controls="example2" data-dt-idx="' . $page . '" tabindex="0" class="page-link">' . $page . ' </a>';
                          ?>
                        </li>
                      <?php
                      }
                      ?>
                      <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            <?php
                    }
            ?>
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
