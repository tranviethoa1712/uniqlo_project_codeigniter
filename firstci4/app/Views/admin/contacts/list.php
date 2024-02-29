<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Danh sách khách hàng</h3>
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
          <div class="row d-flex justify-content-between">
            <?php
            if (count($contacts) > 0) {
              foreach ($contacts as $row) :
            ?>
                <div class="col-md-6">
                  <div class="card card-widget widget-user-2">
                    <div class="widget-user-header <?= $row['readed'] == true ? "bg-green" : "bg-white" ?>">
                      <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                      </div>

                      <h3 class="widget-user-username"><?= $row['name'] ?></h3>
                      <h5 class="widget-user-desc"><?= $row['name'] ?></h5>
                    </div>
                    <div class="card-footer p-0">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <?= $row['name'] ?>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <?= $row['email'] ?>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <?= $row['phone'] ?>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <?= $row['content'] ?>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <?= $row['seen'] ?>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <?= $row['readed'] ?>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
            <?php
              endforeach;
            } else {
              echo "<h1>" . "Danh mục rỗng" . "</h1>";
            }
            ?>
          </div>
          <div class="row">
            <?= $pager->links('default', 'custom_pagination') ?>
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