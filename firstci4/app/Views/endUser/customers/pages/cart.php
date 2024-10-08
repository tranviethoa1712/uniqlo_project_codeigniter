<!--menu-->
<div class="layout sticky">
  <div class="menu-wrapper " id="menu">
    <div class="menu-links">
      <h1 class="menu-links__logo">
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
            <a href=" <?php echo base_url('user/categoryPage?gioitinh=woman'); ?>">Nữ</a>
            <div class="dropdown-wrapper dropdown-woman">
              <div class="menu-links__dropdown-item-content">
                <div>
                  <span class="menu-links__list-item-title">áo</span>
                  <ul class="dropdown-list__items">
                    <?php
                    $urlListProduct = base_url('user/listProducts?iddanhmuc=');
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ÁO") {
                    ?>
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=woman"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=woman"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=woman"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=woman"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=woman"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=woman"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=woman"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=woman"><?php echo $value['name'] ?></a></li>
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
            <a href="<?php echo base_url('user/categoryPage?gioitinh=man'); ?>">Nam</a>
            <div class="dropdown-wrapper dropdown-man">
              <div class="menu-links__dropdown-item-content">
                <div>
                  <span class="menu-links__list-item-title">áo</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ÁO") {
                    ?>
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=man"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=man"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=man"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=man"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=man"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=man"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=man"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=man"><?php echo $value['name'] ?></a></li>
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
            <a href="<?php echo base_url('user/categoryPage?gioitinh=baby'); ?>">Trẻ em</a>
            <div class="dropdown-wrapper dropdown-baby">
              <div class="menu-links__dropdown-item-content">
                <div>
                  <span class="menu-links__list-item-title">áo</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ÁO") {
                    ?>
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=baby"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=baby"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=baby"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=baby"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=baby"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=baby"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=baby"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=baby"><?php echo $value['name'] ?></a></li>
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
            <a href="<?php echo base_url('user/categoryPage?gioitinh=nonbaby'); ?>">Trẻ em sơ sinh</a>
            <div class="dropdown-wrapper dropdown-non-baby">
              <div class="menu-links__dropdown-item-content">
                <div>
                  <span class="menu-links__list-item-title">áo</span>
                  <ul class="dropdown-list__items">
                    <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ÁO") {
                    ?>
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=nonbaby"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=nonbaby"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=nonbaby"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=nonbaby"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=nonbaby"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=nonbaby"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=nonbaby"><?php echo $value['name'] ?></a></li>
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
                        <li class="dropdown-list__item"><a href="<?php echo $urlListProduct . $value['category_id'] ?>&gioitinh=nonbaby"><?php echo $value['name'] ?></a></li>
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
      <a href="<?php echo base_url('user/myCart') ?>" class="menu-tools__cart">
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
      <a href="<?php echo base_url('user/myCart'); ?>" class="menu-tools__cart">
        <i class="fa-solid fa-cart-shopping"></i>
      </a>
    </li>
  </ul>
</div>
<!--end menu-->

