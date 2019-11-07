<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Người Dùng</a>
    </li>
    <li class="breadcrumb-item active">Index</li>
</ol>
<!-- Page Content -->
<h1 class="header_title">Quản Lý Người Dùng</h1>
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
            <th scope="col">Họ Tên</th>
            <th scope="col">Địa Chỉ</th>
            <th scope="col">Email</th>
            <th scope="col">Số Điện Thoại</th>
            <th scope="col">Trạng Thái</th>
            <th scope="col">Thao Tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        foreach ($before_head as $item) { ?>
        <tr>
            <th scope="row"><?php echo $i ?></th>
            <td><?php echo $item->Name ?></td>
            <td><?php echo $item->Address ?></td>
            <td><?php echo $item->Email ?></td>
            <td><?php echo $item->Phone ?></td>
            <td>
                <button id="Status" value="<?php echo $item->Status ?>" data-id="<?php echo $item->ID ?>"
                    class="<?php echo $item->Status == 1 ? "btn btn-success" : "btn btn-danger" ?>"><?php echo $item->Status == 1 ? "Hoạt Động" : "Đang Khóa" ?>
                </button>
            </td>
            <td>
                <a href="<?php echo base_url() ?>index.php/admin/user/edit/<?php echo $item->ID ?>"
                    class="btn btn-info"><i class="far fa-edit"></i>&nbsp;Sửa</a>&nbsp;<a
                    href="<?php echo base_url() ?>index.php/admin/user/delete/<?php echo $item->ID ?>"
                    class="btn btn-danger" onclick="return confirm('Ban có chắc xóa dòng này không?')"><i
                        class="far fa-trash-alt"></i>&nbsp;Xóa</a></td>
        </tr>
        <?php $i++;
        } ?>
    </tbody>
</table>