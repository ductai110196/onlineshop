<!-- Sticky Footer -->
<footer class="sticky-footer bg-success text-light">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <a href="https://www.facebook.com/nguyenductai110196" class="btn btn-outline-light
             mr-3 border border-light"><i class="fab fa-facebook" style="font-size: 24px"></i></a><span>Copyright ©
                Nguyễn Đức Tài Website 2019</span>
        </div>
    </div>
</footer>

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Đăng Xuất?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Bạn có muốn đăng xuất ra khỏi trang này không?</div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Thoát</button>
                <a class="btn btn-success" href="<?php echo base_url() ?>index.php/security/acount/logout">Đăng Xuất</a>
            </div>
        </div>
    </div>
</div>
<!-- change pass-->
<div class="modal fade" id="modal_doi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?php echo base_url() ?>index.php/admin/user/changes">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Đổi Mật Khẩu</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Mật Khẩu Cũ: </label>
                        <input type="password" placeholder="Nhập mật khẩu cũ" name="psw1" id="psw1"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mật Khẩu Mới: </label>
                        <input type="password" placeholder="Nhập mật khẩu mới" name="psw2" id="psw2"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mật Lại Khẩu Mới: </label>
                        <input type="password" placeholder="Nhập lại mật khẩu mới" name="psw3" id="psw3"
                            class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Đóng</button>
                    <button class="btn btn-info" type="submit">Lưu Lại</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>assets/admin/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Custom scripts for all pages-->
<!--ckeditor-->
<script src="<?php echo base_url() ?>assets/admin/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/ckfinder/ckfinder.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/nprogress.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/toastr.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/sb-admin.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/music/howler.js"></script>
<!--Config nguyen duc tai-->
<script src="<?php echo base_url() ?>assets/admin/js/ndtconfig.js"></script>
<!--toastr php-->
<script type="text/javascript">
<?php if ($this->session->flashdata('success')) { ?>
toastr.success("<?php echo $this->session->flashdata('success'); ?>");
<?php } else if ($this->session->flashdata('error')) { ?>
toastr.error("<?php echo $this->session->flashdata('error'); ?>");
<?php } else if ($this->session->flashdata('warning')) { ?>
toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
<?php } else if ($this->session->flashdata('info')) { ?>
toastr.info("<?php echo $this->session->flashdata('info'); ?>");
<?php } ?>
</script>
</body>

</html>