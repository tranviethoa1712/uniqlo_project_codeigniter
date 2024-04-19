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
      <!--info dropdown-->
      <div class="menu-links__list">
        <ul class="menu-links__list-contents">
          <li class="menu-links__list-item-dropdown woman">
            <a href="<?php echo base_url('user/categoryPage?gioitinh=woman') ?>">Nữ</a>
            <div class="dropdown-wrapper dropdown-woman">
              <div class="menu-links__dropdown-item-content">
                <div>
                  <span class="menu-links__list-item-title">áo</span>
                  <ul class="dropdown-list__items">
                    <?php
                    $urlListProduct = 'user/listProducts?iddanhmuc=';
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ÁO") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <span class="menu-links__list-item-title">sport utility wear</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "SPORT UTILITY WEAR") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </div>
                <div>
                  <span class="menu-links__list-item-title">ĐỒ MẶC TRONG & ĐỒ LÓT</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ĐỒ MẶC TRONG & ĐỒ LÓT") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <span class="menu-links__list-item-title">ĐỒ MẶC NGOÀI</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "Đồ mặc ngoài") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <span class="menu-links__list-item-title">ĐẦM & CHÂN VÁY</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ĐẦM & CHÂN VÁY") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </div>
                <div>
                  <span class="menu-links__list-item-title">QUẦN</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "QUẦN") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </div>
                <div>
                  <span class="menu-links__list-item-title">ĐỒ MẶC NHÀ</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ĐỒ MẶC NHÀ") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <span class="menu-links__list-item-title">PHỤ KIỆN</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "PHỤ KIỆN") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </div>
                <div class="w-seperator"></div>
                <div>
                  <span class="menu-links__list-item-title">nổi bật</span>
                  <ul class="dropdown-list__items">
                    <li class="dropdown-list__item"><a>hàng mới về</a></li>
                    <li class="dropdown-list__item">
                      <a>khuyến mãi có hạn</a>
                    </li>
                    <li class="dropdown-list__item"><a>giá mới</a></li>
                    <li class="dropdown-list__item"><a>sắp ra mắt</a></li>
                    <li class="dropdown-list__item">
                      <a>tin tức nổi bật</a>
                    </li>
                    <li class="dropdown-list__item"><a>áo thun UT</a></li>
                    <li class="dropdown-list__item"><a>STYLING BOOK</a></li>
                    <li class="dropdown-list__item"><a>về LifeWear</a></li>
                    <li class="dropdown-list__item">
                      <a>UNIQLO LIVE STATION</a>
                    </li>
                    <li class="dropdown-list__item">
                      <a>PEACE FOR ALL</a>
                    </li>
                  </ul>
                  <span class="menu-links__list-item-title">bộ sưu tập đặc biệt</span>
                  <ul class="dropdown-list__items">
                    <li class="dropdown-list__item">
                      <a>Roger Federer Collection BY JW ANDERSON</a>
                    </li>
                    <li class="dropdown-list__item"><a>UNIQLO : C</a></li>
                    <li class="dropdown-list__item">
                      <a>INES DE LA FRESSANGE</a>
                    </li>
                    <li class="dropdown-list__item">
                      <a>Bộ Sưu Tập Đặc Biệt</a>
                    </li>
                  </ul>
                  <span class="menu-links__list-item-title">trình duyệt</span>
                  <ul class="dropdown-list__items">
                    <li class="dropdown-list__item"><a>tất cả đồ nữ</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>

          <li class="menu-links__list-item-dropdown man">
            <a href="<?php echo base_url('user/categoryPage?gioitinh=man') ?>">Nam</a>
            <div class="dropdown-wrapper dropdown-man">
              <div class="menu-links__dropdown-item-content">
                <div>
                  <span class="menu-links__list-item-title">áo</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ÁO") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <span class="menu-links__list-item-title">sport utility wear</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "SPORT UTILITY WEAR") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </div>
                <div>
                  <span class="menu-links__list-item-title">ĐỒ MẶC TRONG & ĐỒ LÓT</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ĐỒ MẶC TRONG & ĐỒ LÓT") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <span class="menu-links__list-item-title">ĐỒ MẶC NGOÀI</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "Đồ mặc ngoài") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <span class="menu-links__list-item-title">ĐẦM & CHÂN VÁY</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ĐẦM & CHÂN VÁY") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </div>
                <div>
                  <span class="menu-links__list-item-title">QUẦN</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "QUẦN") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </div>
                <div>
                  <span class="menu-links__list-item-title">ĐỒ MẶC NHÀ</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ĐỒ MẶC NHÀ") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <span class="menu-links__list-item-title">PHỤ KIỆN</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "PHỤ KIỆN") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </div>
                <div class="w-seperator"></div>
                <div>
                  <span class="menu-links__list-item-title">nổi bật</span>
                  <ul class="dropdown-list__items">
                    <li class="dropdown-list__item"><a>hàng mới về</a></li>
                    <li class="dropdown-list__item">
                      <a>khuyến mãi có hạn</a>
                    </li>
                    <li class="dropdown-list__item"><a>giá mới</a></li>
                    <li class="dropdown-list__item"><a>sắp ra mắt</a></li>
                    <li class="dropdown-list__item">
                      <a>tin tức nổi bật</a>
                    </li>
                    <li class="dropdown-list__item"><a>áo thun UT</a></li>
                    <li class="dropdown-list__item"><a>STYLING BOOK</a></li>
                    <li class="dropdown-list__item"><a>về LifeWear</a></li>
                    <li class="dropdown-list__item">
                      <a>UNIQLO LIVE STATION</a>
                    </li>
                    <li class="dropdown-list__item">
                      <a>PEACE FOR ALL</a>
                    </li>
                  </ul>
                  <span class="menu-links__list-item-title">bộ sưu tập đặc biệt</span>
                  <ul class="dropdown-list__items">
                    <li class="dropdown-list__item">
                      <a>Roger Federer Collection BY JW ANDERSON</a>
                    </li>
                    <li class="dropdown-list__item"><a>UNIQLO : C</a></li>
                    <li class="dropdown-list__item">
                      <a>INES DE LA FRESSANGE</a>
                    </li>
                    <li class="dropdown-list__item">
                      <a>Bộ Sưu Tập Đặc Biệt</a>
                    </li>
                  </ul>
                  <span class="menu-links__list-item-title">trình duyệt</span>
                  <ul class="dropdown-list__items">
                    <li class="dropdown-list__item"><a>tất cả đồ nữ</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="menu-links__list-item-dropdown baby">
            <a href="<?php echo base_url('user/categoryPage?gioitinh=baby') ?>">Trẻ em</a>
            <div class="dropdown-wrapper dropdown-baby">
              <div class="menu-links__dropdown-item-content">
                <div>
                  <span class="menu-links__list-item-title">áo</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ÁO") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <span class="menu-links__list-item-title">sport utility wear</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "SPORT UTILITY WEAR") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </div>
                <div>
                  <span class="menu-links__list-item-title">ĐỒ MẶC TRONG & ĐỒ LÓT</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ĐỒ MẶC TRONG & ĐỒ LÓT") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <span class="menu-links__list-item-title">ĐỒ MẶC NGOÀI</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "Đồ mặc ngoài") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <span class="menu-links__list-item-title">ĐẦM & CHÂN VÁY</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ĐẦM & CHÂN VÁY") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </div>
                <div>
                  <span class="menu-links__list-item-title">QUẦN</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "QUẦN") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </div>
                <div>
                  <span class="menu-links__list-item-title">ĐỒ MẶC NHÀ</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ĐỒ MẶC NHÀ") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <span class="menu-links__list-item-title">PHỤ KIỆN</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "PHỤ KIỆN") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </div>
                <div class="w-seperator"></div>
                <div>
                  <span class="menu-links__list-item-title">nổi bật</span>
                  <ul class="dropdown-list__items">
                    <li class="dropdown-list__item"><a>hàng mới về</a></li>
                    <li class="dropdown-list__item">
                      <a>khuyến mãi có hạn</a>
                    </li>
                    <li class="dropdown-list__item"><a>giá mới</a></li>
                    <li class="dropdown-list__item"><a>sắp ra mắt</a></li>
                    <li class="dropdown-list__item">
                      <a>tin tức nổi bật</a>
                    </li>
                    <li class="dropdown-list__item"><a>áo thun UT</a></li>
                    <li class="dropdown-list__item"><a>STYLING BOOK</a></li>
                    <li class="dropdown-list__item"><a>về LifeWear</a></li>
                    <li class="dropdown-list__item">
                      <a>UNIQLO LIVE STATION</a>
                    </li>
                    <li class="dropdown-list__item">
                      <a>PEACE FOR ALL</a>
                    </li>
                  </ul>
                  <span class="menu-links__list-item-title">bộ sưu tập đặc biệt</span>
                  <ul class="dropdown-list__items">
                    <li class="dropdown-list__item">
                      <a>Roger Federer Collection BY JW ANDERSON</a>
                    </li>
                    <li class="dropdown-list__item"><a>UNIQLO : C</a></li>
                    <li class="dropdown-list__item">
                      <a>INES DE LA FRESSANGE</a>
                    </li>
                    <li class="dropdown-list__item">
                      <a>Bộ Sưu Tập Đặc Biệt</a>
                    </li>
                  </ul>
                  <span class="menu-links__list-item-title">trình duyệt</span>
                  <ul class="dropdown-list__items">
                    <li class="dropdown-list__item"><a>tất cả đồ nữ</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="menu-links__list-item-dropdown non-baby">
            <a href="<?php echo base_url('user/categoryPage?gioitinh=nonbaby') ?>">Trẻ em sơ sinh</a>
            <div class="dropdown-wrapper dropdown-non-baby">
              <div class="menu-links__dropdown-item-content">
                <div>
                  <span class="menu-links__list-item-title">áo</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ÁO") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <span class="menu-links__list-item-title">sport utility wear</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "SPORT UTILITY WEAR") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </div>
                <div>
                  <span class="menu-links__list-item-title">ĐỒ MẶC TRONG & ĐỒ LÓT</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ĐỒ MẶC TRONG & ĐỒ LÓT") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <span class="menu-links__list-item-title">ĐỒ MẶC NGOÀI</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "Đồ mặc ngoài") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <span class="menu-links__list-item-title">ĐẦM & CHÂN VÁY</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ĐẦM & CHÂN VÁY") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </div>
                <div>
                  <span class="menu-links__list-item-title">QUẦN</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "QUẦN") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </div>
                <div>
                  <span class="menu-links__list-item-title">ĐỒ MẶC NHÀ</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ĐỒ MẶC NHÀ") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                  <span class="menu-links__list-item-title">PHỤ KIỆN</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "PHỤ KIỆN") {
                    ?>
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']); ?></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </div>
                <div class="w-seperator"></div>
                <div>
                  <span class="menu-links__list-item-title">nổi bật</span>
                  <ul class="dropdown-list__items">
                    <li class="dropdown-list__item"><a>hàng mới về</a></li>
                    <li class="dropdown-list__item">
                      <a>khuyến mãi có hạn</a>
                    </li>
                    <li class="dropdown-list__item"><a>giá mới</a></li>
                    <li class="dropdown-list__item"><a>sắp ra mắt</a></li>
                    <li class="dropdown-list__item">
                      <a>tin tức nổi bật</a>
                    </li>
                    <li class="dropdown-list__item"><a>áo thun UT</a></li>
                    <li class="dropdown-list__item"><a>STYLING BOOK</a></li>
                    <li class="dropdown-list__item"><a>về LifeWear</a></li>
                    <li class="dropdown-list__item">
                      <a>UNIQLO LIVE STATION</a>
                    </li>
                    <li class="dropdown-list__item">
                      <a>PEACE FOR ALL</a>
                    </li>
                  </ul>
                  <span class="menu-links__list-item-title">bộ sưu tập đặc biệt</span>
                  <ul class="dropdown-list__items">
                    <li class="dropdown-list__item">
                      <a>Roger Federer Collection BY JW ANDERSON</a>
                    </li>
                    <li class="dropdown-list__item"><a>UNIQLO : C</a></li>
                    <li class="dropdown-list__item">
                      <a>INES DE LA FRESSANGE</a>
                    </li>
                    <li class="dropdown-list__item">
                      <a>Bộ Sưu Tập Đặc Biệt</a>
                    </li>
                  </ul>
                  <span class="menu-links__list-item-title">trình duyệt</span>
                  <ul class="dropdown-list__items">
                    <li class="dropdown-list__item"><a>tất cả đồ nữ</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="menu-tools">
      <button class="menu-tools__search">
        <i class="fa-solid fa-magnifying-glass"></i>
      </button>
      <a href="<?php if (isset($_SESSION['customer_login'])) {
                  echo base_url('user/aboutAccount');
                } else {
                  echo base_url('user/userLogin');
                } ?>" class="menu-tools__account">
        <i class="fa-regular fa-user"></i>
      </a>
      <a class="menu-tools__fav">
        <i class="fa-regular fa-heart"></i>
      </a>
      <a href="<?php echo base_url('user/myCart'); ?>" class="menu-tools__cart">
        <i class="fa-solid fa-cart-shopping"></i>
      </a>
    </div>
    <div class="toggle_btn" onclick="toggleMenu()">
      <i class="fa-solid fa-bars"></i>
    </div>
  </div>
