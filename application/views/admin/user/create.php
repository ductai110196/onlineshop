<style>
h3 {
    font-weight: bold;
    text-align: center;
    font-size: 2.3rem;
}
</style>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url() ?>index.php/admin/user">Người Dùng</a>
    </li>
    <li class="breadcrumb-item active">Index</li>
</ol>
<!-- Page Content -->
<h3>Thêm Nguời Dùng</h3>
<hr>
<form class="form-horizontal align-center" method="get" action="<?php echo base_url() ?>index.php/admin/user/add"
    name="save">
    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Họ Tên:</label>
                <input type="text" name="hoten" class="form-control" id="exampleInputEmail1" placeholder="Nhập họ tên">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Tài Khoản:</label>
                <input type="text" name="taikhoan" class="form-control" id="exampleInputEmail1"
                    placeholder="Nhập tài khoản">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Mật Khẩu:</label>
                <input type="password" name="matkhau" class="form-control" id="exampleInputEmail1"
                    placeholder="Nhập mật khẩu">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Email:</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Số Điện Thoại:</label>
                <input type="text" name="phone" class="form-control" id="exampleInputEmail1"
                    placeholder="Nhập số điện thoại">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="exampleInputEmail1">Địa Chỉ:</label>
                <textarea name="diachi" id="" rows="2" class="form-control" placeholder="Nhập địa chỉ"></textarea>
            </div>
        </div>

    </div>
    <div class="row justify-content-center">
        <button type="submit" class="btn btn-success my-3 btn-lg"><i class="far fa-share-square"></i>&nbsp;Lưu
            Lại</button>
    </div>
</form>
<a href="<?php echo base_url() ?>index.php/admin/user" class="btn btn-info my-3"><i class="fas fa-hand-point-left"></i>
    Quay Lại</a>