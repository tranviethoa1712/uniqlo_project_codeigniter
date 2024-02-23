                    <!-- form -->
                    <form method="post">

                      <div class="color-group">
                      <?php
                        foreach($unit as $row){
                      ?>
                      <input type="radio" name="color_prd" id="color-<?php echo $row['unit'] ?>" class="radio-color acitve" value="<?php echo $row['unit'] ?>" <?php if($row['unit'] == $_GET['colorUnit']) { echo " checked";} ?>/>
                      <a href="<?php  echo base_url('user/detailProduct?idsanpham=') . $row['product_id'] ?>&sku=<?php echo $_GET['sku'] ?>&colorUnit=<?php echo $row['unit'] ?>" class="color-label bg-color-<?php echo $row['unit'] ?>" name="tab-color-<?php echo $row['unit'] ?>"><?php echo " "; ?></a>
                      <label for="color-
                      <?php 
                      echo $row['unit'] ?>" 
                      hidden>
                      </label>
                      <?php
                          }
                      ?>
                        </div>  
                      </div>
                      <div class="wrapper-selection__size">
                        <div class="title">Kích cỡ: Unisex XL</div>
                            <div class="sizing-group">
                            <?php 
                            if(mysqli_num_rows($attributeProductId) > 0) {
                              ?>
                              <?php
                              foreach($attributeProductId as $row){
                                if($row['name'] == 'size') {
                                  $explode = explode(", ", $row['unit']);
                                  foreach($explode as $unitInner) {
                              ?>
                              <input type="radio" name="size_prd" id="size-<?php echo $unitInner; ?>" class="radio-sizing" value="<?php echo $unitInner; ?>"/>
                              <label for="size-<?php echo $unitInner; ?>" class="radio-label" hidden>
                                  <span class="text-sizing"><?php echo strtoupper($unitInner); ?></span>
                              </label>
    
                                <?php
                                  }
                                }
                              }
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
                        <input class="btn-submit" type="submit" name="addtocart" value="Thêm vào giỏ hàng"/>
                      </div>

                    </form>
                    <!-- end form -->