</div>
<div class="dropdown_menu">
  <ul>
    <li>
      <button class="menu-tools__search">
        <i class="fa-solid fa-magnifying-glass"></i>
      </button>
    </li>
    <li>
      <a href="<?php if (isset($_SESSION['customer_login'])) {
                  echo base_url('user/aboutAccount');
                } else {
                  echo base_url('user/userLogin');
                } ?>" class="menu-tools__account">
        <i class="fa-regular fa-user"></i>
      </a>
    </li>
    <li>
      <a class="menu-tools__fav">
        <i class="fa-regular fa-heart"></i>
      </a>
    </li>
    <li>
      <a href="<?php echo base_url('user/myCart') ?>" class="menu-tools__cart">
        <i class="fa-solid fa-cart-shopping"></i>
      </a>
    </li>
  </ul>
</div>
<!--end menu-->

<div class="contained">
  <div class="contents-cards">
    <?php
    $product_id = $_GET['idsanpham'];
    ?>
    <div class="main-container">
      <div class="left-container">
        <div class="product-main-image-section p-active">
          <div class="layout-thumnail ">
            <div class="thumbnail-section">
              <?php
              $urlImage = base_url('assets/uploads/');

              foreach ($products as $col) {
                $dataImages = (array)json_decode($col['images']);
                $location = 1;
                foreach ($dataImages as $key) {
              ?>
                  <button class="thumnail-image ">
                    <img class='dot cursor responsive' src='<?= $urlImage . $key ?>' height='100px' width='100px' onclick='currentSlide(<?= $location; ?>)'>
                  </button>
              <?php
                    $location++;
                  }
                }
              ?>
            </div>
          </div>
          <div class="layout-main-image">
            <?php foreach ($products as $col) {
              $i = 0;
              $dataImages = json_decode($col['thumbnail']);
              foreach ((array)$dataImages as $key) {
                      $i++;
            ?>
                <div class="mySlides">
                  <img class="responsive" src="<?= $urlImage . $key ?>">
                  <div class="numbertext"><?php echo $i; ?> / 11</div>
                </div>
            <?php
                }
              }
            ?>
            <a class="prev cursor" onclick="plusSlides(-1)">❮</a>
            <a class="next cursor" onclick="plusSlides(1)">❯</a>
          </div>
        </div>

        <section class="des-section">
          <div class="text-des-prd">
            <h2 class="h2">
              <span class="title">Mô tả</span>
            </h2>
            <span class="text-info">
              <span class="wrap-info">
                <span class="info-label">Mã sản phẩm:</span>
                <span class="info-code">467774</span>
              </span>
            </span>
          </div>
          <div class="overview-prd">
            <div class="tab-head">
              <button name="overview" onclick="tabDes(this)">
                <div class="head-wrap">
                  <h3 class="h3"><span>Tổng quan</span></h3>
                  <span class="head-arrow">
                    <i class="fa-solid fa-caret-down"></i>
                  </span>
                </div>
              </button>
              <div class="overview-content" id="overview">
                Tác phẩm thể hiện thiết kế về nhân vật BFF màu hồng nổi tiếng của KAWS ở mặt sau. Một điểm ở mặt trước là thiết kế XX, thương hiệu của tác phẩm nghệ thuật KAWS.
                <br>
                <br>
                Nhân sự kiện ra mắt ấn bản artbook mới nhất của World’s Premier of KAWS (Nhà xuất bản: Phaidon), UNIQLO ra mắt bộ sưu tập UT độc quyền, lấy cảm hứng từ các tác phẩm nghệ thuật nguyên bản từ artbook KAWs. Trải nghiệm sự kết hợp tiên tiến giữa sách nghệ thuật và áo thun được kết hợp theo một cách mới đầy thú vị.
                <br>
                <br>
                KAWS
                <br>
                KAWS thu hút khán giả vượt xa các bảo tàng và phòng trưng bày nơi anh thường xuyên trưng bày. Trong hai thập kỷ qua, KAWS đã xây dựng một sự nghiệp thành công với những tác phẩm luôn thể hiện sự nhanh nhạy của anh với tư cách là một nghệ sĩ, cũng như trí thông minh, sự bất kính và tình cảm tiềm ẩn của ông đối với thời đại chúng ta. Anh ấy đã cộng tác với UNIQLO, bao gồm cả việc cung cấp các thiết kế cho dự án từ thiện PEACE FOR ALL vào năm 2022, đây là một thành công vang dội trên toàn thế giới.
                <br>
                <br>
                © KAWS
              </div>
            </div>
          </div>
          <div class="material-prd">
            <div class="tab-head">
              <button name="material" onclick="tabDes(this)">
                <div class="head-wrap">
                  <h3 class="h3"><span>Chất liệu</span></h3>
                  <span class="head-arrow">
                    <i class="fa-solid fa-caret-down"></i>
                  </span>
                </div>
              </button>
              <div class="overview-content" id="material">
                <div class="code-prd">Mã sản phẩm 467774</div>
                <div class="note-prd">Xin lưu ý mã số nhận diện của sản phẩm có thể có sự khác biệt, kể cả khi đó là cùng một mặt hàng.</div>
                <div class="list-des-item">Vải</div>
                <div class="list-des-item">100% Bông</div>
                <div class="list-des-item">Hướng dẫn giặt</div>
                <div class="list-des-item">Giặt máy nước lạnh, Không giặt khô, Sấy khô ở nhiệt độ thấp</div>
                <div class="note-prd-end">Xin lưu ý mã số nhận diện của sản phẩm có thể có sự khác biệt, kể cả khi đó là cùng một mặt hàng.</div>
              </div>
            </div>
          </div>
          <div class="policylink-prd">
            <div class="tab-head">
              <button class="link-wrapper">
                <a class="link-center">
                  <div class="head-wrap">
                    <h3 class="h3"><span>Chính sách hoàn trả</span></h3>
                    <span class="head-arrow">
                      <i class="fa-solid fa-chevron-right"></i>
                    </span>
                  </div>
                </a>
              </button>
            </div>
          </div>
          <div class="product-reviews">
            <div class="product-reviews__total">
              <div class="title">đánh giá</div>
              <div class="review-set">
                <div class="review">
                  <span class="review-star">
                    <img src="<?= $urlImage ?>star.png" alt="">
                  </span>
                  <span class="review-star">
                    <img src="<?= $urlImage ?>star.png" alt="">
                  </span>
                  <span class="review-star">
                    <img src="<?= $urlImage ?>star.png" alt="">
                  </span>
                  <span class="review-star">
                    <img src="<?= $urlImage ?>star.png" alt="">
                  </span>
                  <span class="review-star">
                    <img src="<?= $urlImage ?>star.png" alt="">
                  </span>
                </div>
                <div class="review-count">
                  (144)
                </div>
              </div>
            </div>
            <div class="main-review">
              <div class="main-review__left">
                <div class="title">
                  Đánh giá của khách hàng
                </div>
                <div class="level-star">
                  <div class="review-set">
                    <div class="review">
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                    </div>
                    <div class="review-count">
                      (144)
                    </div>
                  </div>
                  <div class="review-set">
                    <div class="review">
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                    </div>
                    <div class="review-count">
                      (144)
                    </div>
                  </div>
                  <div class="review-set">
                    <div class="review">
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                    </div>
                    <div class="review-count">
                      (144)
                    </div>
                  </div>
                  <div class="review-set">
                    <div class="review">
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                    </div>
                    <div class="review-count">
                      (144)
                    </div>
                  </div>
                  <div class="review-set">
                    <div class="review">
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                      <span class="review-star">
                        <img src="<?= $urlImage ?>star.png" alt="">
                      </span>
                    </div>
                    <div class="review-count">
                      (144)
                    </div>
                  </div>
                </div>
              </div>
              <div class="main-review__right">
                <div class="title">
                  Quần áo có vừa không
                </div>
                <div class="labels">
                  <div class="labels-item">chật</div>
                  <div class="labels-item">đúng với kích thước</div>
                  <div class="labels-item">rộng</div>
                </div>
                <div class="points">
                  <div class="dots"></div>
                  <div class="dots"></div>
                  <div class="dots"></div>
                  <div class="dots"></div>
                  <div class="dots"></div>
                </div>
              </div>
            </div>
            <div class="my-feedback">
              <div class="btn-myfeetback">
                <a href="#">
                  viết bài đánh giá
                </a>
              </div>
            </div>
            <div class="main-review__feetback">
              <div class="feetback-count">
                149 bài đánh giá
              </div>
              <div class="prd-feetback-container">
                <div class="fback-title__wrapper">
                  <div class="user-fback-title">It’s another great collaboration!</div>
                  <div class="user-fback-date">28/09/2023</div>
                </div>
                <div class="review-set">
                  <div class="review">
                    <span class="review-star">
                      <img src="<?= $urlImage ?>star.png" alt="">
                    </span>
                    <span class="review-star">
                      <img src="<?= $urlImage ?>star.png" alt="">
                    </span>
                    <span class="review-star">
                      <img src="<?= $urlImage ?>star.png" alt="">
                    </span>
                    <span class="review-star">
                      <img src="<?= $urlImage ?>star.png" alt="">
                    </span>
                    <span class="review-star">
                      <img src="<?= $urlImage ?>star.png" alt="">
                    </span>
                  </div>
                </div>
                <div class="definition-prd__wrapper">
                  <div class="dis-flex">
                    <div class="definition-prd__item">Kích cỡ đã mua:</div>
                    <div class="definition-prd__des">3XL</div>
                  </div>
                  <div class="dis-flex">
                    <div class="definition-prd__item">Quần áo có vừa không:</div>
                    <div class="definition-prd__des">Đúng với kích thước</div>
                  </div>
                </div>
                <div class="user-fback-comment">
                  I'm a big fan of Uniqlo's basic tees, and I was excited to see the collaboration with Kaws.

                  The shirt is made of high-quality cotton, and it's very soft and comfortable to wear. The fit is true to size, and the shirt is long enough to stay tucked in without being too long.

                  The design is screen printed on the back of the shirt, and it's well-done and looks great.

                  Overall, I'm very happy with the Uniqlo Kaw's tee shirt. It's a high-quality, stylish shirt that's perfect for everyday wear. I highly recommend it to anyone who's a fan of Uniqlo or Kaws.
                </div>
              </div>
              <dl class="user-fback-info">
                <dt class="user-fback__author"></dt>
                <dd class="user-info">&ensp;.&ensp;Nam</dd>
                <dd class="user-info">&ensp;.&ensp;25 đến 34 tuổi</dd>
                <dd class="user-info">&ensp;.&ensp;Chiều cao: 176 - 180cm</dd>
                <dd class="user-info">&ensp;.&ensp;Cân nặng: 66 - 70kg</dd>
                <dd class="user-info">&ensp;.&ensp;Cỡ giày: EU42</dd>
                <dd class="user-info">&ensp;.&ensp;Singapore</dd>
              </dl>
            </div>
            <!--end fback-->
        </section>
      </div>
      <div class="right-container sticky-detail">
        <div class="product-main-image-section-2">
          <div class="layout-main-image-2 swipper-thumbnail">
            <?php foreach ($products as $col) :
              $i = 0;
              $dataImages = (array)json_decode($col['thumbnail']);
              foreach ($dataImages as $key => $value) {
                if (is_array($value) || is_object($value)) {
                  foreach ($value as $item) {
                    if ($key == "name") {
                      $i++;
            ?>
                      <div class="mySlides2">
                        <div class="img-slides">
                          <img class="responsive" src="<?= $urlImage . $item ?>">
                        </div>
                        <div class="numbertext"><?php echo $i; ?> / 11</div>
                      </div>
            <?php
                    }
                  }
                }
              }
            endforeach;
            ?>
          </div>
        </div>
        <div class="title-head">
          <?php
            foreach ($products as $col) :
              echo $col['title'];
            endforeach;
          ?>
        </div>
        <div class="dis-between">
          <div class="price-prd">
            <?php
            foreach ($products as $col) :
              $price = $col['price'];
              echo number_format($price) . " VND";
            endforeach;
            ?>
          </div>
          <div class="review-set">
            <div class="review">
              <span class="review-star">
                <img src="<?= $urlImage ?>star.png" alt="">
              </span>
              <span class="review-star">
                <img src="<?= $urlImage ?>star.png" alt="">
              </span>
              <span class="review-star">
                <img src="<?= $urlImage ?>star.png" alt="">
              </span>
              <span class="review-star">
                <img src="<?= $urlImage ?>star.png" alt="">
              </span>
              <span class="review-star">
                <img src="<?= $urlImage ?>star.png" alt="">
              </span>
            </div>
            <div class="review-count">
              (149)
            </div>
          </div>
        </div>
        <div class="prd-description">
          <?php
          foreach ($products as $col) :
            echo $col['description'];
          endforeach;
          ?>
        </div>
        <div class="wrapper-selection__color">
          <div class="title">màu sắc:
            <?php
            foreach ($unitColor as $row) :
              foreach ($row as $item) {
                echo $item['unit'] . ' ';
              }
            endforeach;
            ?>
          </div>
          <!-- form -->
          <form method="post" action="<?= base_url('user/addToCart') ?>">

            <div class="color-group">
              <?php
              foreach ($unitColor as $row) :
                foreach ($row as $item) {
              ?>
                  <input type="radio" name="color_prd" id="color-<?php echo $item['unit'] ?>" class="radio-color acitve" value="<?php echo $item['unit'] ?>" <?php if ($item['product_id'] == $id_prd) {
                                                                                                                                                                echo " checked";
                                                                                                                                                              } ?> />
                  <a href="<?php echo base_url('user/detailProduct?idsanpham=') . $item['product_id'] ?>&sku=<?php echo $_GET['sku'] ?>&gioitinh=<?= $item['gender'] ?>&colorUnit=<?php echo $item['unit'] ?>" class="color-label bg-color-<?php echo $item['unit'] ?>" name="tab-color-<?php echo $item['unit'] ?>"><?php echo " "; ?></a>
                  <label for="color- <?php echo $item['unit'] ?>" hidden>
                  </label>
              <?php
                }
              endforeach;
              ?>
            </div>
        </div>
        <div class="wrapper-selection__size">
          <div class="title">Kích cỡ: Unisex XL</div>
          <div class="sizing-group">
            <?php
            if (count($attributeProductId) > 0) {
            ?>
              <?php
              foreach ($attributeProductId as $row) :
                if ($row['name'] == 'size') {
                  $explode = explode(", ", $row['unit']);
                  foreach ($explode as $unitInner) {
              ?>
                    <input type="radio" name="size_prd" id="size-<?php echo $unitInner; ?>" class="radio-sizing" value="<?php echo $unitInner; ?>" />
                    <label for="size-<?php echo $unitInner; ?>" class="radio-label" hidden>
                      <span class="text-sizing"><?php echo strtoupper($unitInner); ?></span>
                    </label>

            <?php
                  }
                }
              endforeach;
            }
            ?>
            <!-- <input type="radio" name="size_prd" id="size-xxl" disabled class="radio-sizing"/>
      <label for="size-xxl" class="radio-label btn-sl-size__soldout">
          <span class="text-sizing">XXL</span>
      </label>
    -->
          </div>
          <div class="btn-link__guide">
            Kích thước theo chiều cao
          </div>
        </div>
        <div class="link-table-size">
          <div>
            <span><i class="fa-solid fa-ruler-vertical"></i></span>
            <a href="#">Bảng kích cỡ</a>
          </div>
        </div>
        <div class="quantity-prd__wrapper">
          <div class="title">số lượng</div>
          <div class="btn-dropdown__quantity" name="dropdown-quantity" onclick="DropdownQuantity(this)">
            <input type="text" id="quantity" name="quantity_prd" value="1">
            <input type="hidden" id="quantity" name="id_prd" value="<?= $id_prd ?>">
            <div class="icon-arrow"><i class="fa-solid fa-caret-down"></i></div>
          </div>
          <ul id="dropdown-quantity" style="display: none;">
            <li id="downshift-item-1" class="dropdown-quantity__item" onclick="changeQuantity(this)">1</li>
            <li id="downshift-item-2" class="dropdown-quantity__item" onclick="changeQuantity(this)">2</li>
            <li id="downshift-item-3" class="dropdown-quantity__item" onclick="changeQuantity(this)">3</li>
            <li id="downshift-item-4" class="dropdown-quantity__item" onclick="changeQuantity(this)">4</li>
            <li id="downshift-item-5" class="dropdown-quantity__item" onclick="changeQuantity(this)">5</li>
            <li id="downshift-item-6" class="dropdown-quantity__item" onclick="changeQuantity(this)">6</li>
            <li id="downshift-item-7" class="dropdown-quantity__item" onclick="changeQuantity(this)">7</li>
            <li id="downshift-item-8" class="dropdown-quantity__item" onclick="changeQuantity(this)">8</li>
            <li id="downshift-item-9" class="dropdown-quantity__item" onclick="changeQuantity(this)">9</li>
          </ul>
          <div class="annotation">còn hàng</div>
        </div>
        <div class="btn-add-to-cart">
          <input class="btn-submit" type="submit" name="addtocart" value="Thêm vào giỏ hàng" />
        </div>

        </form>
        <!-- end form -->
        <div class="btns-option dis-between">
          <div class="btns-option__item">Đã thêm vào danh sách mong muốn</div>
          <div class="btns-option__item"><a href="#">tìm sản phẩm còn hàng trong cửa hàng</a></div>
        </div>
        <div class="sharing-section">
          <div class="title">chia sẻ</div>
          <div class="wrapper-link">
            <div class="btn-link"><i class="fa-brands fa-twitter"></i></div>
            <div class="btn-link"><i class="fa-brands fa-facebook"></i></div>
          </div>
        </div>
      </div>
    </div>
    <div class="contents-cards">
      <div class="wrapper-title-styling">
        <h2 class="styling-section-title">
          Gợi ý phối đồ từ StyleHint
        </h2>
        <p>Gợi ý phối đồ từ cộng đồng quốc tế</p>
      </div>
      <div class="row">
        <div class="styling-item">
          <img src="<?= $urlImage ?>styleHint_thumb1.jpg" alt="styling image">
          <div class="user-info">
            <div class="user-img">
              <img src="<?= $urlImage ?>styleHint1.jpg" alt="user">
            </div>
            <div class="size-user__wrapper">
              <div class="size-use__info-user">
                <div class="name">Toey</div>
                <div class="height">158 cm</div>
              </div>
              <div class="size-use__sizing">
                Kích cỡ: M
              </div>
            </div>
          </div>
        </div>
        <div class="styling-item">
          <img src="<?= $urlImage ?>styleHint_thumb1.jpg" alt="styling image">
          <div class="user-info">
            <div class="user-img">
              <img src="<?= $urlImage ?>styleHint1.jpg" alt="user">
            </div>
            <div class="size-user__wrapper">
              <div class="size-use__info-user">
                <div class="name">Yanya</div>
                <div class="height">156 cm</div>
              </div>
              <div class="size-use__sizing">
                Kích cỡ: M
              </div>
            </div>
          </div>
        </div>
      </div>.
      <div class="recently-viewed__wrapper">
        <div class="title">đã xem gần đây</div>
        <div class="recently-viewed___products-grid">
          <div class="contents-cards__prd">
            <a href="#">
              <img src="<?= $urlImage ?>appBenefits_1.jpg" class="contents-cards__prd-img" alt="" />
              <div class="contents-cards__prd-colors">
                <div class="prd-colors-brown"></div>
                <div class="prd-colors-black"></div>
              </div>
              <div class="contents-cards__prd-gender-size">
                <div class="prd-gender">Nữ</div>
                <div class="prd-size">S-L</div>
              </div>
              <div class="contents-cards__prd-name">
                áo khoác vải nhung hai hàng nút
              </div>
              <div class="contents-cards__prd-original-price">
                1962000 VND
              </div>
              <div class="contents-cards__prd-sale-price">
                1668000 VND
              </div>
              <div class="contents-cards__prd-status">Sale</div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script src="<?php echo base_url('assets/customer/js/home.js'); ?>"></script>
  <script src="<?php echo base_url('assets/customer/js/slick-detailprd.js'); ?>"></script>
  <script src="<?php echo base_url('assets/customer/js/slick.js'); ?>"></script>