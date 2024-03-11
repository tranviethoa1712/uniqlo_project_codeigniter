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
      <a href="<?php if (!empty($_SESSION['customer_login'])) {
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
  <div class="layout-pad20">
    <div class="top-title">
      <span>Tư cách thành viên</span>
    </div>

    <div class="container-links">
      <div class="links-title">
        <span>Tư cách thành viên</span>
      </div>
      <ul class="links-wrapper">
        <li class="links-item selected"><a href="#">Hồ sơ</a></li>
        <li class="links-item"><a href="#">Phiếu giảm giá</a></li>
        <li class="links-item"><a href="#">Lịch sử mua hàng</a></li>
        <li class="links-item"><a href="#">Lịch sử đơn hàng</a></li>
      </ul>

      <div class="links-title">
        <span>Cài đặt hồ sơ</span>
      </div>
      <ul class="links-wrapper">
        <li class="links-item"><a href="#">Chỉnh sửa hồ sơ</a></li>
        <li class="links-item"><a href="#">Sổ địa chỉ</a></li>
        <li class="links-item"><a href="#">Tin nhắn văn bản và cài đặt riêng</a></li>
        <li class="links-item"><a href="#">Thay đổi mật khẩu của tôi</a></li>
        <li class="links-item"><a href="#">Thẻ của tôi</a></li>
        <li class="links-item"><a href="#">Hủy bỏ thành viên</a></li>
      </ul>
    </div>

    <div class="container-box">
      <div class="box-inner">
        <div>
          <div class="title-top">
            <span>Hồ sơ</span>
          </div>
          <div class="info-customer__box">
            <div class="info-customer__box-left">
              <div class="title">Địa chỉ email</div>
              <div class="detail">
                <?php
                if (!empty($_SESSION['customer_login'])) {
                  $row = $_SESSION['customer_login'];
                  foreach ($row as $key) {
                    echo $key['email'];
                  }
                }
                ?>
              </div>
            </div>
            <div class="info-customer__box-right">
              <div class="title">Sinh nhật</div>
              <div class="detail mb20">
                <?php
                if (!empty($_SESSION['customer_login'])) {
                  $row = $_SESSION['customer_login'];
                  foreach ($row as $key) {
                    echo $key['dob'];
                  }
                }
                ?>
              </div>
              <div class="title">Giới tính</div>
              <div class="detail">
                <?php
                if (!empty($_SESSION['customer_login'])) {
                  $row = $_SESSION['customer_login'];
                  foreach ($row as $key) {
                    if ($key['gender'] == "female") {
                      echo "Nam";
                    } else {
                      echo "Nữ";
                    }
                  }
                }
                ?>
              </div>
            </div>
          </div>
          <div class="horizonal-full"></div>
          <div class="info-customer__code">
            <div class="title">
              <span>Mã vạch thành viên</span>
            </div>
            <div class="barcode">
              <?php
                $urlImage = base_url('assets/uploads/');
              ?>
              <img src="<?= $urlImage ?>qr_code.jpg" alt="sku USer">
            </div>
            <div class="description">
              Vui lòng đưa mã vạch trên thẻ thành viên này cho nhân viên thu ngân khi bạn thanh toán cho sản phẩm đã mua.
            </div>
            <button class="btn">in mã vạch</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<script src="<?php base_url('assets/customer/js/home.js'); ?>"></script>