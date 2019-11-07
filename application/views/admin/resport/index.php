<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url() ?>index.php/admin/resport">Thống Kê</a>
    </li>
    <li class="breadcrumb-item active">Index</li>
</ol>
<!-- Page Content -->
<h1 class="header_title">Quản Lý Thống Kê</h1>
<div class="row">
    <div class="col-md-6"><button class="btn btn-success" id="add_item"><i class="fas fa-plus"></i>&nbsp;Tạo Dữ
            Liệu</button></div>
    <div class="col-md-6"><span class="day"><?php date_default_timezone_set("Asia/Bangkok");
                                            echo date("d-m-Y") ?></span></div>
</div>

<hr>