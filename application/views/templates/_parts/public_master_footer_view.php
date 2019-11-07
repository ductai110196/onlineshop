<footer class="page-footer font-small blue pt-4 bg-success text-white rounded my-2">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3" id="shopname">

                <!-- Content -->
                <h5 class="text-uppercase">Online Shop</h5>
                <p>Địa chỉ: số 702 - tổ 15 - ấp 2 -xã An Hữu - huyện Cái Bè - tỉnh Tiền Giang</p>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31403.848854975724!2d105.86439327618876!3d10.30332792918266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a83fbf58f45af%3A0xcd961e15877f9678!2zQW4gSOG7r3UsIEPDoWkgQsOoLCBUaeG7gW4gR2lhbmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1568547939083!5m2!1svi!2s" width="500" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3" id="contact">

                <!-- Links -->
                <h5 class="text-uppercase">Hổ Trợ</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Hoạt Động: T2-T7 24/24 </a>
                    </li>
                    <li>
                        <a href="#!">Hot line: +849999999</a>
                    </li>
                    <li>
                        <a href="#!">Hướng Dẫn</a>
                    </li>
                    <li>
                        <a href="#!">Nhân Viên Tư Vấn</a>
                    </li>
                    <li>
                        <a href="#!">Email: tai9331@gmail.com</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3" id="socical">

                <!-- Links -->
                <h5 class="text-uppercase">Tương Tác</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!"><img
                                src="<?php echo base_url() ?>assets/public/img/Zalo-bong-bong-chat-logo200.png"
                                id="zalo" class="img-fluid mx-2">
                            Zalo</a>
                    </li>
                    <li>
                        <a href="#!"><i class="fab fa-facebook mx-2 text-primary"></i>FaceBook</a>
                    </li>
                    <li>
                        <a href="#!"><i class="fab fa-youtube-square mx-2 text-danger"></i>YouTuBe</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="#" class="text-white">Nguyễn Đức Tài</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer-->
</div>




<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user fa-1x mx-2 text-info"></i>Đăng Nhập
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for=""><i class="fa fa-user-circle text-success mx-2"></i>Tài khoản: </label>
                    <input type="text" name="" id="" class="form-control" placeholder="Nhập tài khoản">
                    <small class="text-muted">Tài khoản 6 ký tự</small>
                </div>
                <div class="form-group">
                    <label for=""><i class="fas fa-key text-warning mx-2"></i>Mật khẩu: </label>
                    <input type="password" name="" id="" class="form-control" placeholder="Nhập mật khẩu">
                    <small class="text-muted">Mật khẩu 8 ký tự</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                        class="fa fa-sign-out-alt mx-2"></i>Đóng
                    Lại</button>
                <button type="button" class="btn btn-success"><i class="fa fa-sign-in-alt mx-2"></i>Đăng Nhập</button>
            </div>
        </div>
    </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top"></button>
<script src="<?php echo base_url() ?>assets/public/js/jquery-3.4.0.js"></script>
<script src="<?php echo base_url() ?>assets/public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/public/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/public/custom/toastr.min.js"></script>
<script type="text/javascript">
    <?php if ($this->session->flashdata('success')) {?>
    toastr.success("<?php echo $this->session->flashdata('success'); ?>");
    <?php } else if ($this->session->flashdata('error')) {?>
    toastr.error("<?php echo $this->session->flashdata('error'); ?>");
    <?php } else if ($this->session->flashdata('warning')) {?>
    toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
    <?php } else if ($this->session->flashdata('info')) {?>
    toastr.info("<?php echo $this->session->flashdata('info'); ?>");
    <?php }?>
</script>
<script src="<?php echo base_url() ?>assets/public/custom/ndtconfig.js"></script>
<script src="<?php echo base_url() ?>assets/public/custom/custom.js"></script>

</body>

</html>