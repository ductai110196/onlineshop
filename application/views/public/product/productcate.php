<div class="product my-2">
    <h1>Sản Phẩm</h1>
    <hr />
    <div class="row">
        <?php foreach ($before_head as $item) { ?>
        <div class="col-lg-3">
            <div class="card text-dark bg-light">
                <div class="khung">
                    <img class="card-img-top" src="<?php echo $item->Images ?>" alt="Card image cap">
                    <div class="card-body">
                        <div class="text">
                            <a href="<?php echo base_url() ?>index.php/san-pham/<?php echo $item->MetaTitle ?>/<?php echo $item->ID ?>"
                                class="btn btn-success"><i class="fas fa-search text-white mx-2"></i>
                                Chi Tiết</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="title"><?php echo $item->Name ?></p>
                    <p class="price"><?php echo number_format($item->Price, 0, '.', '.') ?>đ</p>
                    <p class="proprice"><?php echo number_format($item->PromotionPrice, 0, '.', '.') ?>đ</p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<div class="page my-4">
    <?php echo $page_product ?>
</div>