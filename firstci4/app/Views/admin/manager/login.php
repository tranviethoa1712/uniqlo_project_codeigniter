<!-- Main content -->
<div class="content-wrapper" style="margin-left: 0px;">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-9">
                <form method="post" action="<?php echo base_url('login') ?>"  style="margin-top: 250px;">
                    <h3 style="margin-top: 50px;">Đăng nhập</h3>
                    <?= view('massages/massage') ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label d-flex justify-content-start">Email address</label>
                        <input type="email" name="emailAddress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text d-flex justify-content-start">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label d-flex justify-content-start">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" name="loginAdmin" class="btn btn-primary">Submit</button>
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
