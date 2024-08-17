<!--menu-->
<div class="layout sticky">
    <div class="menu-wrapper " id="menu">
        <div class="menu-links">
            <h1 class="menu-links__logo">
                <?php
        $urlHome = base_url('user/homePage');
        $urlImage = base_url('assets/uploads/');
        ?>
                <a href="<?= base_url('user/homePage?gioitinh=woman'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 40" width="90" height="40" role="img"
                        aria-label="ユニクロ｜UNIQLO">
                        <title>ユニクロ｜UNIQLO</title>
                        <path fill="red" d="M50 0h40v40H50zM0 0h40v40H0z"></path>
                        <g fill="#fff">
                            <path
                                d="M79.48 5.47h2.53v12.64h-2.53zM63.47 13.9a4.21 4.21 0 0 1-8.42 0V5.47h2.53v8.43a1.68 1.68 0 1 0 3.36 0V5.47h2.53zM75.26 34.53h-8.42V21.89h2.53V32h5.89v2.53zM75.26 18.11h-2.53l-3.36-7.22v7.22h-2.53V5.47h2.53l3.36 7.22V5.47h2.53v12.64zM59.26 21.89a4.21 4.21 0 0 0-4.21 4.22v4.21a4.21 4.21 0 0 0 4.21 4.21 4.34 4.34 0 0 0 .82-.07l.86 2.6h2.53l-1.25-3.75a4.2 4.2 0 0 0 1.25-3v-4.2a4.21 4.21 0 0 0-4.21-4.22m1.68 8.43a1.68 1.68 0 1 1-3.36 0v-4.21a1.68 1.68 0 1 1 3.36 0zM80.74 21.89a4.22 4.22 0 0 0-4.22 4.22v4.21a4.21 4.21 0 0 0 8.42 0v-4.21a4.21 4.21 0 0 0-4.21-4.22m1.68 8.43a1.68 1.68 0 0 1-3.37 0v-4.21a1.68 1.68 0 0 1 3.37 0z">
                            </path>
                            <g>
                                <path
                                    d="M22.74 15.16H34.1v2.52H22.74zM24 5.47h8.84V8H24zM14.74 5.47H7.15V8h5.06v7.16H5.9v2.52h11.36v-2.52h-2.52V5.47zM22.74 22.31v12.22H34.1V22.31zM31.57 32h-6.31v-7.16h6.31zM7.15 22.31l-1.28 6.12h2.52l.76-3.59h5.07L12.73 32H5.14l-.51 2.53h10.11l2.52-12.22H7.15z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </a>
            </h1>
            <!--info dropdown-->
            <div class="menu-links__list">
                <ul class="menu-links__list-contents">
                    <li class="menu-links__list-item-dropdown woman">
                        <a href="<?= base_url('user/categoryPage?gioitinh=woman') ?>">Nữ</a>
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
                                        <li class="dropdown-list__item">
                                            <?= anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=woman'), $value['name']);?>
                                        </li>
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
                        <a href="<?= base_url('user/categoryPage?gioitinh=man') ?>">Nam</a>
                        <div class="dropdown-wrapper dropdown-man">
                            <div class="menu-links__dropdown-item-content">
                                <div>
                                    <span class="menu-links__list-item-title">áo</span>
                                    <ul class="dropdown-list__items">
                                        <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ÁO") {
                    ?>
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=man'), $value['name']);?>
                                        </li>
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
                        <a href="<?= base_url('user/categoryPage?gioitinh=baby') ?>">Trẻ em</a>
                        <div class="dropdown-wrapper dropdown-baby">
                            <div class="menu-links__dropdown-item-content">
                                <div>
                                    <span class="menu-links__list-item-title">áo</span>
                                    <ul class="dropdown-list__items">
                                        <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ÁO") {
                    ?>
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=baby'), $value['name']);?>
                                        </li>
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
                        <a href="<?= base_url('user/categoryPage?gioitinh=nonbaby') ?>">Trẻ em sơ sinh</a>
                        <div class="dropdown-wrapper dropdown-non-baby">
                            <div class="menu-links__dropdown-item-content">
                                <div>
                                    <span class="menu-links__list-item-title">áo</span>
                                    <ul class="dropdown-list__items">
                                        <?php
                    foreach ($categories as $key => $value) {
                      if ($value['title'] == "ÁO") {
                    ?>
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']);?>
                                        </li>
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
                                        <li class="dropdown-list__item">
                                            <?=anchor(base_url('user/listProducts?iddanhmuc=' . $value['category_id'] . '&gioitinh=nonbaby'), $value['name']);?>
                                        </li>
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
            <a href="<?= base_url('user/myCart'); ?>" class="menu-tools__cart">
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
            <a href="<?= base_url('user/myCart') ?>" class="menu-tools__cart">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
        </li>
    </ul>
</div>
<!--end menu-->


<div class="contained">
    <div class="contents-cards">
        <h2 class="h2">
            <span class="title">Thanh toán</span>
        </h2>
        <form method="post" action="<?= base_url('user/doOrder') ?>">
            <div class="mainwrapper">
                <?php
        if (!empty($_SESSION['customer_login'])) {
          if (empty($_SESSION['cart'])) {
            echo '<p style="font-size: 24px; text-align: center;">Hiện tại giỏ hàng đang trống!</p>';
          } else {
            $cart = $_SESSION['cart'];
            $shippingCost = 50000;
            $productCount = 0;
            $sum = 0;
            $total = 0;

            foreach ($cart as $id => $row) {
              $productCount++;
              $sum += $row['quantity'] * $row['price'];
            }
            $total = $sum + $shippingCost;
        ?>
                <div class="leftContainer">
                    <?= view('massages/messageOrder') ?>
                    <label for="fullname">Họ và Tên</label>
                    <input type="text" id="fullname" class="input" name="fullname" required>

                    <label for="address">Địa chỉ </label>
                    <input type="text" id="address" class="input" name="address" required>

                    <label for="phoneNumber">Số điện thoại</label>
                    <input type="text" id="phoneNumber" class="input" name="phoneNumber" required>

                    <!-- <label for="totalPrice">Tổng tiền</label> -->
                    <input style="visibility: hidden;" type="text" class="input" name="totalPrice"
                        value="<?= $total; ?>">
                </div>
                <!-- <input type="text" name=""> -->
                <div class="rightContainer">
                    <div class="order-summary">
                        <div class="title-head">
                            <span>Tổng đơn hàng</span>

                            <span>| <?= $productCount; ?> Sản phẩm</span>
                        </div>
                        <div class="contents">
                            <div class="row">
                                <div class="left-text">Tổng cộng</div>
                                <div class="right-text">
                                    <?php
                      echo number_format($sum, 0, ',', '.') . ' VND';
                      ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="left-text">Phí vận chuyển</div>
                                <div class="right-text">
                                    <?php
                      echo number_format($shippingCost, 0, ',', '.') . ' VND';
                      ?>
                                </div>
                            </div>
                            <div class="row-total">
                                <div class="left-text">tổng</div>
                                <div class="right-text">
                                    <?= number_format($total, 0, ',', '.') . ' VND';?>
                                </div>
                            </div>
                            <div class="row-total">
                                <div class="left-text">Tổng đơn đặt hàng</div>
                                <div class="right-text-end">
                                    <?= number_format($total, 0, ',', '.') . ' VND'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="" style="border: 1px solid rgb(224, 224, 224); padding: 28px 20px;">
                        <div class="" style="width: auto; margin-bottom: 16px">
                            <h4 id="" class="fr-head h4">
                                <span class="title">Sản phẩm đặt hàng</span>
                            </h4>
                        </div>
                        <div class="delivery-items">
                            <ul class="inner">
                                <?php foreach ($cart as $id => $row) { ?>
                                <li class="item">
                                    <?php
                        $dataThumbnail = json_decode($row['thumbnail']);
                        $i = 0;
                        foreach ((array)$dataThumbnail as $key) :
                          if($i > 0) {
                            break;
                          }
                          $urlImage = base_url('assets/uploads/');
                          echo "<img src='" . $urlImage  . $key . "' class='thumb-img' alt='product'>";
                          $i++;
                        endforeach;
                        ?>
                                    <span class="item-value"><?= $row['quantity']; ?></span>
                                </li>
                                <?php
                    }
                    ?>

                            </ul>
                        </div>
                    </div>
                    <input type="submit" class="offline-payment-button" name="submitOrder"
                        value="Thanh toán khi nhận hàng">
                    <input type="submit" class="online-payment-button" name="vnpay"
                        value="Ứng dụng ngân hàng di động VNPAY">
                </div>
                <?php
          }
        }
        ?>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?= base_url('assets/customer/js/home.js'); ?>"></script>
<script src="<?= base_url('assets/customer/js/slick.js'); ?>></script>