<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> <?php echo $page_title ?></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/security/css/style.css">
</head>

<body id="particles-js">
    <div class="loginBox">
        <img src="<?php echo base_url() ?>assets/security/img/user.png" class="user">
        <h2>Đăng Nhập</h2>
        <form action="<?php echo base_url() ?>index.php/security/acount/login" method="get">
            <p>Tài khoản:</p>
            <input type="text" name="username" placeholder="Nhập tài khoản">
            <p>Mật khẩu:</p>
            <input type="password" name="password" placeholder="••••••">
            <input type="submit" name="login" value="Đăng Nhập">
            <a href="#">Quên mật khẩu?</a>
        </form>
    </div>
    <script src="<?php echo base_url() ?>assets/security/js/particles.min.js"></script>
    <script src="<?php echo base_url() ?>assets/security/js/app.js"></script>
</body>

</html>