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
      <a href="<?= base_url('user/logout') ?>">
        <button class="menu-tools__search">
          <i class="fa-solid fa-arrow-right-from-bracket"></i>
        </button>
      </a>
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

<!--body-->
<div class="contained">

  <!--intro-->
  <div class="contents-intro">
    <h1>
      <span class="contents-intro__title">
        Mua sắm online cùng ưu đãi đặc biệt
      </span>
    </h1>
    <ul class="contents-intro__grid">
      <li class="grid-item">
        <a href="#">
          <div class="grid-inner">
            <span>giá mới</span>
          </div>
        </a>
      </li>
      <li class="grid-item">
        <a href="#">
          <div class="grid-inner">
            <span>bst kaws ut</span>
          </div>
        </a>
      </li>
      <li class="grid-item">
        <a href="#">
          <div class="grid-inner">
            <span>sản phẩm giá đặc biệt</span>
          </div>
        </a>
      </li>
      <li class="grid-item">
        <a href="#">
          <div class="grid-inner">
            <span>quà tặng đặc biệt</span>
          </div>
        </a>
      </li>
    </ul>
  </div>
  <!--end intro-->

  <!--new price list-->
  <div class="contents-cards">
    <h2>
      <span class="contents-cards__title"> giá mới </span>
    </h2>
    <nav class="contents-cards__tabs">
      <ul class="contents-cards__tablist">
        <a href="<?php echo $urlHome . '?gioitinh=woman' ?>">
          <li class="contents-cards__tabs-item <?php if ($gioitinh == "woman") {
                                                  echo " active";
                                                } ?>" name="tabcont-famale"">
                <span class=" contents-cards__item-title"> nữ </span>
          </li>
        </a>
        <a href="<?php echo $urlHome . '?gioitinh=man' ?>">
          <li class="contents-cards__tabs-item <?php if ($gioitinh == "man") {
                                                  echo " active";
                                                } ?>" name="tabcont-male">
            <span class="contents-cards__item-title"> nam </span>
          </li>
        </a>
        <a href="<?php echo $urlHome . '?gioitinh=baby' ?>">
          <li class="contents-cards__tabs-item <?php if ($gioitinh == "baby") {
                                                  echo " active";
                                                } ?>" name="tabcont-baby">
            <span class="contents-cards__item-title"> trẻ em </span>
          </li>
        </a>
        <a href="<?php echo $urlHome . '?gioitinh=nonbaby' ?>">
          <li class="contents-cards__tabs-item <?php if ($gioitinh == "nonbaby") {
                                                  echo " active";
                                                } ?>" name="tabcont-nonbaby">
            <span class="contents-cards__item-title">
              trẻ sơ sinh
            </span>
          </li>
        </a>
      </ul>
    </nav>
    <nav class="contents-cards__tabs-holder">
      <section class="contents-cards__tabs-content active">
        <div class="contents-cards___products-grid">
          <?php foreach ($productGender as $row) : ?>

            <div class="contents-cards__prd">
              <a href="<?php echo base_url('user/detailProduct?idsanpham=') . $row['product_id'] ?>&sku=<?= $row['sku']; ?>&gioitinh=<?= $row['gender'] ?>&colorUnit=1">
                <?php
                $dataThumbnail = json_decode($row['thumbnail']);
                foreach ((array)$dataThumbnail as $key => $value) :
                  if($key == 0):
                          echo "<img src='". $urlImage . $value . "' class='contents-cards__prd-img' alt='product'>";
                  endif;
                endforeach;
                ?>
                <div class="contents-cards__prd-colors">
                </div>
                <div class="contents-cards__prd-gender-size">
                  <div class="prd-gender"><?php echo $row['gender'] ?></div>
                  <div class="prd-size">S-L</div>
                </div>
                <div class="contents-cards__prd-name">
                  <?php
                  echo $row['title'];
                  ?>
                </div>
                <div class="contents-cards__prd-original-price">
                  <?php
                  echo $row['price'];
                  ?>
                </div>
                <div class="contents-cards__prd-sale-price">
                  <?php
                  echo $row['price'];
                  ?>
                </div>
                <div class="contents-cards__prd-status">Sale</div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    </nav>
    <a href="#">
      <div class="marginWrapper">
        <span class="btn-back-horizontal">XEM THÊM</span>
      </div>
    </a>
  </div>
  <!--end new price list-->

  <!--banner media-->
  <div class="contents-banner">
    <h2>
      <span class="contents-banner__title"> ra mắt bst kaws ut </span>
    </h2>
    <a href="#">
      <article class="contents-banner__banner-media">
        <div class="banner-media">
          <div class="layout-media">
            <video autoplay muted loop plays-inline class="banner-media__back">
              <source src="<?= $urlImage ?>videoplayback.mp4" type="video/mp4" />
            </video>
            <div class="contents-media">
              <h2 class="contents-media__title">KAWS UT</h2>
              <div class="contents-media__des">
                Độc quyền trên toàn thế giới! Ra mắt BST áo thun UT độc quyền
                tại UNIQLO nhân sự kiện ra mắt của ấn bản sách nghệ thuật mới
                từ KAWS.
              </div>
              <div class="contents-media__copyright-text">©KAWS</div>
            </div>
          </div>
        </div>
      </article>
    </a>
  </div>
  <!--end banner media-->

  <!--special-price-->
  <div class="contents-cards">
    <div class="spe-price__about">
      <div class="spe-price__title">sản phẩm giá đặc biệt</div>
      <div class="spe-price__banner">
        <img src="<?= $urlImage ?>bannerHome.jpg" alt="">
      </div>
    </div>
  </div>
  <nav class="contents-cards__tabs-holder-2">
    <section class="contents-cards__tabs-content active">
      <h3 class="spe-price__title-detail">Giảm từ 980K còn 784K</h3>
      <div class="contents-cards___products-grid swipper-horizonal">
        <?php foreach ($products as $row) : ?>
          <div class="contents-cards__prd">
            <a href="<?php echo base_url('user/detailProduct') . '?idsanpham=' . $row['product_id'] ?>&sku=<?php echo $row['sku']; ?>&gioitinh=<?= $row['gender'] ?>&colorUnit=1">
              <?php
              $dataThumbnail = json_decode($row['thumbnail']);
              foreach ((array)$dataThumbnail as $key => $value) :
                if($key == 0):
                  echo "<img src='". $urlImage . $value . "' class='contents-cards__prd-img' alt='product'>";
                endif;
              endforeach;
              ?>
              <div class="contents-cards__prd-colors">
                <div class="prd-colors-brown"></div>
                <div class="prd-colors-black"></div>
              </div>
              <div class="contents-cards__prd-gender-size">
                <div class="prd-gender"><?php echo $row['gender'] ?></div>
                <div class="prd-size">S-L</div>
              </div>
              <div class="contents-cards__prd-name">
                <?php
                echo $row['title'];
                ?>
              </div>
              <div class="contents-cards__prd-original-price">
                <?php
                echo $row['price'];
                ?>
              </div>
              <div class="contents-cards__prd-sale-price">
                <?php
                echo $row['price'];
                ?>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <!-- <div class="contents-cards___products-normal">
            <h3 class="spe-price__title-detail">Giảm từ 784K còn 588K</h3>
            <div class="contents-cards__prd">
              <a href="#">
                <img
                  src="views/endUser/customers/uploads/588kproduct_1.jpg"
                  class="contents-cards__prd-img"
                  alt=""
                />
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
          </div> -->
    </section>
  </nav>
  <!--end special-price-->

  <!--special gift-->

  <div class="content-spe-gift">
    <div class="spe-gift__title">QUÀ TẶNG ĐẶC BIỆT</div>
    <div class="spe-gift__banner">
      <img src="<?= $urlImage ?>specialGiftHome.jpg" alt="Quà tặng đặc biệt">
    </div>
    <a href="#" class="agree-link">
      <div class="agree-text">Điều kiện & Điều khoản</div>
      <div class="marginWrapper">
        <span class="btn-back-horizontal">XEM THÊM</span>
      </div>
    </a>
  </div>
  <!--end special gift-->
  <div class="contents-utility-apps">
    <div class="utility-apps__title">TIỆN ÍCH TỪ ỨNG DỤNG</div>
    <div class="utility-apps__about">
      <a href="#">
        <div class="utility-apps__about-item">
          <div class="utility-apps__about-img">
            <img src="<?= $urlImage ?>benifit_app_uniqlo_1.jpg" alt="">
          </div>
          <div class="utility-apps__about-title">ƯU ĐÃI ĐỘC QUYỀN CHỈ CÓ TẠI ỨNG DỤNG</div>
          <div class="utility-apps__about-des">Giá đặc biệt chỉ dành cho thành viên ứng dụng. Scan Mã ID Thành Viên Ứng Dụng trước khi thanh toán tại cửa hàng để nhận giá ưu đãi.</div>
        </div>
      </a>
      <a href="#">
        <div class="utility-apps__about-item">
          <div class="utility-apps__about-img">
            <img src="<?= $urlImage ?>benifit_app_uniqlo_2.jpg" alt="">
          </div>
          <div class="utility-apps__about-title">WELCOME COUPON</div>
          <div class="utility-apps__about-des">Tải ứng dụng UNIQLO ngay và trải nghiệm welcome coupon cho đơn hàng đầu tiên trên app.</div>
        </div>
      </a>
      <a href="#">
        <div class="utility-apps__about-item">
          <div class="utility-apps__about-img">
            <img src="<?= $urlImage ?>benifit_app_uniqlo_3.jpg" alt="">
          </div>
          <div class="utility-apps__about-title">QUÉT MÃ VẠCH SẢN PHẨM</div>
          <div class="utility-apps__about-des">Quét mã vạch trên sản phẩm để dễ dàng kiểm tra xem sản phẩm còn hàng online hay trong cửa hàng.</div>
        </div>
      </a>
      <a href="#">
        <div class="utility-apps__about-item">
          <div class="utility-apps__about-img">
            <img src="<?= $urlImage ?>benifit_app_uniqlo_4.jpg" alt="">
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
</div>

<!--end body-->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo base_url('assets/customer/js/home.js') ?>"></script>
<script src="<?php echo base_url('assets/customer/js/slick.js') ?>"></script>