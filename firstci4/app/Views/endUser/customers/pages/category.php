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
                        <li class="dropdown-list__item"><?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']);?></li>
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
                        <li class="dropdown-list__item"><?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']);?></li>
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
    <div class="contents-cards-w">
        <h1 class="h1 title-top">
            <?php if ($gioitinh == "woman") {
                echo "NỮ";
            } ?>
            <?php if ($gioitinh == "man") {
                echo "NAM";
            } ?>
            <?php if ($gioitinh == "baby") {
                echo "TRẺ EM";
            } ?>
            <?php if ($gioitinh == "nonbaby") {
                echo "TRẺ SƠ SINH";
            } ?>
        </h1>
    </div>
    <?php
    $urlImage = base_url('assets/uploads/');
    ?>
    <div class="contents-cards-w">
        <div class="img-banner-top">
            <img src="<?php echo $urlImage ?>banner_categories_1_<?= $gioitinh ?>.jpg" alt="banner">
        </div>
    </div>
    <div class="contents-cards-w">
        <div class="img-banner-top">
            <img src="<?php echo $urlImage ?>banner_categories_2_<?= $gioitinh ?>.jpg" alt="banner">
        </div>
    </div>
    <div class="contents-cards-w">
        <h2 class="h2 text-center special-category__title">danh mục nổi bật</h2>
        <div class="special-category__items grid-container">
            <div class="special-category__item">
                <a href="#">
                    <div class="special-category__item-img">
                        <img src="<?php echo $urlImage ?>thumbCategory_1.jpg" alt="" class="special-category__item-img">
                    </div>
                    <span class="title">đồ mặc ngoài</span>
                </a>
            </div>
            <div class="special-category__item">
                <a href="#">
                    <div class="special-category__item-img">
                        <img src="<?php echo $urlImage ?>thumbCategory_2.jpg" alt="" class="special-category__item-img">
                    </div>
                    <span class="title">ĐỒ NỈ</span>
                </a>
            </div>
            <div class="special-category__item">
                <a href="#">
                    <div class="special-category__item-img">
                        <img src="<?php echo $urlImage ?>thumbCategory_3.jpg" alt="" class="special-category__item-img">
                    </div>
                    <span class="title">ÁO LEN</span>
                </a>
            </div>
            <div class="special-category__item">
                <a href="#">
                    <div class="special-category__item-img">
                        <img src="<?php echo $urlImage ?>thumbCategory_4.jpg" alt="" class="special-category__item-img">
                    </div>
                    <span class="title">ÁO GIẢ LÔNG CỪU</span>
                </a>
            </div>
            <div class="special-category__item">
                <a href="#">
                    <div class="special-category__item-img">
                        <img src="<?php echo $urlImage ?>thumbCategory_1.jpg" alt="" class="special-category__item-img">
                    </div>
                    <span class="title">ÁO SƠ MI</span>
                </a>
            </div>
            <div class="special-category__item">
                <a href="#">
                    <div class="special-category__item-img">
                        <img src="<?php echo $urlImage ?>thumbCategory_1.jpg" alt="" class="special-category__item-img">
                    </div>
                    <span class="title">ÁO THUN</span>
                </a>
            </div>
            <div class="special-category__item">
                <a href="#">
                    <div class="special-category__item-img">
                        <img src="<?php echo $urlImage ?>thumbCategory_1.jpg" alt="" class="special-category__item-img">
                    </div>
                    <span class="title">quần dài</span>
                </a>
            </div>
        </div>
    </div>
    <div class="contents-cards-w">
        <div class="alert-wrapper">
            <div class="alert-title"><span>thông báo</span></div>
            <div class="alert-link">
                <a href="#">- Thay đổi thuế GTGT</a>
            </div>
            <div class="alert-link">
                <a href="#">- Điều Chỉnh Giá Đặc Biệt (Online và Tất Cả Cửa Hàng)</a>
            </div>
        </div>
    </div>

    <div class="contents-cards-w">
        <div class="special-title__wrapper">
            <h2 class="h2 title">
                <span>Chủ Đề Nổi Bật</span>
            </h2>
        </div>
        <div class="contents-special_title">
            <div class="contents-cards___products-grid swipper-spetitle">
                <div class="contents-cards__prd">
                    <a href="#">
                        <div class="special_title__about-img">
                            <img src="<?php echo $urlImage ?>spetitle_1.jpg" alt="">
                        </div>
                        <div class="special_title__about-title">ƯU ĐÃI ĐỘC QUYỀN CHỈ CÓ TẠI ỨNG DỤNG</div>
                        <div class="special_title__about-des">Giá đặc biệt chỉ dành cho thành viên ứng dụng. Scan Mã ID Thành Viên Ứng Dụng trước khi thanh toán tại cửa hàng để nhận giá ưu đãi.</div>
                    </a>
                </div>
                <div class="contents-cards__prd">
                    <a href="#">
                        <div class="special_title__about-img">
                            <img src="<?php echo $urlImage ?>spetitle_2.jpg" alt="">
                        </div>
                        <div class="special_title__about-title">COUPON CHO ĐƠN HÀNG ĐẦU TIÊN</div>
                        <div class="special_title__about-des">Tải ứng dụng UNIQLO ngay và tận hưởng coupon 150.000VND cho đơn hàng đầu tiên trên app.</div>
                    </a>
                </div>
                <div class="contents-cards__prd">
                    <a href="#">
                        <div class="special_title__about-img">
                            <img src="<?php echo $urlImage ?>spetitle_1.jpg" alt="">
                        </div>
                        <div class="special_title__about-title">QUÀ TẶNG DÀNH RIÊNG CHO UNIQLO ONLINE</div>
                        <div class="special_title__about-des">Từ 6 -12/10, nhận 01 túi du lịch nhỏ đa năng khi mua đơn hàng có ít nhất 01 sản phẩm Khuyến Mãi Có Hạn trên Ứng dụng & Website UNIQLO.</div>
                    </a>
                </div>
                <div class="contents-cards__prd">
                    <a href="#">
                        <div class="special_title__about-img">
                            <img src="<?php echo $urlImage ?>spetitle_1.jpg" alt="">
                        </div>
                        <div class="special_title__about-title">ƯU ĐÃI KHI TẢI ỨNG DỤNG StyleHint</div>
                        <div class="special_title__about-des">Tải ngay ứng dụng StyleHint và bạn sẽ nhận được mã giảm giá 150.000 VNĐ cho đơn hàng mua sắm tiếp theo.</div>
                    </a>
                </div>
                <div class="contents-cards__prd">
                    <a href="#">
                        <div class="special_title__about-img">
                            <img src="<?php echo $urlImage ?>spetitle_1.jpg" alt="">
                        </div>
                        <div class="special_title__about-title">ƯU ĐÃI KHI TẢI ỨNG DỤNG StyleHint</div>
                        <div class="special_title__about-des">Tải ngay ứng dụng StyleHint và bạn sẽ nhận được mã giảm giá 150.000 VNĐ cho đơn hàng mua sắm tiếp theo.</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="contents-cards-w">
        <div class="new-prd__container">
            <h2 class="h2 title">
                <span>hàng mới về</span>
            </h2>
        </div>
        <div class="new-prd__collection">
            <div class="w25">
                <div class="image-wrapper">
                    <img src="<?php echo $urlImage ?>thumbnail_dmn01_3_pink.jpg" alt="">
                </div>
                <h3 class="h3 title">
                    <span>Uniqlo U Quần Vải Jersey Mềm</span>
                </h3>
                <div class="description">Thiết kế quần cách điệu, ống suông và cạp co giãn thoải mái.</div>
                <div class="price-original">784.000 VND</div>
            </div>
            <div class="w75">
            <div class="content-full-main">
            <?php foreach ($products as $col) {
            ?>
              <div class="contents-cards__prd">
                <a class="link-prd" href="<?php echo base_url('user/detailProduct') . '?idsanpham=' . $col['product_id'] ?>&sku=<?= $col['sku']; ?>&gioitinh=<?= $col['gender'] ?>&colorUnit=1">
                  <?php
                  $dataThumbnail = json_decode($col['thumbnail']);
                  foreach ((array)$dataThumbnail as $key => $value) :
                    if($key == 0):
                            echo "<img src='". $urlImage . $value . "' class='contents-cards__prd-img' alt='product'>";
                    endif;
                  endforeach; 
                  ?>

                  <div class="contents-cards__prd-colors">

                    <?php
                    if (count($attributeProduct) > 0) { 
                    ?>
                      <?php
                      foreach ($attributeProduct as $row) {
                        if ($row['product_id'] == $col['product_id']) {
                          if ($row['name'] == 'color') {
                            $arrayUnit = explode(", ", $row['unit']);
                            foreach ($arrayUnit as $item) {
                      ?>
                              <div class='prd-colors-brown' style='background-color: <?php echo $item ?>'></div>
                      <?php
                            }
                          }
                        }
                      }
                    }
                    ?>
                  </div>
                  <div class="contents-cards__prd-gender-size">
                    <div class="prd-gender"><?php if ($col['gender'] == "woman") {
                                              echo "Nữ";
                                            } ?></div>
                    <div class="prd-size">S-L</div>
                  </div>
                  <div class="contents-cards__prd-name">
                    <?php echo $col['title']; ?>
                  </div>
                  <div class="contents-cards__prd-original-price">
                    <?php echo $col['price']; ?>
                  </div>
                  <div class="contents-cards__prd-sale-price">
                    <?php echo $col['price']; ?>
                  </div>
                  <div class="contents-cards__prd-status">Sale</div>
                </a>
              </div>
            <?php
            }
            ?>
            </div>
        </div>
        </div>
        <a href="#">
            <div class="margin-wrapper">
                <span class="btn-horizonal">
                    Xem Thêm
                </span>
            </div>
        </a>
    </div>

    <div class="contents-cards-w">
        <div class="img-banner-top comming-soon-banner">
            <img src="<?php echo $urlImage ?>thumbnail_dmn01_3_pink.jpg" alt="banner">
        </div>
    </div>

    <div class="contents-cards-w">
        <div class="new-prd__container">
            <h2 class="h2 title">
                <span>must buy</span>
            </h2>
        </div>
        <div class="new-prd__collection">
            <div class="new-prd__image-plus">
                <div class="image-wrapper">
                    <img src="<?php echo $urlImage ?>thumbnail_at02_1_man" alt="">
                </div>
                <h3 class="h3 title">
                    <span>Uniqlo U Quần Vải Jersey Mềm</span>
                </h3>
                <div class="description">Thiết kế quần cách điệu, ống suông và cạp co giãn thoải mái.</div>
                <div class="price-original">784.000 VND</div>
            </div>
            <div class="new-prd__list three-column">
                <div class="grid-row">
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumbnail_at02_1_man.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-beige"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                        <div class="gender-size__right">xs-xxl</div>
                                    </div>
                                    <h3 class="h3 description-text">Áo Khoác Giả Lông Cừu Loại Dày Kéo Khóa Dài Tay</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                        <div class="status-text">Sản phẩm được làm từ chất liệu tái chế</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>686.000</span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumbnail_at02_1_man.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-beige"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                    </div>
                                    <h3 class="h3 description-text">Doraemon Nhồi Bông</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                        <div class="status-text">Sản phẩm được làm từ chất liệu tái chế</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>489.000 </span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumbnail_at02_1_man.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-beige"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                        <div class="gender-size__right">xs-xxl</div>
                                    </div>
                                    <h3 class="h3 description-text">Hybrid Down Áo Khoác Phao</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>2.944.000 </span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid-row">
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumbnail_at02_1_man.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-beige"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                        <div class="gender-size__right">xs-xxl</div>
                                    </div>
                                    <h3 class="h3 description-text">Áo Khoác Giả Lông Cừu Loại Dày Kéo Khóa Dài Tay</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                        <div class="status-text">Sản phẩm được làm từ chất liệu tái chế</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>686.000</span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumbnail_at02_1_man.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-beige"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                        <div class="gender-size__right">xs-xxl</div>
                                    </div>
                                    <h3 class="h3 description-text">Áo Khoác Giả Lông Cừu Loại Dày Kéo Khóa Dài Tay</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                        <div class="status-text">Sản phẩm được làm từ chất liệu tái chế</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>686.000</span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumbnail_at02_1_man.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-beige"></li>
                                            <li class="color-tip bg-color-brown"></li>
                                            <li class="color-tip bg-color-pink"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                        <div class="gender-size__right">xs-xxl</div>
                                    </div>
                                    <h3 class="h3 description-text">Áo Khoác Giả Lông Cừu Loại Dày Kéo Khóa Dài Tay</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                        <div class="status-text">Sản phẩm được làm từ chất liệu tái chế</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>686.000</span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid-row">
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumbnail_at02_1_man.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-blue"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                        <div class="gender-size__right">xs-xxl</div>
                                    </div>
                                    <h3 class="h3 description-text">Áo Khoác Giả Lông Cừu Loại Dày Kéo Khóa Dài Tay</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                        <div class="status-text">Sản phẩm được làm từ chất liệu tái chế</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>686.000</span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumbnail_at02_1_man.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-green"></li>
                                            <li class="color-tip bg-color-red"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                        <div class="gender-size__right">xs-xxl</div>
                                    </div>
                                    <h3 class="h3 description-text">Áo Khoác Giả Lông Cừu Loại Dày Kéo Khóa Dài Tay</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                        <div class="status-text">Sản phẩm được làm từ chất liệu tái chế</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>686.000</span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumbnail_at02_1_man.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-beige"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                        <div class="gender-size__right">xs-xxl</div>
                                    </div>
                                    <h3 class="h3 description-text">Áo Khoác Giả Lông Cừu Loại Dày Kéo Khóa Dài Tay</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                        <div class="status-text">Sản phẩm được làm từ chất liệu tái chế</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>686.000</span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="margin-wrapper">
                <span class="btn-horizonal">
                    Xem Thêm
                </span>
            </div>
        </a>
    </div>

    <div class="contents-cards-w">
        <div class="recently-viewed__wrapper">
            <div class="title">đã xem gần đây</div>
            <div class="recently-viewed___products-grid  swipper-horizonal">
                <div class="contents-cards__prd">
                    <a href="#">
                        <img src="<?php echo $urlImage ?>thumnail-dmn02_5.jpg" class="contents-cards__prd-img" alt="" />
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
                <div class="contents-cards__prd">
                    <a href="#">
                        <img src="<?php echo $urlImage ?>thumnail-dmn02_5.jpg" class="contents-cards__prd-img" alt="" />
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
                <div class="contents-cards__prd">
                    <a href="#">
                        <img src="<?php echo $urlImage ?>thumnail-dmn02_5.jpg" class="contents-cards__prd-img" alt="" />
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
                <div class="contents-cards__prd">
                    <a href="#">
                        <img src="<?php echo $urlImage ?>thumnail-dmn02_5.jpg" class="contents-cards__prd-img" alt="" />
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
                <div class="contents-cards__prd">
                    <a href="#">
                        <img src="<?php echo $urlImage ?>thumnail-dmn02_5.jpg" class="contents-cards__prd-img" alt="" />
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

    <div class="contents-cards-w">
        <div class="new-prd__container">
            <h2 class="h2 title">
                <span>giá mới</span>
            </h2>
        </div>
        <div class="new-prd__collection">
            <div class="new-prd__image-plus">
                <div class="image-wrapper">
                    <img src="<?php echo $urlImage ?>thumnail-dmn02_4.jpg" alt="">
                </div>
                <h3 class="h3 title">
                    <span>Uniqlo U Quần Vải Jersey Mềm</span>
                </h3>
                <div class="description">Thiết kế quần cách điệu, ống suông và cạp co giãn thoải mái.</div>
                <div class="price-original">784.000 VND</div>
            </div>
            <div class="new-prd__list three-column">
                <div class="grid-row">
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumnail-dmn02_4.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-beige"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                        <div class="gender-size__right">xs-xxl</div>
                                    </div>
                                    <h3 class="h3 description-text">Áo Khoác Giả Lông Cừu Loại Dày Kéo Khóa Dài Tay</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                        <div class="status-text">Sản phẩm được làm từ chất liệu tái chế</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>686.000</span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumnail-dmn02_4.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-beige"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                    </div>
                                    <h3 class="h3 description-text">Doraemon Nhồi Bông</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                        <div class="status-text">Sản phẩm được làm từ chất liệu tái chế</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>489.000 </span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumnail-dmn02_4.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-beige"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                        <div class="gender-size__right">xs-xxl</div>
                                    </div>
                                    <h3 class="h3 description-text">Hybrid Down Áo Khoác Phao</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>2.944.000 </span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid-row">
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumnail-dmn02_4.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-beige"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                        <div class="gender-size__right">xs-xxl</div>
                                    </div>
                                    <h3 class="h3 description-text">Áo Khoác Giả Lông Cừu Loại Dày Kéo Khóa Dài Tay</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                        <div class="status-text">Sản phẩm được làm từ chất liệu tái chế</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>686.000</span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumnail-dmn02_4.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-beige"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                        <div class="gender-size__right">xs-xxl</div>
                                    </div>
                                    <h3 class="h3 description-text">Áo Khoác Giả Lông Cừu Loại Dày Kéo Khóa Dài Tay</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                        <div class="status-text">Sản phẩm được làm từ chất liệu tái chế</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>686.000</span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumnail-dmn02_4.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-beige"></li>
                                            <li class="color-tip bg-color-brown"></li>
                                            <li class="color-tip bg-color-pink"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                        <div class="gender-size__right">xs-xxl</div>
                                    </div>
                                    <h3 class="h3 description-text">Áo Khoác Giả Lông Cừu Loại Dày Kéo Khóa Dài Tay</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                        <div class="status-text">Sản phẩm được làm từ chất liệu tái chế</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>686.000</span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid-row">
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumnail-dmn02_4.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-blue"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                        <div class="gender-size__right">xs-xxl</div>
                                    </div>
                                    <h3 class="h3 description-text">Áo Khoác Giả Lông Cừu Loại Dày Kéo Khóa Dài Tay</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                        <div class="status-text">Sản phẩm được làm từ chất liệu tái chế</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>686.000</span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumnail-dmn02_4.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-green"></li>
                                            <li class="color-tip bg-color-red"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                        <div class="gender-size__right">xs-xxl</div>
                                    </div>
                                    <h3 class="h3 description-text">Áo Khoác Giả Lông Cừu Loại Dày Kéo Khóa Dài Tay</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                        <div class="status-text">Sản phẩm được làm từ chất liệu tái chế</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>686.000</span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="#">
                            <div class="product-card">
                                <div class="image-section">
                                    <img src="<?php echo $urlImage ?>thumnail-dmn02_4.jpg" alt="">
                                </div>
                                <div class="info">
                                    <div class="color-column">
                                        <ul class="color-tips">
                                            <li class="color-tip bg-color-beige"></li>
                                        </ul>
                                    </div>
                                    <div class="gender-size">
                                        <div class="gender-size__left">unisex</div>
                                        <div class="gender-size__right">xs-xxl</div>
                                    </div>
                                    <h3 class="h3 description-text">Áo Khoác Giả Lông Cừu Loại Dày Kéo Khóa Dài Tay</h3>
                                    <ul class="status-new-prd">
                                        <div class="status-text">New</div>
                                        <div class="status-text">Sản phẩm được làm từ chất liệu tái chế</div>
                                    </ul>
                                    <div class="new-prd-price">
                                        <span>686.000</span>
                                        <abbr title="Vietnamese dong" class="price-currency">VND</abbr>
                                    </div>
                                    <div class="rating">
                                        .
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="margin-wrapper">
                <span class="btn-horizonal">
                    Xem Thêm
                </span>
            </div>
        </a>
    </div>

    <div class="contents-cards-w">
        <div class="special-title__wrapper">
            <h2 class="h2 title">
                <span>Tin tức nổi bật</span>
            </h2>
        </div>
        <div class="contents-special_title">
            <div class="contents-cards___products-grid swipper-spetitle">
                <div class="contents-cards__prd">
                    <a href="#">
                        <div class="special_title__about-img">
                            <img src="<?php echo $urlImage ?>speNews_1.jpg" alt="">
                        </div>
                        <div class="special_title__about-title">ƯU ĐÃI ĐỘC QUYỀN CHỈ CÓ TẠI ỨNG DỤNG</div>
                        <div class="special_title__about-des">Giá đặc biệt chỉ dành cho thành viên ứng dụng. Scan Mã ID Thành Viên Ứng Dụng trước khi thanh toán tại cửa hàng để nhận giá ưu đãi.</div>
                    </a>
                </div>
                <div class="contents-cards__prd">
                    <a href="#">
                        <div class="special_title__about-img">
                            <img src="<?php echo $urlImage ?>speNews_2.jpg" alt="">
                        </div>
                        <div class="special_title__about-title">COUPON CHO ĐƠN HÀNG ĐẦU TIÊN</div>
                        <div class="special_title__about-des">Tải ứng dụng UNIQLO ngay và tận hưởng coupon 150.000VND cho đơn hàng đầu tiên trên app.</div>
                    </a>
                </div>
                <div class="contents-cards__prd">
                    <a href="#">
                        <div class="special_title__about-img">
                            <img src="<?php echo $urlImage ?>speNews_3.jpg" alt="">
                        </div>
                        <div class="special_title__about-title">QUÀ TẶNG DÀNH RIÊNG CHO UNIQLO ONLINE</div>
                        <div class="special_title__about-des">Từ 6 -12/10, nhận 01 túi du lịch nhỏ đa năng khi mua đơn hàng có ít nhất 01 sản phẩm Khuyến Mãi Có Hạn trên Ứng dụng & Website UNIQLO.</div>
                    </a>
                </div>
                <div class="contents-cards__prd">
                    <a href="#">
                        <div class="special_title__about-img">
                            <img src="<?php echo $urlImage ?>speNews_4.jpg" alt="">
                        </div>
                        <div class="special_title__about-title">ƯU ĐÃI KHI TẢI ỨNG DỤNG StyleHint</div>
                        <div class="special_title__about-des">Tải ngay ứng dụng StyleHint và bạn sẽ nhận được mã giảm giá 150.000 VNĐ cho đơn hàng mua sắm tiếp theo.</div>
                    </a>
                </div>
                <div class="contents-cards__prd">
                    <a href="#">
                        <div class="special_title__about-img">
                            <img src="<?php echo $urlImage ?>speNews_2.jpg" alt="">
                        </div>
                        <div class="special_title__about-title">ƯU ĐÃI KHI TẢI ỨNG DỤNG StyleHint</div>
                        <div class="special_title__about-des">Tải ngay ứng dụng StyleHint và bạn sẽ nhận được mã giảm giá 150.000 VNĐ cho đơn hàng mua sắm tiếp theo.</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="contents-cards-w">
        <div class="collection-special__wrapper">
            <h2 class="h2 title">
                <span>Bộ sưu tập đặc biệt</span>
            </h2>
            <div class="swipper-banner">
                <div class="img-banner-collection-special">
                    <img src="<?php echo $urlImage ?>speCollection_1.jpg" alt="banner">
                    <div class="banner-content right-location">
                        <h2 class="h2 title">UNIQLO : C</h2>
                        <div class="description">Một bộ sưu tập mới của nhà thiết kế người Anh Clare Waight Keller.</div>
                        <div class="btn-wrapper">
                            <a href="#">
                                <span class="btn-banner-link">xem thêm</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="img-banner-collection-special">
                    <img src="<?php echo $urlImage ?>speCollection_2.jpg" alt="banner">
                    <div class="banner-content right-location">
                        <h2 class="h2 title">UNIQLO : C</h2>
                        <div class="description">Một bộ sưu tập mới của nhà thiết kế người Anh Clare Waight Keller.</div>
                        <div class="btn-wrapper">
                            <a href="#">
                                <span class="btn-banner-link">xem thêm</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="img-banner-collection-special">
                    <img src="<?php echo $urlImage ?>speCollection_3.jpg" alt="banner">
                    <div class="banner-content right-location">
                        <h2 class="h2 title">UNIQLO : C</h2>
                        <div class="description">Một bộ sưu tập mới của nhà thiết kế người Anh Clare Waight Keller.</div>
                        <div class="btn-wrapper">
                            <a href="#">
                                <span class="btn-banner-link">xem thêm</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="img-banner-collection-special">
                    <img src="<?php echo $urlImage ?>speCollection_4.jpg" alt="banner">
                    <div class="banner-content right-location">
                        <h2 class="h2 title">UNIQLO : C</h2>
                        <div class="description">Một bộ sưu tập mới của nhà thiết kế người Anh Clare Waight Keller.</div>
                        <div class="btn-wrapper">
                            <a href="#">
                                <span class="btn-banner-link">xem thêm</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="margin-wrapper">
                <span class="btn-horizonal">
                    Xem Thêm
                </span>
            </div>
        </a>
    </div>

    <div class="contents-cards-w">
        <div class="special-title__wrapper">
            <h2 class="h2 title">
                <span>gợi ý phong cách</span>
            </h2>
        </div>
        <div class="img-banner-top mt-20">
            <img src="<?php echo $urlImage ?>recommendStylingBanner.jpg" alt="banner">
        </div>
        <a href="#">
            <div class="margin-wrapper">
                <span class="btn-horizonal">
                    Xem Thêm
                </span>
            </div>
        </a>
    </div>

    <div class="contents-cards-w">
        <div class="img-banner-top mt-20">
            <img src="<?php echo $urlImage ?>vvbanner.jpg" alt="banner">
        </div>
    </div>

    <div class="contents-cards-w">
        <div class="special-title__wrapper">
            <h2 class="h2 title">
                <span>về lifewear</span>
            </h2>
        </div>
        <div class="contents-special_title">
            <div class="contents-cards___products-grid swipper-spetitle">
                <div class="contents-cards__prd">
                    <a href="#">
                        <div class="special_title__about-img">
                            <img src="<?php echo $urlImage ?>lifeWear_1.jpg" alt="">
                        </div>
                        <div class="special_title__about-title">ƯU ĐÃI ĐỘC QUYỀN CHỈ CÓ TẠI ỨNG DỤNG</div>
                        <div class="special_title__about-des">Giá đặc biệt chỉ dành cho thành viên ứng dụng. Scan Mã ID Thành Viên Ứng Dụng trước khi thanh toán tại cửa hàng để nhận giá ưu đãi.</div>
                    </a>
                </div>
                <div class="contents-cards__prd">
                    <a href="#">
                        <div class="special_title__about-img">
                            <img src="<?php echo $urlImage ?>lifeWear_2.jpg" alt="">
                        </div>
                        <div class="special_title__about-title">COUPON CHO ĐƠN HÀNG ĐẦU TIÊN</div>
                        <div class="special_title__about-des">Tải ứng dụng UNIQLO ngay và tận hưởng coupon 150.000VND cho đơn hàng đầu tiên trên app.</div>
                    </a>
                </div>
                <div class="contents-cards__prd">
                    <a href="#">
                        <div class="special_title__about-img">
                            <img src="<?php echo $urlImage ?>lifeWear_3.jpg" alt="">
                        </div>
                        <div class="special_title__about-title">QUÀ TẶNG DÀNH RIÊNG CHO UNIQLO ONLINE</div>
                        <div class="special_title__about-des">Từ 6 -12/10, nhận 01 túi du lịch nhỏ đa năng khi mua đơn hàng có ít nhất 01 sản phẩm Khuyến Mãi Có Hạn trên Ứng dụng & Website UNIQLO.</div>
                    </a>
                </div>
                <div class="contents-cards__prd">
                    <a href="#">
                        <div class="special_title__about-img">
                            <img src="<?php echo $urlImage ?>lifeWear_4.jpg" alt="">
                        </div>
                        <div class="special_title__about-title">ƯU ĐÃI KHI TẢI ỨNG DỤNG StyleHint</div>
                        <div class="special_title__about-des">Tải ngay ứng dụng StyleHint và bạn sẽ nhận được mã giảm giá 150.000 VNĐ cho đơn hàng mua sắm tiếp theo.</div>
                    </a>
                </div>
                <div class="contents-cards__prd">
                    <a href="#">
                        <div class="special_title__about-img">
                            <img src="<?php echo $urlImage ?>lifeWear_2.jpg" alt="">
                        </div>
                        <div class="special_title__about-title">ƯU ĐÃI KHI TẢI ỨNG DỤNG StyleHint</div>
                        <div class="special_title__about-des">Tải ngay ứng dụng StyleHint và bạn sẽ nhận được mã giảm giá 150.000 VNĐ cho đơn hàng mua sắm tiếp theo.</div>
                    </a>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="margin-wrapper">
                <span class="btn-horizonal">
                    Xem Thêm
                </span>
            </div>
        </a>
    </div>

    <div class="contents-cards-w">
        <div class="special-title__wrapper">
            <h2 class="h2 title">
                <span>live station</span>
            </h2>
        </div>
        <div class="grid three">
            <div class="grid-item">
                <a href="#">
                    <div class="media-wrapper">
                        <div class="image">
                            <img src="<?php echo $urlImage ?>liveStation3.jpg" alt="">
                        </div>
                        <div class="info">
                            <div class="title">RA MẮT BỘ SƯU TẬP KAWS UT</div>
                            <div class="description">
                                Khám phá các thiết kế độc đáo và đa dạng từ BST KAWS UT.
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-item">
                <a href="#">
                    <div class="media-wrapper">
                        <div class="image">
                            <img src="<?php echo $urlImage ?>liveStation2.jpg" alt="">
                        </div>
                        <div class="info">
                            <div class="title">TRIỂN LÃM RA MẮT BST LifeWear THU/ĐÔNG 2023</div>
                            <div class="description">
                                Đón chờ và khám phá Bộ sưu tập UNIQLO LifeWear Thu/Đông 2023 với nhiều kiểu dáng và phong cách mới mẻ và thịnh hành nhất.
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-item">
                <a href="#">
                    <div class="media-wrapper">
                        <div class="image">
                            <img src="<?php echo $urlImage ?>liveStation.jpg" alt="">
                        </div>
                        <div class="info">
                            <div class="title">Chào đón TUẦN LỄ CẢM ƠN</div>
                            <div class="description">
                                Đón chờ những ưu đãi hấp dẫn nhân TUẦN LỄ CẢM ƠN 26.05 - 01.06.2023 tại tất cả cửa hàng UNIQLO.
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="contents-utility-apps">
        <div class="utility-apps__title text-center">TIỆN ÍCH TỪ ỨNG DỤNG</div>
        <div class="utility-apps__about">
            <a href="#">
                <div class="utility-apps__about-item">
                    <div class="utility-apps__about-img">
                        <img src="<?php echo $urlImage ?>appBenefits_1.jpg" alt="">
                    </div>
                    <div class="utility-apps__about-title">ƯU ĐÃI ĐỘC QUYỀN CHỈ CÓ TẠI ỨNG DỤNG</div>
                    <div class="utility-apps__about-des">Giá đặc biệt chỉ dành cho thành viên ứng dụng. Scan Mã ID Thành Viên Ứng Dụng trước khi thanh toán tại cửa hàng để nhận giá ưu đãi.</div>
                </div>
            </a>
            <a href="#">
                <div class="utility-apps__about-item">
                    <div class="utility-apps__about-img">
                        <img src="<?php echo $urlImage ?>appBenefits_2.jpg" alt="">
                    </div>
                    <div class="utility-apps__about-title">WELCOME COUPON</div>
                    <div class="utility-apps__about-des">Tải ứng dụng UNIQLO ngay và trải nghiệm welcome coupon cho đơn hàng đầu tiên trên app.</div>
                </div>
            </a>
            <a href="#">
                <div class="utility-apps__about-item">
                    <div class="utility-apps__about-img">
                        <img src="<?php echo $urlImage ?>appBenefits_3.jpg" alt="">
                    </div>
                    <div class="utility-apps__about-title">QUÉT MÃ VẠCH SẢN PHẨM</div>
                    <div class="utility-apps__about-des">Quét mã vạch trên sản phẩm để dễ dàng kiểm tra xem sản phẩm còn hàng online hay trong cửa hàng.</div>
                </div>
            </a>
            <a href="#">
                <div class="utility-apps__about-item">
                    <div class="utility-apps__about-img">
                        <img src="<?php echo $urlImage ?>appBenefits_4.jpg" alt="">
                    </div>
                    <div class="utility-apps__about-title">NHẬN THÔNG BÁO MỚI NHẤT</div>
                    <div class="utility-apps__about-des">Nhận các thông tin mới nhất về sản phẩm mới ra mắt, ưu đãi đặc biệt và các tin tức nổi bật.</div>
                </div>
            </a>
        </div>
        <a href="#">
            <div class="marginWrapper space-top">
                <span class="btn-back-horizontal">XEM THÊM VỀ ỨNG DỤNG UNIQLO</span>
            </div>
        </a>
    </div>

    <div class="contents-cards-w">
        <div class="special-title__wrapper">
            <h2 class="h2 title">
                <span>store location</span>
            </h2>
        </div>
        <div class="img-banner-top mt-20">
            <img src="<?php echo $urlImage ?>storeLocation.jpg" alt="banner">
        </div>
        <a href="#">
            <div class="margin-wrapper">
                <span class="btn-horizonal">
                    Xem Thêm
                </span>
            </div>
        </a>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo base_url('assets/customer/js/home.js') ?>"></script>
<script src="<?php echo base_url('assets/customer/js/slick.js') ?>"></script>