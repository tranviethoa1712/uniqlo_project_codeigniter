<section class="content">
    <div class="container-fluid">
        <?= view('massages/massage') ?>
        <form method="post" action="<?php echo base_url('admin/updateProcessing') ?>">
            <?php foreach ($user as $row) : ?>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sừa thông tin người dùng</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name-user">Tên người dùng</label>
                            <td><input type="text" id="name-user" class="form-control" value="<?php echo $row['name'] ?>" name="name_update"></td>
                            <td><input type="hidden" class="form-control" value="<?php echo $idUser ?>" name="id_update"></td>
                        </div>
                        <div class="form-group">
                            <label for="email-user">Email</label>
                            <td><input type="text" id="email-user" class="form-control" value="<?php echo $row['email'] ?>" name="email_update"></td>
                        </div>
                        <div class="form-group">
                            <label for="password-user">Password</label>
                            <td><input type="password" id="password-user" class="form-control" value="<?php echo $row['password'] ?>" name="password_update" readonly></td>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm-user">Password-confirm</label>
                            <td><input type="password" id="password-confirm-user" class="form-control" name="password_confirm" value="<?php echo $row['password'] ?>"  readonly></td>
                        </div>
                        <div class="form-group">
                            <label for="dob-user">Ngày sinh</label>
                            <td><input type="date" id="dob-user" class="form-control" value="<?php echo $row['dob'] ?>" name="dob_update"></td>
                        </div>
                        <div class="form-group">
                            <label for="gender-label">Giới tính</label>
                            <div class="form-check" id="gender-label">
                                <input type="radio" id="radio-1" name="gender_update" value="male" <?php if ($row['gender'] == 'male') {
                                    echo ' checked';
                                                                                                    } ?>>
                                <label class="form-check-label">Nam</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="radio-1" name="gender_update" value="female" <?php if ($row['gender'] == 'female') {
                                    echo ' checked';
                                } ?>>
                                <label class="form-check-label">Nữ</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="radio-1" name="gender_update" value="empty" <?php if ($row['gender'] == 'empty') {
                                    echo ' checked';
                                } ?>>
                                <label class="form-check-label">Khác</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" name="change_password" class="form-check-input" id="change-password">
                                <label class="form-check-label" for="change-password">Thay đổi mật khẩu</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="reset">
                                <label class="form-check-label" for="reset">Nhập lại</label>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="updateUser">Submit</button>
                </div>
        </form>
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
<script src="<?php echo base_url('assets/admin/access/js/events.js') ?>"></script>