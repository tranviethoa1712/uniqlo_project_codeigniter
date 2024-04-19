<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12">
        <form action="<?= site_url('admin/showProducts') ?>" method="post">
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Gender Data Filter</h3>
            </div>
            <div class="card-body">

              <div class="form-group">
                <?php
                $checked = [];
                if (isset($containerInputFilter)) {
                  $checked = $containerInputFilter;
                }
                ?>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="containerInputFilter[]" value="<?php echo "woman" ?>" <?php if (in_array('woman', $checked)) {
                                                                                                                                echo "checked";
                                                                                                                              }
                                                                                                                              ?> />
                  <label class="form-check-label"><?php echo "Nữ"; ?></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="containerInputFilter[]" value="<?php echo "man" ?>" <?php if (in_array('man', $checked)) {
                                                                                                                              echo "checked";
                                                                                                                            } ?> />
                  <label class="form-check-label"><?php echo "Nam"; ?></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="containerInputFilter[]" value="<?php echo "baby" ?>" <?php if (in_array('baby', $checked)) {
                                                                                                                                echo "checked";
                                                                                                                              }
                                                                                                                              ?> />
                  <label class="form-check-label"><?php echo "Trẻ em"; ?></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="containerInputFilter[]" value="<?php echo "nonbaby" ?>" <?php if (in_array('nonbaby', $checked)) {
                                                                                                                                  echo "checked";
                                                                                                                                }
                                                                                                                                ?> />
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
                <input type="text" id="live_search" name="table_search" class="form-control float-right" placeholder="Search">
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
                  <th>Công cụ</th>
                </tr>
              </thead>
              <tbody id="rowProduct">
                <?php
                // Nếu filter gender input được request
                if (isset($containerInputFilter)) {
                  $i = 0;
                  foreach ((object)$filterProducts['resultPaginationFilter'] as $key => $row) {
                    $i++
                ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['category_id'] ?></td>
                      <td>
                        <?php
                        $dataThumbnail = json_decode($row['thumbnail']);
                        foreach ((array)$dataThumbnail as $key) {
                          echo "<img src='" . base_url('assets/uploads/') . $key . "' height='100px' width='100px'>";
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
                  if (count($products) > 0) {
                    foreach ($products as $row) :
                      $i++;
                  ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['category_id'] ?></td>
                        <td>
                          <?php
                          $dataThumbnail = json_decode($row['thumbnail']);
                          foreach ((array)$dataThumbnail as $key) {
                            echo "<img src='" . base_url('assets/uploads/') . $key . "' height='100px' width='100px'>";
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
          </div>
        </div>
        <?php
        if (isset($container)) {
        ?>
          <div class="row" id="pagination">
            <div class="col-sm-12 col-md-5">
              <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10</div>
            </div>
            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                <ul class="pagination">
                  <?php if ($page > 1) : ?>
                    <li class="paginate_button page-item previous" id="example2_previous">
                      <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                    </li>
                  <?php endif; ?>

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
                  <?php if ($page == floor($filterProducts['numberOfPageFilter'] / 2)) : ?>
                    <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                  <?php endif; ?>
                </ul>
              </div>
            </div>
          </div>
        <?php
        } else {
        ?>
          <div class="row" id="pagination">
            <?= $pager->links('default', 'custom_pagination') ?>
          </div>
        <?php
        }
        ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- live search -->
<script type="text/javascript">
  $(document).ready(function() {
    $("#live_search").keyup(function() {
      var input = $(this).val();
      $.ajax({
        type: "POST",
        url: "<?= base_url('admin/liveSearchProducts') ?>",
        dataType: 'json',
        contentType: "application/json",
        data: JSON.stringify({
          input: input
        }),
        success: function(response) {
          $("#rowProduct").text('');
          $("#pagination").text('');

          // insert data cũng như html tag vào để thay đổi products hiện tại theo response
          updateSearchedResponse(response);
        }
      });
    })

    function updateSearchedResponse(response) {
      // collec and append data
      $.each(response, function(key, val) {
        var row = document.createElement("tr");
        let stt = document.createElement("td");
        stt.innerHTML = key;
        row.append(stt);

        var categoryId = document.createElement("td");
        categoryId.innerHTML = val.category_id;
        thumbnails = jQuery.parseJSON(val.thumbnail);
        var thumbnail = document.createElement('td');
        for (let j = 0; j < thumbnails.length; j++) {
            $('<img />', {
              src: 'http://localhost/assets/uploads/' + thumbnails[j],
              alt: 'thumbnail',
              height: '100px',
              width: '100px'
            }).appendTo(thumbnail);
        }
        var sku = document.createElement("td");
        sku.innerHTML = val.sku;
        var title = document.createElement("td");
        title.innerHTML = val.title;
        var price = document.createElement("td");
        price.innerHTML = val.price;
        var description = document.createElement("td");
        description.innerHTML = val.description;
        var gender = document.createElement("td");
        gender.innerHTML = val.gender;
        var createdAt = document.createElement("td");
        createdAt.innerHTML = val.created_at;
        var updatedAt = document.createElement("td");
        updatedAt.innerHTML = val.updated_at;
        if (val.status == '1') {
          var status = document.createElement("td");
          status.innerHTML = 'sẵn có';
        } else {
          var status = document.createElement("td");
          status.innerHTML = 'hết hàng';
        }
        var productTools = document.createElement("td");
        let hrefUpdate = 'http://localhost/admin/updateProduct' + val.product_id;
        let productUpdateLink = document.createElement("a");
        productUpdateLink.href = hrefUpdate;
        productUpdateLink.innerHTML = "Sửa & ";

        let hrefDelete = 'http://localhost/admin/deleteProduct' + val.product_id;
        let productDeleteLink = document.createElement("a");
        productDeleteLink.href = hrefDelete;
        productDeleteLink.innerHTML = "Xóa";

        productTools.append(productUpdateLink, productDeleteLink);

        // append vào 1 row
        row.append(categoryId, thumbnail, sku, title, price, description, gender, createdAt, updatedAt, status, productTools);
        $('#rowProduct').append(row)
      })
    }
  });

</script>