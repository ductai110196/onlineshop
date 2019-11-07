<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url() ?>index.php/admin/category">Loại Hàng</a>
    </li>
    <li class="breadcrumb-item active">Index</li>
</ol>
<!-- Page Content -->
<h1 class="header_title">Quản Lý Loại Hàng</h1>
<div class="row">
    <div class="col-md-6"><button class="btn btn-success" id="add_item"><i class="fas fa-plus"></i>&nbsp;Tạo Dữ
            Liệu</button></div>
    <div class="col-md-6"><span class="day"><?php date_default_timezone_set("Asia/Bangkok");
                                            echo date("d-m-Y") ?></span></div>
</div>

<hr>
<table class="table table-bordered table-hover table-responsive-md table-responsive-sm table-responsive-lg">
    <thead>
        <tr class="bg-success">
            <th scope="col">Stt</th>
            <th scope="col">Tên Loại Hàng</th>
            <th scope="col">Tên Url</th>
            <th scope="col">Danh Mục</th>
            <th scope="col">Trạng Thái</th>
            <th scope="col">Hiển Thị Trang Chủ</th>
            <th scope="col">Thao Tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        foreach ($before_head as $item) { ?>
        <tr>
            <th scope="row"><?php echo $i ?></th>
            <td><?php echo $item->Name ?></td>
            <td><?php echo $item->MetaTitle ?></td>
            <td>
                <?php
                    if ($item->ParentID == 0) {
                        echo "Trống";
                    } else {
                        foreach ($before_head as $value) {
                            if ($value->ID == $item->ParentID) {
                                echo $value->Name;
                            }
                        }
                    } ?>
            </td>
            <td>
                <button id="Status" value="<?php echo $item->Status ?>" data-id="<?php echo $item->ID ?>"
                    class="<?php echo $item->Status == 1 ? "btn btn-success" : "btn btn-danger" ?>"><?php echo $item->Status == 1 ? "Hoạt Động" : "Đang Khóa" ?>
                </button>
            </td>
            <td><button id="Show" value="<?php echo $item->ShowOnHome ?>" data-id="<?php echo $item->ID ?>"
                    class="<?php echo $item->ShowOnHome == 1 ? "btn btn-success" : "btn btn-danger" ?>"><?php echo $item->ShowOnHome == 1 ? "Hiển Thị" : "Không Hiển Thị" ?>
                </button></td>
            <td>

                <a href="<?php echo base_url() ?>index.php/admin/category/edit/<?php echo $item->ID ?>"
                    class="btn btn-info"><i class="far fa-edit"></i>&nbsp;Sửa</a>&nbsp;<a
                    href="<?php echo base_url() ?>index.php/admin/category/delete/<?php echo $item->ID ?>"
                    class="btn btn-danger" onclick="return confirm('Ban có chắc xóa dòng này không?')"><i
                        class="far fa-trash-alt"></i>&nbsp;Xóa</a></td>
        </tr>
        <?php $i++;
        } ?>
    </tbody>
</table>