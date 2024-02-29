<?php
$form_token = uniqid();
setcookie('form_token', $form_token, time() + '3600');
?>
<?php global $error; ?>

<!--menu-->
<div class="layout sticky">
  <div class="menu-wrapper " id="menu">
    <div class="menu-links">
      <h1 class="menu-links__logo">
        <?php
        $urlHome = base_url('user/homePage');
        $urlImage = base_url('assets/uploads/');
        ?>
        <a href="<?php echo base_url('user/homePage?gioitinh=woman'); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 40" width="90" height="40" role="img" aria-label="ユニクロ｜UNIQLO">
            <title>ユニクロ｜UNIQLO</title>
            <path fill="red" d="M50 0h40v40H50zM0 0h40v40H0z"></path>
            <g fill="#fff">
              <path d="M79.48 5.47h2.53v12.64h-2.53zM63.47 13.9a4.21 4.21 0 0 1-8.42 0V5.47h2.53v8.43a1.68 1.68 0 1 0 3.36 0V5.47h2.53zM75.26 34.53h-8.42V21.89h2.53V32h5.89v2.53zM75.26 18.11h-2.53l-3.36-7.22v7.22h-2.53V5.47h2.53l3.36 7.22V5.47h2.53v12.64zM59.26 21.89a4.21 4.21 0 0 0-4.21 4.22v4.21a4.21 4.21 0 0 0 4.21 4.21 4.34 4.34 0 0 0 .82-.07l.86 2.6h2.53l-1.25-3.75a4.2 4.2 0 0 0 1.25-3v-4.2a4.21 4.21 0 0 0-4.21-4.22m1.68 8.43a1.68 1.68 0 1 1-3.36 0v-4.21a1.68 1.68 0 1 1 3.36 0zM80.74 21.89a4.22 4.22 0 0 0-4.22 4.22v4.21a4.21 4.21 0 0 0 8.42 0v-4.21a4.21 4.21 0 0 0-4.21-4.22m1.68 8.43a1.68 1.68 0 0 1-3.37 0v-4.21a1.68 1.68 0 0 1 3.37 0z"></path>
              <g>
                <path d="M22.74 15.16H34.1v2.52H22.74zM24 5.47h8.84V8H24zM14.74 5.47H7.15V8h5.06v7.16H5.9v2.52h11.36v-2.52h-2.52V5.47zM22.74 22.31v12.22H34.1V22.31zM31.57 32h-6.31v-7.16h6.31zM7.15 22.31l-1.28 6.12h2.52l.76-3.59h5.07L12.73 32H5.14l-.51 2.53h10.11l2.52-12.22H7.15z"></path>
              </g>
            </g>
          </svg>
        </a>
      </h1>
    </div>
  </div>
