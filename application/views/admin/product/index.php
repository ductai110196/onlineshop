<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url() ?>index.php/admin/product">Sản Phẩm</a>
    </li>
    <li class="breadcrumb-item active">Index</li>
</ol>
<!-- Page Content -->
<h1 class="header_title">Quản Lý Sản Phẩm</h1>
<div class="row">
    <div class="col-md-6"><button class="btn btn-success" id="add_item"><i class="fas fa-plus"></i>&nbsp;Tạo Dữ
            Liệu</button></div>
    <div class="col-md-6"><span class="day"><?php date_default_timezone_set("Asia/Bangkok");
											echo date("d-m-Y") ?></span></div>
</div>

<hr>
<table class="table table-responsive-md table-responsive-sm table-hover table-bordered">
    <thead>
        <tr class="bg-success text-white">
            <th scope="col">Stt</th>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Mã Sản Phẩm</th>
            <th scope="col">Hình Ảnh</th>
            <th scope="col">Giá</th>
            <th scope="col">Giá Khuyến Mãi</th>
            <th scope="col">Số Lượng</th>
            <th scope="col">Danh Mục</th>
            <th scope="col">Bảo Hành</th>
            <th scope="col">Trạng Thái</th>
            <th scope="col">Thao Tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
		foreach ($before_head as $item) { ?>
        <tr>
            <th scope="row"><?php echo $i ?></th>
            <td style="max-width: 100px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap">
                <?php echo $item->Name ?></td>
            <td><?php echo $item->Code ?></td>
            <td> <img src="<?php echo $item->Images ?>" class="img-fluid" width="50" height="50"></img></td>
            <td class="text-danger font-weight-bold"><?php echo number_format($item->Price) ?>đ</td>
            <td class="text-danger font-weight-bold"><?php echo number_format($item->PromotionPrice) ?>đ</td>
            <td class="text-success font-weight-bold"><?php echo $item->Quantity  ?></td>
            <td>
                <?php
					foreach ($before_content as $value) {
						if ($item->CategoryID == $value->ID) {
							echo $value->Name;
						}
					}
					?>
            </td>
            <td class="text-info font-weight-bold">
                <?php echo $item->Warranty < 0 ? 'Không bảo hành' : $item->Warranty ?></td>
            <td> <button id="Status" value="<?php echo $item->Status ?>" data-id="<?php echo $item->ID ?>"
                    class="<?php echo $item->Status == 1 ? "btn btn-success" : "btn btn-danger" ?>"><?php echo $item->Status == 1 ? "Còn Hàng" : "Hết Hàng" ?>
                </button></td>
            <td>
                <a href="<?php echo base_url() ?>index.php/admin/product/edit/<?php echo $item->ID ?>"
                    class="btn btn-info mb-1"><i class="far fa-edit"></i>&nbsp;Sửa</a>&nbsp;<a
                    href="<?php echo base_url() ?>index.php/admin/product/delete/<?php echo $item->ID ?>"
                    class="btn btn-danger" onclick="return confirm('Ban có chắc xóa dòng này không?')"><i
                        class="far fa-trash-alt"></i>&nbsp;Xóa</a></td>
        </tr>
        <?php $i++;
		} ?>
    </tbody>
</table>