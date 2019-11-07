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
        <a href="<?php echo base_url() ?>index.php/admin/category">Loại Hàng</a>
    </li>
    <li class="breadcrumb-item active">Index</li>
</ol>
<!-- Page Content -->
<h3>Cập Nhật Loại Hàng</h3>
<hr>
<form class="form-horizontal align-center" method="get" action="<?php echo base_url() ?>index.php/admin/category/update"
    name="save">
    <input type="text" hidden name="id" value="<?php echo $value[0]->ID ?>">
    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên Loại Hàng:</label>
                <input type="text" name="tenloai" class="form-control" id="sua_tenloai" placeholder="Nhập tên loại"
                    value="<?php echo $value[0]->Name ?>">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Link Trang:</label>
                <input readonly type="text" name="urltile" class="form-control" id="sua_texturl"
                    value="<?php echo $value[0]->MetaTitle ?>">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Danh Mục:</label>
                <select name="danhmuc" id="" class="custom-select">
                    <option value="0">Trống</option>
                    <?php
                    foreach ($before_head as $item) {
                        if ($value[0]->ParentID == $item->ID) {
                            echo  '<option selected value="' . $item->ID . '">' . $item->Name . '</option>';
                        } else {
                            echo  '<option value="' . $item->ID . '">' . $item->Name . '</option>';
                        }
                    }
                    ?>

                </select>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <button type="submit" class="btn btn-success my-3 btn-lg"><i class="far fa-share-square"></i>&nbsp;Lưu
            Lại</button>
    </div>
</form>
<a href="<?php echo base_url() ?>index.php/admin/category" class="btn btn-info my-3"><i
        class="fas fa-hand-point-left"></i>
    Quay Lại</a>