<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $page_title ?></title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url() ?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url() ?>assets/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/admin/css/toastr.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/css/nprogress.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets/admin/css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/css/cssndt.css" rel="stylesheet">
</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-success static-top">

        <a class="navbar-brand mr-1" href="index.html">Danh Mục</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Tìm kiếm..." aria-label="Search"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-light" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <span class="badge badge-danger">9+</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span class="badge badge-danger">7</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Cài Đặt</a>
                    <a class="dropdown-item" id="doimatkhau" href="javascript:void(0)" data-toggle="modal"
                        data-target="#modal_doi">Đổi Mật Khẩu</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Đăng Xuất</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>index.php/admin/dashboard">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Trang Chủ</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>index.php/admin/user">
                    <i class="fas fa-fw fa-users-cog"></i>
                    <span>Quản Lý Người Dùng</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>index.php/admin/category">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Quản Lý Loại Hàng</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>index.php/admin/product">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Quản Lý Sản Phẩm</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>index.php/admin/order">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Quản Lý Đơn Hàng</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>index.php/admin/resport">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Quản Lý Thống Kê</span></a>
            </li>
        </ul>

        <div id="content-wrapper">