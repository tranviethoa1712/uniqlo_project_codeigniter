<!-- Main content -->
<div class="content-wrapper">
    <div class="container text-center">
        <div class="row justify-content-start">
            <div class="col-9">
                <form method="post" action="<?php echo base_url('admin/login') ?>">
                    <div class="mb-3">
                        <label for="name" class="d-flex justify-content-start">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                    </div>
                    <div class="mb-3">
                        <label for="emailAddress" class="d-flex justify-content-start">Email address</label>
                        <input type="text" name="emailAddress" class="form-control" id="emailAddress" placeholder="Enter email">
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="d-flex justify-content-start">Password address</label>
                        <input type="text" name="password" class="form-control" id="pwd" placeholder="Enter password">
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="registerAdmin" class="btn btn-primary" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>
      <!-- /.content -->
  </div>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
