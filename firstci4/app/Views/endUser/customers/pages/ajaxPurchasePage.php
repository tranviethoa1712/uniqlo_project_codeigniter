<?php foreach (json_decode($orders) as $order => $item) : ?>
    <div class="title">
        <h1>Đơn hàng: <?= ' ' . $order ?></h1>
    </div>
    <?php foreach ($item as $column) : ?>
        <a href="<?= base_url('user/detailPurchaseOrder?orderItemId=') . $column['order_item_id'] ?>">
            <div class="product-item">
                <div class="product-item_detail">
                    <div class="product-item_thumbnail">
                        <?php
                        $dataThumbnail = json_decode($column['thumbnail']);
                        $f = 0;
                        foreach ((array)$dataThumbnail as $key) :
                            if ($f > 0) {
                                break;
                            }
                            $urlImage = base_url('assets/uploads/');
                            echo "<img src='" . $urlImage  . $key . "' alt='product'>";
                            $f++;
                        endforeach;
                        ?>
                    </div>
                    <div class="product-item_info">
                        <div class="product-item_title">
                            <?= $column['title'] ?>
                        </div>
                        <div class="product-item_size">
                            <?= strtoupper($column['size']) ?>
                        </div>
                        <div class="product-item_color">
                            <?= strtoupper($column['color']) ?>
                        </div>
                        <div class="product-item_quantity">
                            <?= 'x' . $column['quantity'] ?>
                        </div>
                    </div>
                    <div class="product-item_price">
                        <?= ' ' . number_format($column['total_money'], 0, ',', '.') . ' VND' ?>
                    </div>
                </div>
                <div class="product-item_options"></div>
            </div>
        </a>
    <?php endforeach; ?>
    <div class="endOrder">
        <div class="totalPrice">Tổng giá: <?= ' ' . number_format($column['total_price'], 0, ',', '.') . ' VND' ?></div>
    </div>
<?php endforeach; ?>