<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/public/custom/toastr.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/public/custom/custom.css">
    <title><?php echo $page_title ?></title>
</head>

<body>


    <div id="divAdRight" style="display: none; POSITION: absolute; TOP: 0px">

        <a href="http://www.chiase69.com"><img
                src="http://3.bp.blogspot.com/-DFWCRf2oANg/UmDs8ZxWtiI/AAAAAAAAFC0/0Ecu36I5MgI/s1600/fptarena1.png"
                width="125" /></a>

    </div>

    <div id="divAdLeft" style="display: none; POSITION: absolute; TOP: 0px">

        <a href="www.chiase69.com"><img
                src="http://3.bp.blogspot.com/-DFWCRf2oANg/UmDs8ZxWtiI/AAAAAAAAFC0/0Ecu36I5MgI/s1600/fptarena1.png"
                width="125" /></a>

    </div>



    <script>
    function FloatTopDiv()

    {

        startLX = ((document.body.clientWidth - MainContentW) / 2) - LeftBannerW - LeftAdjust, startLY = TopAdjust + 80;

        startRX = ((document.body.clientWidth - MainContentW) / 2) + MainContentW + RightAdjust, startRY = TopAdjust +
            80;

        var d = document;

        function ml(id)

        {

            var el = d.getElementById ? d.getElementById(id) : d.all ? d.all[id] : d.layers[id];

            el.sP = function(x, y) {
                this.style.left = x + 'px';
                this.style.top = y + 'px';
            };

            el.x = startRX;

            el.y = startRY;

            return el;

        }

        function m2(id)

        {

            var e2 = d.getElementById ? d.getElementById(id) : d.all ? d.all[id] : d.layers[id];

            e2.sP = function(x, y) {
                this.style.left = x + 'px';
                this.style.top = y + 'px';
            };

            e2.x = startLX;

            e2.y = startLY;

            return e2;

        }

        window.stayTopLeft = function()

        {

            if (document.documentElement && document.documentElement.scrollTop)

                var pY = document.documentElement.scrollTop;

            else if (document.body)

                var pY = document.body.scrollTop;

            if (document.body.scrollTop > 30) {
                startLY = 3;
                startRY = 3;
            } else {
                startLY = TopAdjust;
                startRY = TopAdjust;
            };

            ftlObj.y += (pY + startRY - ftlObj.y) / 16;

            ftlObj.sP(ftlObj.x, ftlObj.y);

            ftlObj2.y += (pY + startLY - ftlObj2.y) / 16;

            ftlObj2.sP(ftlObj2.x, ftlObj2.y);

            setTimeout("stayTopLeft()", 1);

        }

        ftlObj = ml("divAdRight");

        //stayTopLeft();  

        ftlObj2 = m2("divAdLeft");

        stayTopLeft();

    }

    function ShowAdDiv()

    {

        var objAdDivRight = document.getElementById("divAdRight");

        var objAdDivLeft = document.getElementById("divAdLeft");

        if (document.body.clientWidth < 1000)

        {

            objAdDivRight.style.display = "none";

            objAdDivLeft.style.display = "none";

        } else

        {

            objAdDivRight.style.display = "block";

            objAdDivLeft.style.display = "block";

            FloatTopDiv();

        }

    }
    </script>

    <script>
    document.write(
        "<script type='text/javascript' language='javascript'>MainContentW = 1280;LeftBannerW = 125;RightBannerW = 125;LeftAdjust = 5;RightAdjust = 5;TopAdjust = 10;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>"
    );
    </script>


    <div class="container my-3 bg-warning rounded m-auto py-2">
        <header>
            <ul class="menu-right bg-success rounded">
                <li><a href="javascript:void(0)" id="login_shop"><i class="fas fa-sign-in-alt mx-2"></i>Đăng Nhập</a>
                </li>
                <li><a href=""><i class="fas fa-user mx-2"></i>Đăng Ký</a></li>
                <li><a href="<?php echo base_url() ?>index.php/gio-hang"><i class="fas fa-shopping-cart mx-2"></i>Cart
                        <span class="badge badge-warning rounded">
                            <?php
                            $temp = $this->session->userdata('cart_ses');
                            if (empty($temp)) {
                                echo "0";
                            } else {
                                echo $temp;
                            }
                            ?>
                    </a>
                </li>
                <li><a href=""><i class="fas fa-sign-out-alt mx-2"></i>Đăng Xuất</a></li>
            </ul>
        </header>
        <div class="menu my-2">
            <nav class="navbar navbar-expand-sm navbar-dark bg-success rounded">
                <a class="navbar-brand" href="#" id="logo"><img
                        src="<?php echo base_url() ?>assets/public/img/shop-on-line.png"
                        class="img-fluid img-thumbnail rounded" width="60" height="60"></img>
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url() ?>index.php/trang-chu"><i
                                    class="fa fa-home mx-2"></i>Trảng Chủ <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-newspaper mx-2"></i>Giới Thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-comment mx-2"></i>Hổ Trợ</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm...">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Tìm Kiếm</button>
                    </form>
                </div>
            </nav>
        </div>