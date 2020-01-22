<?php
$value = $before_content;
?>
<style>
h3 {
    font-weight: bold;
    text-align: center;
    font-size: 2.3rem;
}
</style>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url() ?>index.php/admin/product">Sản Phẩm</a>
    </li>
    <li class="breadcrumb-item active">Index</li>
</ol>
<!-- Page Content -->
<h3>Cập Nhật Sản Phẩm</h3>
<hr>
<form class="form-horizontal align-center" method="get" action="<?php echo base_url() ?>index.php/admin/product/update"
    name="save">
    <input type="text" hidden name="id" value="<?php echo $value[0]->ID ?>">
    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên Sản Phẩm:</label>
                <input type="text" name="tensanpham" class="form-control" id="tensanpham"
                    placeholder="Nhập tên sản phẩm" value="<?php echo $value[0]->Name ?>">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Link Url:</label>
                <input type="text" name="url" class="form-control" id="texturl" placeholder="" readonly
                    value="<?php echo $value[0]->MetaTitle ?>">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Mã Sản Phẩm:</label>
                <input type="text" name="masanpham" class="form-control" id="tenloai" placeholder="Nhập mã sản phẩm"
                    value="<?php echo $value[0]->Code ?>">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Mô Tả:</label>
                <textarea name="mota" id="mota" rows="5" class="form-control"
                    placeholder="Nhập mô tả"><?php echo $value[0]->Description ?></textarea>
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Hình Ảnh:</label>
                <div class="row">
                    <div class="col-md-8">
                        <input readonly type="text" name="hinhanh" class="form-control" id="hinhanh"
                            placeholder="Chọn hình ảnh" value="<?php echo $value[0]->Images ?>">
                    </div>
                    <div class="col-md-4"><button type="button" class="btn btn-info" id="img">Chọn</button></div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Giá Gốc (đ):</label>
                <input type="text" name="giabandau" class="form-control" id="giabandau" placeholder="Nhập giá gốc"
                    value="<?php echo $value[0]->Price; ?>">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Khuyến Mãi (%):</label>
                <input type="number" name="khuyenmai" class="form-control" id="khuyenmai"
                    placeholder="Nhập giá khuyến mãi" min="0" value="<?php echo $value[0]->Promotion ?>">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Thuế VAT (%):</label>
                <input type="number" name="vat" class="form-control" id="vat" placeholder="Nhập thuế vat" min="0"
                    value="<?php echo $value[0]->IncludeVAT ?>">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Số Lượng Sản Phẩm Trong Kho:</label>
                <input type="number" name="soluong" class="form-control" id="soluong"
                    placeholder="Nhập số lượng sản phẩm" min="1" value="<?php echo $value[0]->Quantity ?>">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Danh Mục:</label>
                <select name="danhmuc" id="" class="custom-select">
                    <option value="0">Trống</option>
                    <?php foreach ($before_head as $item) {
						if ($item->ParentID != 0) {
							if ($value[0]->CategoryID == $item->ID) {
								echo '<option selected value="' . $item->ID . '">' . $item->Name . '</option>';
							} else {
								echo '<option value="' . $item->ID . '">' . $item->Name . '</option>';
							}
						}
					} ?>
                </select>
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Chi Tiết Sản Phẩm:</label>
                <textarea name="chitiet" id="chitiet" rows="5"
                    class="form-control"><?php echo $value[0]->Detail ?></textarea>
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Bảo Hành (tháng):</label>
                <input type="number" name="baohanh" class="form-control" id="baohanh" placeholder="Bảo hành bao lâu?"
                    min="0" max="12" value="<?php echo $value[0]->Warranty ?>">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <button type="submit" class="btn btn-success my-3 btn-lg"><i class="far fa-share-square"></i>&nbsp;Lưu
            Lại</button>
    </div>
</form>
<a href="<?php echo base_url() ?>index.php/admin/product" class="btn btn-info my-3"><i
        class="fas fa-hand-point-left"></i>
    Quay Lại</a>