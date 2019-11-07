<?php
$item = $before_head;
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sản Phẩm</li>
    </ol>
</nav>
<div class="row">
    <div class="col-md-6">
        <img src="<?php echo $item[0]->Images ?>" alt="" calss="img img-thumbnail" style="width: 100%; height: 500px">
    </div>
    <div class="col-md-6">
        <h4 class="text-center text-uppercase text-danger font-weight-bold"><?php echo $item[0]->Name ?></h4>
        <ul class="list-group">
            <li class="list-group-item">Mã Sản Phẩm: <?php echo $item[0]->Code ?></li>
            <li class="list-group-item">Thuế VAT: <?php echo $item[0]->IncludeVAT ?></li>
            <li class="list-group-item">Khuyến Mãi: <?php echo $item[0]->Promotion ?></li>
            <li class="list-group-item">Size/Color: Đang Cập Nhật</li>
            <li class="list-group-item">Giá:<span class="mx-2 font-weight-bold"
                    style="text-decoration: line-through;font-size: 20px; color: red;"><?php echo number_format($item[0]->Price, 0, '.', '.') ?>đ</span>
            </li>
            <li class="list-group-item">Giá Khuyến Mãi:<span class="mx-2 font-weight-bold"
                    style="font-size: 24px; color: red;" data-price="<?php echo $item[0]->PromotionPrice ?>"
                    id="newprice"><?php echo number_format($item[0]->PromotionPrice, 0, '.', '.') ?>đ</span>
            </li>
            <li class="list-group-item">Số Lượng: <input type="number" id="soluong" class="form-control" min="1" max="5"
                    value="1">
            </li>
        </ul>
        <button type="button" class="btn btn-secondary my-3" id="blackhome">Tiếp Tục Mua Hàng</button>
        <button id="giohang" type="button" class="btn btn-success my-3" value="<?php echo $item[0]->ID ?>"> <i
                class="fa fa-shopping-cart mx-2"></i>Thêm Giỏ
            Hàng</button>
    </div>
</div>
<div class="detail_product my-3">
    <h3>Thông Tin Chi Tiết Sản Phẩm</h3>
    <hr>
    <div class="detail_cart bg-light p-3 rounded shadow my-3">
        <?php echo $item[0]->Detail ?>
    </div>
</div>

<div class="comment_product">
    <h3>Đánh Giá Sản Phẩm</h3>
    <hr>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id nisl tellus. In volutpat tellus ut ex
        iaculis, sit amet feugiat ante molestie. Nullam ex orci, varius vel imperdiet eget, efficitur eget est. Etiam
        nisl
        orci, elementum eu pretium a, euismod non nulla. Vivamus eu pretium nisi. Fusce blandit urna urna, vel sagittis
        nunc
        faucibus quis. Etiam finibus cursus porttitor. Suspendisse sed lacinia mi, viverra pulvinar libero. Sed vel
        placerat
        nibh, a tincidunt ante.
    </p>
</div>