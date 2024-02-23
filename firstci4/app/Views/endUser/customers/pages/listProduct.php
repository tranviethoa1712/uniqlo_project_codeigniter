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

<!-- body -->
<div class="contained">
  <div class="contents-cards-w">
    <div class="banner-w">
      <div class="banner-title">áo thun in họa tiết</div>
      <ul class="banner-tabs">
        <li class="banner-tabs__item <?php if ($gioitinh == "woman") {
                                        echo " active";
                                      } ?>"><a href="2&gioitinh=woman">nữ</a></li>
        <li class="banner-tabs__item <?php if ($gioitinh == "man") {
                                        echo " active";
                                      } ?>"><a href="2&gioitinh=man">nam</a></li>
        <li class="banner-tabs__item <?php if ($gioitinh == "baby") {
                                        echo " active";
                                      } ?>"><a href="2&gioitinh=baby">trẻ em</a></li>
        <li class="banner-tabs__item <?php if ($gioitinh == "nonbaby") {
                                        echo " active";
                                      } ?>"><a href="2&gioitinh=nonbaby">trẻ sơ sinh</a></li>
      </ul>
      <div class="banner-img">
        <img src="<?= $urlImage ?>banner-w.jpg" alt="">
      </div>
    </div>
    <div class="head-bar-w">
      <div class="wrapper-left">
        <div class="title">Kết quả</div>
        <div class="des">50 Items</div>
      </div>
      <div class="wrapper-right">
        <div class="title">sắp xếp theo</div>
        <div class="des" name="dropdown-arrange-w" onclick="DropdownArrange(this)">
          <div class="text">Tiêu biểu</div>
          <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="dropdown-arrange__options" id="dropdown-arrange-w">
          <li class="dropdown-arrange__option"><a href="">Tiêu biểu</a></li>
          <li class="dropdown-arrange__option"><a href="">Hàng mới về</a></li>
          <li class="dropdown-arrange__option"><a href="">Từ thấp đến cao</a></li>
          <li class="dropdown-arrange__option"><a href="">Từ cao đến thấp</a></li>
          <li class="dropdown-arrange__option"><a href="">Xếp hạng cao nhất</a></li>
        </div>
      </div>
    </div>
    <div class="contents-cards-full">
      <div class="content-main">
        <div class="w25">
          <div class="menu-list__title">
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
          </div>
          <div class="menu-list__item" name="uni-1" onclick="DropdownMenu(this)">
            <span>đồ mặc ngoài</span>
          </div>
          <ul class="dropdown-styling" id="uni-1">
            <?php foreach ($categories as $col) {
              if ($col['title'] == "Đồ mặc ngoài") {
            ?>
                <li class="styling-item" onclick="clickLiDropdown()"><a href="<?php echo $col['category_id'] ?>&gioitinh=<?php echo $gioitinh ?>"><?php echo $col['name'] ?></a></li>
            <?php
              }
            }
            ?>
          </ul>

          <div class="menu-list__item" name="uni-2" onclick="DropdownMenu(this)">
            <span>áo</span>
          </div>
          <ul class="dropdown-styling" id="uni-2">
            <?php foreach ($categories as $col) {
              if ($col['title'] == "ÁO") {
            ?>
                <li class="styling-item" onclick="clickLiDropdown()"><a href="<?php echo $col['category_id'] ?>&gioitinh=<?php echo $gioitinh ?>"><?php echo $col['name'] ?></a></li>
            <?php
              }
            }
            ?>
          </ul>

          <div class="menu-list__item" name="uni-3" onclick="DropdownMenu(this)">
            <span>quần</span>

          </div>
          <ul class="dropdown-styling" id="uni-3">
            <?php foreach ($categories as $col) {
              if ($col['title'] == "QUẦN") {
            ?>
                <li class="styling-item" onclick="clickLiDropdown()"><a href="<?php echo $col['category_id'] ?>&gioitinh=<?php echo $gioitinh ?>"><?php echo $col['name'] ?></a></li>
            <?php
              }
            }
            ?>
          </ul>
          <div class="menu-list__item" name="uni-4" onclick="DropdownMenu(this)">
            <span>ĐỒ MẶC NHÀ</span>

          </div>
          <ul class="dropdown-styling" id="uni-4">
            <?php foreach ($categories as $col) {
              if ($col['title'] == "ĐỒ MẶC NHÀ") {
            ?>
                <li class="styling-item" onclick="clickLiDropdown()"><a href="<?php echo $col['category_id'] ?>&gioitinh=<?php echo $gioitinh ?>"><?php echo $col['name'] ?></a></li>
            <?php
              }
            }
            ?>
          </ul>

          <div class="menu-list__item" name="uni-5" onclick="DropdownMenu(this)">
            <span>sport utility wear</span>

          </div>
          <ul class="dropdown-styling" id="uni-5">
            <?php foreach ($categories as $col) {
              if ($col['title'] == "SPORT UTILITY WEAR") {
            ?>
                <li class="styling-item" onclick="clickLiDropdown()"><a href="<?php echo $col['category_id'] ?>&gioitinh=<?php echo $gioitinh ?>"><?php echo $col['name'] ?></a></li>
            <?php
              }
            }
            ?>
          </ul>
          <?php if ($gioitinh == "man") { ?>
            <div class="menu-list__item" name="uni-6" onclick="DropdownMenu(this)">
              <span>ĐẦM & CHÂN VÁY</span>

            </div>
            <ul class="dropdown-styling" id="uni-6">
              <?php foreach ($categories as $col) {
                if ($col['title'] == "ĐẦM & CHÂN VÁY") {
              ?>
                  <li class="styling-item" onclick="clickLiDropdown()"><a href="<?php echo $col['category_id'] ?>&gioitinh=<?php echo $gioitinh ?>"><?php echo $col['name'] ?></a></li>
              <?php
                }
              }
              ?>
            </ul>
          <?php } ?>

          <div class="menu-list__item" name="uni-7" onclick="DropdownMenu(this)">
            <span>đồ mặc nhà</span>
          </div>
          <ul class="dropdown-styling" id="uni-7">
            <li class="styling-item"><a href="#">Tất Cả Đồ Mặc Ngoài</a></li>
            <li class="styling-item"><a href="#">Áo Khoác Siêu Nhẹ & Áo Chần Bông</a></li>
            <li class="styling-item"><a href="#">Áo Blouson & Áo Parka</a></li>
            <li class="styling-item"><a href="#">AirSense Áo Khoác</a></li>
            <li class="styling-item"><a href="#">Áo Khoác Siêu Nhẹ & Áo Chần Bông</a></li>
          </ul>

          <div class="menu-list__item" name="uni-8" onclick="DropdownMenu(this)">
            <span>đồ phụ kiện</span>

          </div>
          <ul class="dropdown-styling" id="uni-8">
            <li class="styling-item"><a href="#">Tất Cả Đồ Mặc Ngoài</a></li>
            <li class="styling-item"><a href="#">Áo Khoác Siêu Nhẹ & Áo Chần Bông</a></li>
            <li class="styling-item"><a href="#">Áo Blouson & Áo Parka</a></li>
            <li class="styling-item"><a href="#">AirSense Áo Khoác</a></li>
            <li class="styling-item"><a href="#">Áo Khoác Siêu Nhẹ & Áo Chần Bông</a></li>
          </ul>

          <ul class="dropdown-styling" id="uni-9">
            <li class="styling-item"><a href="#">Tất Cả Đồ Mặc Ngoài</a></li>
            <li class="styling-item"><a href="#">Áo Khoác Siêu Nhẹ & Áo Chần Bông</a></li>
            <li class="styling-item"><a href="#">Áo Blouson & Áo Parka</a></li>
            <li class="styling-item"><a href="#">AirSense Áo Khoác</a></li>
            <li class="styling-item"><a href="#">Áo Khoác Siêu Nhẹ & Áo Chần Bông</a></li>
          </ul>

          <div class="menu-list__horizonal"></div>

          <div class="menu-list__item-sp" name="uni-10" onclick="DropdownMenuSpe(this)">
            <span>Kích cỡ</span>
          </div>
          <ul class="dropdown-styling-sizing" id="uni-10">
            <li class="sizing-item"><a href="#">XS</a></li>
            <li class="sizing-item"><a href="#">S</a></li>
            <li class="sizing-item"><a href="#">M</a></li>
            <li class="sizing-item"><a href="#">L</a></li>
            <li class="sizing-item"><a href="#">XL</a></li>
            <li class="sizing-item"><a href="#">XXL</a></li>
          </ul>

          <div class="menu-list__item-sp" name="uni-11" onclick="DropdownMenuSpe(this)">
            <span>Màu sắc</span>
          </div>
          <ul class="dropdown-styling-colors" id="uni-11">
            <div class="color-item bg-color-white"></div>
            <div class="color-item bg-color-gray"></div>
            <div class="color-item bg-color-black"></div>
            <div class="color-item bg-color-pink"></div>
            <div class="color-item bg-color-red"></div>
            <div class="color-item bg-color-orange"></div>
            <div class="color-item bg-color-beige"></div>
            <div class="color-item bg-color-brown"></div>
            <div class="color-item bg-color-yellow"></div>
            <div class="color-item bg-color-green"></div>
            <div class="color-item bg-color-blue"></div>
            <div class="color-item bg-color-purple"></div>
          </ul>

          <div class="menu-list__item-sp" name="uni-12" onclick="DropdownMenu(this)">
            <span>Giá</span>
          </div>
          <ul class="dropdown-styling-prices" id="uni-12">
            <div class="prices-item"><a href="">Dưới 199.000 VND</a></div>
            <div class="prices-item"><a href="">199.000 VND - 299.000 VND</a></div>
            <div class="prices-item"><a href="">299.000 VND - 399.000 VND</a></div>
            <div class="prices-item"><a href="">499.000 VND - 799.000 VND</a></div>
          </ul>

          <div class="menu-list__item-sp" name="uni-13" onclick="DropdownMenu(this)" s>
            <span>Tiêu Chí Khác</span>
          </div>
          <ul class="dropdown-styling-target" id="uni-13">
            <div class="target-item"><a href="#">sale</a></div>
            <div class="target-item"><a href="#">new</a></div>
            <div class="target-item"><a href="#">coming soon</a></div>
          </ul>

        </div>
        <div class="w75">
          <div class="content-full-main">
            <?php foreach ($products as $col) {
            ?>
              <div class="contents-cards__prd">
                <a class="link-prd" href="index.php?controller=ProductCustomerController&action=detailProduct&idsanpham=<?php echo $col['product_id']; ?>&sku=<?php echo $col['sku']; ?>&colorUnit=1">

                  <?php
                  $dataThumbnail = (array)json_decode($col['thumbnail']);
                  foreach ($dataThumbnail as $key => $value) {
                    if (is_array($value) || is_object($value)) {
                      foreach ($value as $item => $e) {
                        if ($key == "name") {
                          if ($item == 0) {
                            echo "<img src='" . $urlImage . $e . "' class='contents-cards__prd-img' alt='product'>";
                          }
                        }
                      }
                    }
                  }
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
                    <?
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
    </div>
    <div class="wrapper-title-styling">
      <div class="recently-viewed__wrapper">
        <div class="title">đã xem gần đây</div>
        <div class="recently-viewed___products-grid">
          <div class="contents-cards__prd">
            <a href="#">
              <img src="<?= $urlImage ?>dmn01_1_pink" class="contents-cards__prd-img" alt="" />
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
</div>
<!-- end body -->
<script src="<?php echo base_url('assets/customer/js/home.js'); ?>"></script>
<script src="<?php echo base_url('assets/customer/js/listprd.js'); ?>"></script>