</div>
<div class="contained">
  <div class="signup-page-wrapper">
    <div>
      <ul class="top-link__list">
        <li class="top-link__list-item"><a href="#">uniqlo</a><span> /</span></li>
        <li class="top-link__list-item"><span>tạo tài khoản</span></li>
      </ul>
      <div class="top-title">
        <div><span>Tạo một tài khoản</span></div>
        <div class="top-title__icon">
          <i class="fa-solid fa-lock" style="font-size: 17px;"></i>
        </div>
      </div>
    </div>
    <form method="post" action="<?= base_url('user/doRegister') ?>">
      <div class="form-signup__wrapper">

       <?= view('massages/massage') ?>
        <div class="form-signup">
          <div class="form-signup__note">
            <div class="form-signup__note-left">
              Chúng tôi sẽ gửi thư xác nhận đến địa chỉ email được liên kết với tài khoản của bạn. Hãy kiểm tra email đến từ chúng tôi.
            </div>
            <div class="form-signup__note-right">
              Bắt buộc*
            </div>
          </div>
          <div class="wrapper-input">
            <div class="label">
              <p id="name-text"> Tên người dùng <span style="color: #378694;">*</span></p>
            </div>
            <div class="wrapper-input__right">
              <input type="text" name="form_token" hidden value=<?php echo $form_token; ?>>
              <input value="<?= old('name') ?>" type="text" name="name" id="name-text" class="input-spe" placeholder="Nhập tên người dùng">
              <div id="alert-name" class="require-note">
                .
              </div>
            </div>
          </div>
          <div class="wrapper-input">
            <div class="label">
              <p id="email-text">địa chỉ email <span style="color: #378694;">*</span></p>
            </div>
            <div class="wrapper-input__right">
              <input type="text" name="form_token" hidden value=<?php echo $form_token; ?>>
              <input  value="<?= old('email') ?>"  type="text" name="email" id="email" class="input-spe" placeholder="Nhập email hợp lệ" onkeyup="validateInputEmail()">
              <div id="alert-email" class="require-note">
                .
              </div>
            </div>
          </div>
          <div class="wrapper-input ">
            <div class="label">
              <p id="pwd-text">mật khẩu <span style="color: #378694;">*</span></p>
            </div>
            <div class="wrapper-input__right">
              <input value="<?= old('password') ?>" type="password" name="password" id="pwd" class="input-spe" onkeyup="validateInputPwd()">
              <div id="alert-pwd" class="require-note">
                Mật khẩu cần có ít nhất 08 ký tự (bao gồm cả chữ và số). Chỉ có thể sử dụng các ký tự đặc biệt này -_.@
              </div>
            </div>
          </div>
          <div class="wrapper-input ">
            <div class="label">
              <p id="pwd-text">Nhập lại mật khẩu <span style="color: #378694;">*</span></p>
            </div>
            <div class="wrapper-input__right">
              <input value="<?= old('password_confirm') ?>" type="password" name="password_confirm" id="pwd-confirm" class="input-spe" onkeyup="validateInputPwd()">
              <!-- <div class="check-showpass">
                <input type="checkbox" name="showPwd" id="showpass" value="Hiện mật khẩu">
                <label for="showpass">
                  <span>Hiện mật khẩu</span>
                </label>
              </div> -->
            </div>
          </div>
          <div class="wrapper-input">
            <div class="label">
              sinh nhật
            </div>
            <div class="wrapper-input__right">
              <input type="date" name="dob" class="input-spe">
              <div class="require-note">
                Không thể chỉnh sửa ngày sinh sau khi bạn đăng ký tài khoản.
              </div>
            </div>
          </div>
          <div class="wrapper-input">
            <div class="label">giới tính</div>
            <div class="wrapper-input__right align-center radio">
              <label for="radio-1">Nam</label>
              <input type="radio" id="radio-1" name="gender" value="male">
              <label for="radio-2">Nữ</label>
              <input type="radio" id="radio-2" name="gender" value="female">
              <label for="radio-3">Bỏ chọn</label>
              <input type="radio" id="radio-3" name="gender" value="empty" checked>
            </div>
          </div>
          <div class="wrapper-confirm">
            <div class="label">xác nhận đăng ký</div>
            <div class="wrapper-checkbox">
              <input type="checkbox" id="confirm-uni">
              <label for="confirm-uni"> Thư điện tử UNIQLO</label>
            </div>
          </div>
          <div class="policy">
            <h3 class="h3">
              <span>tin nhắn văn bản và cài đặt riêng</span>
            </h3>
            <div class="policy-contents">
              <h5 class="h5">
                <span>Ứng dụng UNIQLO và dữ liệu cá nhân của bạn</span>
              </h5>
              <div class="policy-contents__detail">
                UNIQLO cam kết tôn trọng các quyền của khách hàng khi lưu trữ dữ liệu cá nhân của họ trong hệ thống. Thỏa thuận bên dưới sẽ giúp khách hàng lựa chọn việc có để cho dữ liệu cá nhân của mình được lưu trữ và xử lý vì mục đích cung cấp dịch vụ tương ứng. Vì mục đích của thỏa thuận bên dưới, sẽ gửi “tin nhắn văn bản”, nghĩa là thông báo cung cấp những thông tin quan trọng liên quan đến dịch vụ đến cho khách hàng.
              </div>
              <h5 class="h5">
                <span>Đồng ý nhận quảng cáo tiếp thị (Tin nhắn không cá nhân hóa)</span>
              </h5>
              <div class="policy-contents__detail">
                Tôi đồng ý cho phép Uniqlo sử dụng dữ liệu cá nhân của tôi để gửi cho tôi tin nhắn tiếp thị theo dạng tin nhắn văn bản không cá nhân hóa
              </div>
              <div class="check-box">
                <input type="checkbox" id="send-text" value="Hiện mật khẩu" checked>
                <label for="send-text">
                  <span>Tin nhắn văn bản</span>
                </label>
              </div>
              <h5 class="h5">
                <span>Đồng ý nhận quảng cáo tiếp thị (Tin nhắn cá nhân hóa)</span>
              </h5>
              <div class="policy-contents__detail">
                Tôi đồng ý cho phép Uniqlo phân tích và sử dụng dữ liệu của tôi để gửi cho tôi tin nhắn tiếp thị theo dạng tin nhắn văn bản cá nhân hóa </div>
              <div class="check-box">
                <input type="checkbox" id="send-text" value="Hiện mật khẩu" checked>
                <label for="send-text">
                  <span>Tin nhắn văn bản</span>
                </label>
              </div>
            </div>
          </div>
          <div class="end-policy">
            <h5 class="h5">
              <span>Thỏa thuận thành viên </span><span style="color: #378694;">*</span>
            </h5>
            <div class="text-gray">
              Bằng cách tạo tài khoản, bạn đồng ý với chính sách bảo mật và điều khoản sử dụng của UNIQLO.
            </div>
            <div class="check-box">
              <input type="checkbox" id="send-text" value="Hiện mật khẩu" checked>
              <label for="send-text">
                <span>Tôi đồng ý với ĐIỀU KHOẢN SỬ DỤNG và CHÍNH SÁCH BẢO MẬT CỦA UNIQLO</span>
              </label>
            </div>
            <div class="wrapper-linkag">
              <div><a href="#">Điều khoản sử dụng</a></div>
              <div><a href="#">chính sách bảo mật</a></div>
            </div>
            <div class="wrapper-loginbtn">
              <input type="submit" name="submit" class="btn" value="Đăng ký">
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<?php $_COOKIE['form_token'] = ''; ?>
<script src="<?php echo base_url('assets/customer/js/register.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>