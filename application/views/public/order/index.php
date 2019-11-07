<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
        <li class="breadcrumb-item active" aria-current="page">Giỏ Hàng</li>
    </ol>
</nav>

<div class="cart">
    <h3>Giỏ Hàng Của Bạn Hiên Có: <span> <?php echo count($before_head) > 0 ? count($before_head) : 0  ?> </span>
        Sản Phẩm</h3>
</div>
<hr>

<?php if (count($before_head) > 0) { ?>

<table class="table table-bordered table-hover table-secondary">
    <thead>
        <tr class="bg-info">
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Số Lượng</th>
            <th>Tổng Tiền</th>
            <th>Hành Động</th>
        </tr>
    </thead>
    <tbody>
        <?php
                $i = 1;
                $sum_product = 0;
                foreach ($before_head as  $item) {
                    $sum_product += $item['subtotal'] ?>
        <tr>
            <td scope="row"><?php echo $i ?></td>
            <td><?php echo $item['name'] ?></td>
            <td><img src="<?php echo $item['img'] ?>" alt="" class="img-thumbnail" width="50" height="50"></td>
            <td class="text-danger font-weight-bold"><?php echo  number_format($item['price'], 0, '.', '.') ?>đ</td>
            <td class="text-info"><input class="form-control" type="number" name=""
                    id="soluong_<?php echo $item['id'] ?>" min="1" max="10" value="<?php echo $item['qty'] ?>"></td>
            <td class="text-primary font-weight-bold">
                <?php echo number_format(($item['subtotal']), 0, '.', '.') ?>đ</td>
            <td>
                <button class="btn btn-success" id="add" value="<?php echo $item['id'] ?>"><i
                        class="fas fa-edit mx-2"></i></button>
                <button class="btn btn-danger" id="delete" value="<?php echo $item['id'] ?>"><i
                        class="fa fa-trash mx-2"></i></button>
            </td>
        </tr>
        <?php $i++;
                } ?>

    </tbody>
</table>
<p class="total_price text-danger font-weight-bold">Tổng Tiền Tất Cả Sản Phẩm:<span class="mx-2 bg-light"
        style="font-size: 30px; text-decoration: underline"><?php echo number_format($sum_product, 0, '.', '.') ?>đ</span>
</p>
<?php } else {
    ?>
<h1> Hiện tại không có sản phẩm nào trong giỏ hàng</h1>

<?php } ?>
<button class="btn btn-info" id="pay"><i class="far fa-bookmark mx-2"></i>Thanh Toán</button>
<a href="trang-chu" class="btn btn-secondary"><i class="fas fa-backward mx-2"></i> Quay Lại Mua Hàng</a>