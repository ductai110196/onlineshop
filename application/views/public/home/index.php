<div class="content">
    <div class="row">
        <div class="col-md-3 mb-2">
            <h5 class="text-white bg-success h5-title">Danh Mục</h5>
            <ul class="nav nav-pills flex-column text-uppercase bg-success rounded">
                <?php
                $submenu = "";
                foreach ($cateparent as $item) { ?>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="<?php echo $submenu ?>"
                        href="<?php echo base_url() ?>index.php/san-pham/<?php echo $item->MetaTitle . '-' . $item->ID ?>"><?php echo $item->Name ?></a>
                    <?php
                        foreach ($cate as $value) {
                            if ($item->ID == $value->ParentID) {
                                $submenu = 'collapse';
                                ?>
                    <div id="item-1" class="collapse">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="<?php echo base_url() ?>index.php/san-pham/<?php echo $value->MetaTitle . '-' . $value->ID ?>"><i
                                        class="far fa-circle text-danger mx-2"></i><?php echo $value->Name ?></a>
                            </li>
                        </ul>
                    </div>
                    <?php }
                            $submenu = "";
                        } ?>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-md-9">
            <div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade shadow" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block w-100"
                            src="<?php echo base_url() ?>assets/public/img/10_GalaxyA80_allcolors_back.jpg"
                            data-src="holder.js/900x400?theme=social" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="<?php echo base_url() ?>assets/public/img/samsung-galaxy-a80-1.jpg"
                            data-src="holder.js/900x400?theme=industrial" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="<?php echo base_url() ?>assets/public/img/3zBFgWSy5jv9AoSiy9fSVR.jpg"
                            data-src="holder.js/900x400?theme=industrial" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselFadeExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>



<div class="main my-4 bg-success rounded">
    <ul class="main-section">
        <li><a href=""><i class="fas fa-balance-scale-left mx-2 text-danger"></i>Chất Lượng</a></li>
        <li><a href=""><i class="fas fa-award mx-2 text-warning"></i>Uy Tín</a></li>
        <li><a href=""><i class="fas fa-tasks mx-2 text-danger"></i></i>Đổi Trả 30 Ngày</a></li>
        <li><a href=""><i class="fas fa-truck mx-2 text-warning"></i>Free Ship</a></li>
    </ul>
</div>
<div class="product my-2">
    <h1>Sản Phẩm Thời Trang</h1>
    <hr />
    <div class="row">
        <?php foreach ($before_head as $item) { ?>
        <div class="col-lg-3 my-1">
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

<div class="product my-2">
    <h1>Sản Phẩm Điện Thoại</h1>
    <hr />
    <div class="row">

        <?php foreach ($pro_phone as $value) { ?>
        <div class="col-lg-3 my-1">
            <div class="card text-dark bg-light">
                <div class="khung">
                    <img class="card-img-top" src="<?php echo $value->Images ?>" alt="Card image cap">
                    <div class="card-body">
                        <div class="text">
                            <a href="<?php echo base_url() ?>index.php/san-pham/<?php echo $value->MetaTitle ?>/<?php echo $value->ID ?>"
                                class="btn btn-success"><i class="fas fa-search text-white mx-2"></i>
                                Chi Tiết</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="title"><?php echo $value->Name ?></p>
                    <p class="price"><?php echo number_format($value->Price, 0, '.', '.') ?>đ</p>
                    <p class="proprice"><?php echo number_format($value->PromotionPrice, 0, '.', '.') ?>đ</p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>