<div class="contained">
  <div class="contents-cards">
    <h2 class="h2">
      <span class="title">giỏ hàng</span>
    </h2>
    <form method="post">
      <div class="mainwrapper">
        <div class="leftContainer">
          <?php
          if (!empty($_SESSION['customer_login'])) {
            if (empty($_SESSION['cart'])) {
              echo '<p style="font-size: 24px; text-align: center;">Hiện tại giỏ hàng đang trống!</p>';
            } else {
              $cart = $_SESSION['cart'];
              $i = 0;
              $total = 0;
              $shippingCost = 50000;
              foreach ($cart as $id => $row) :
                $i++;
                ?>
                <div class="list-cart-product">
                  <div class="panel-inner">
                    <div class="panel-contents">
                      <div class="image-section">
                        <a href="#">
                          <div class="product-image">
                            <?php
                            $dataThumbnail = json_decode($row['thumbnail']);
                            $j = 0;
                            foreach ((array)$dataThumbnail as $key) :
                              if($j > 0) {
                                break;
                              }
                              $urlImage = base_url('assets/uploads/');
                              echo "<img src='" . $urlImage  . $key . "' class='thumb-img' alt='product'>";
                              $j++;
                            endforeach;

                            ?>
                          </div>
                        </a>
                      </div>
                      <div class="product-content-container">
                        <div class="content-wrapper">
                          <div class="info">
                            <a href="#">
                              <p class="product-title"><?php echo $row['title'] ?></p>
                            </a>
                            <div class="sku-product">
                              <div class="left-text">Mã sản phẩm :</div>
                              <div class="right-text"><?php echo $row['sku'] ?></div>
                            </div>
                            <div class="propertity-product">
                              <div class="left-text">Màu sắc :</div>
                              <div class="right-text"><?php echo $row['color'] ?></div>
                            </div>
                            <div class="propertity-product">
                              <div class="left-text">Kích cỡ :</div>
                              <div class="right-text"></div><?php echo $row['size'] ?>
                            </div>
                            <div class="price-product">
                              <span class="price-original"><?php echo number_format($row['price'], 0, ',', '.') . ' VND'; ?></span>
                              <p class="priceHidden" style="display: none;"><?php echo $row['price']; ?></p>
                            </div>
                          </div>
                          <div class="product-right-column btn-delete-product" data-id="<?= $id ?>" onclick="DeleteProduct(this)">
                            <button class="product-close-button" type="button">
                              <span class="remove" style="font-size: 30px;">
                                <i class="fa-solid fa-xmark"></i> 
                              </span>
                            </button> 
                          </div>
                        </div>
                        <div class="box-bottom">
                          <div class="pulldown-wrapper">
                            <span class="label-quantity">Số lượng </span>
                            <div class="quantity-prd__wrapper">
                              <select class="btn-dropdown__quantity" name="quantity_product " data-id="<?= $id ?>" onchange="changeQuantity(this)">
                                <option selected="selected"><?php echo $row['quantity'] ?></option>
                                <option class="dropdown-quantity__item" data-id="<?php echo $id; ?>" value="1">1</option>
                                <option class="dropdown-quantity__item" data-id="<?php echo $id; ?>" value="2">2</option>
                                <option class="dropdown-quantity__item" data-id="<?php echo $id; ?>" value="3">3</option>
                                <option class="dropdown-quantity__item" data-id="<?php echo $id; ?>" value="4">4</option>
                                <option class="dropdown-quantity__item" data-id="<?php echo $id; ?>" value="5">5</option>
                                <option class="dropdown-quantity__item" data-id="<?php echo $id; ?>" value="6">6</option>
                                <option class="dropdown-quantity__item" data-id="<?php echo $id; ?>" value="7">7</option>
                                <option class="dropdown-quantity__item" data-id="<?php echo $id; ?>" value="8">8</option>
                                <option class="dropdown-quantity__item" data-id="<?php echo $id; ?>" value="9">9</option>
                              </select>
                            </div>
                          </div>
                          <div class="subtotal-wrapper">
                            <div class="title">tổng:&ensp;</div>
                            <div class="sum" class="price">
                              <?php
                              $sum = $row['quantity'] * $row['price'];
                              $total += $sum;
                              echo number_format($sum, 0, ',', '.') . ' VND';
                              ?>
                            </div>
                          </div>
                          <div style="display: none;" class="dotSum"><?php echo $sum; ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
              endforeach;
              ?>
        </div>
        <div class="rightContainer">
          <div style="display: none;" class="dotTotal"><?php echo $total; ?></div>
          <div class="order-summary">
            <div class="title-head">
              <span>Tổng đơn hàng</span>
              <span>| <?php echo $i; ?> Sản phẩm</span>
            </div>
            <div class="contents">
              <div class="row">
                <div class="left-text">Tổng cộng</div>
                <div class="right-text final-sum">
                  <?php
                  echo number_format($total, 0, ',', '.') . ' VND';
                  ?>
                </div>
              </div>
              <div class="row">
                <div class="left-text">Phí vận chuyển</div>
                <div class="right-text shipping-cost">
                  <?php
                  echo number_format($shippingCost, 0, ',', '.') . ' VND';
                  ?>
                </div>
              </div>
              <div class="row-total">
                <div class="left-text">tổng</div>
                <div class="right-text finalTotal">
                  <?php
                  $finalTotal = $total + $shippingCost;
                  echo number_format($finalTotal, 0, ',', '.') . ' VND';
                  ?>
                </div>
              </div>
              <!-- <div class="row">
                <div class="left-text">Đã bao gồm thuế giá trị gia tăng</div>
                <div class="right-text">61.630 VND</div>
              </div> -->
              <div class="row-total">
                <div class="left-text">Tổng đơn đặt hàng</div>
                <div class="right-text-end finalfinalTotal">
                  <?php echo number_format($finalTotal, 0, ',', '.') . ' VND'; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="focus-section">
            <div class="btn-cards">
              <button>
                <span class="left">
                  <span class="coupon"><i class="fa-solid fa-pager"></i></span>
                  <span class="text">Phiếu giảm giá</span>
                </span>
                <span class="arrow"><i class="fa-solid fa-chevron-right"></i></span>
              </button>
            </div>
          </div>
          <div class="focus-section-2">
            <div class="btn-cards">
              <button>
                <span class="left">
                  <span class="coupon"><i class="fa-solid fa-gift"></i></span>
                  <span class="text">Tùy chọn quà tặng</span>
                </span>
                <span class="arrow"><i class="fa-solid fa-chevron-right"></i></span>
              </button>
            </div>
          </div>
          <div class="tooltip-wrapper">
            <span class="text">
              Từ 24 - 31/10/2023, hoàn tiền 300.000VND khi thanh toán bằng thẻ JCB cho đơn hàng từ 1.500.000VND (giá trị thanh toán cuối cùng). Miễn phí giao hàng áp dụng cho đơn hàng giao tận nơi từ 1.500.000VND và tất cả các đơn nhận tại cửa hàng (Click & Collect).
            </span>
            <span class="icon">
              <i class="fa-solid fa-circle-info"></i>
            </span>
          </div>
          <div class="wrapper-button">
            <div class="button-wrapper">
              <a href="<?= base_url('user/myOrder') ?>">
                <div name="addToOrder" class="button-payment">
                  Thanh toán
                </div>
              </a>
            </div>
            <div class="button-wrapper">
              <a href="<?= base_url('user/homePage' . '?gioitinh=woman') ?>">
                <button class="button-shopping" type="button">Tiếp tục mua sắm</button>
              </a>
            </div>
          </div>
        </div>
    <?php
            }
          } else {
            echo "<h1>Hiện tại bạn chưa đăng nhập</h1>";
          }
    ?>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo base_url('assets/customer/js/home.js') ?>"></script>
<script src="<?php echo base_url('assets/customer/js/slick.js') ?>"></script>
<script src="<?php echo base_url('assets/customer/js/cart.js') ?>"></script>
<script src="<?php echo base_url('assets/customer/js/cartJquery.js') ?>"></script>