<?php
var_dump($before_head);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>index.php/trang-chu">Trang Chủ</a></li>
        <li class="breadcrumb-item active" aria-current="page">Thanh Toán</li>
    </ol>
</nav>

<table class="table table-bordered table-hover table-secondary">
    <thead>
        <tr class="bg-danger">
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Số Lượng</th>
            <th>Tổng Tiền</th>
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
            <td class="text-info"><?php echo $item['qty'] ?></td>
            <td class="text-primary font-weight-bold">
                <?php echo number_format(($item['subtotal']), 0, '.', '.') ?>đ</td>
        </tr>
        <?php $i++;
        } ?>

    </tbody>
</table>