<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="SRI VINAYAK WHEELS" content="SRI VINAYAK WHEELS">
    <meta name="SRI VINAYAK WHEELS" content="SRI VINAYAK WHEELS">
    <meta name="SRI VINAYAK WHEELS" content="SRI VINAYAK WHEELS">
    <!-- Favicon -->
    <!-- Title -->
    <title>SRI VINAYAK WHEELS</title>
    <!-- Bootstrap css-->
    <link href="<?php echo base_url() ?>assets/admin_assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Icons css-->
    <link href="<?php echo base_url() ?>assets/admin_assets/css/icons.css" rel="stylesheet" />
    <!-- Style css-->
    <link href="<?php echo base_url() ?>assets/admin_assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin_assets/css/dark-boxed.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin_assets/css/boxed.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin_assets/css/skins.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin_assets/css/dark-style.css" rel="stylesheet">
    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="<?php echo base_url() ?>assets/admin_assets/css/colors/color.css">
    <!-- Select2 css -->
    <link href="<?php echo base_url() ?>assets/admin_assets/plugins/select2/css/select2.min.css" rel="stylesheet">
    <!-- Internal DataTables css-->
    <link href="<?php echo base_url() ?>assets/admin_assets/plugins/datatable/dataTables.bootstrap4.min.css"
        rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/admin_assets/plugins/datatable/responsivebootstrap4.min.css"
        rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/admin_assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css"
        rel="stylesheet" />

    <!-- Sidemenu css-->
    <link href="<?php echo base_url() ?>assets/admin_assets/css/sidemenu/sidemenu.css" rel="stylesheet">

    <!-- Bootstrap Validations -->
    <script src="<?php echo base_url() ?>assets/admin_assets/validations/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin_assets/validations/bootstrap.min.js"></script>

    <!-- Internal Sweet-Alert css-->
    <link href="<?php echo base_url() ?>assets/admin_assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>assets/admin_assets/plugins/sweet-alert/sweetalert.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin_assets/plugins/sweet-alert/jquery.sweet-alert.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PrintArea/2.4.1/jquery.PrintArea.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <style type="text/css">
        .help-block {
            color: red;
        }
    </style>

    <!-- Page -->
    <?php if ($this->session->flashdata('error')) { ?>
        <Script>
            swal({
                title: 'Form Failed to Add!',
                text: '<?php echo $this->session->flashdata('error') ?>',
                type: 'error',
                timer: 3000,
                showConfirmButton: false
            });
        </Script>
    <?php } ?>
    <?php if ($this->session->flashdata('success')) { ?>
        <Script>
            swal({
                title: 'Well done!',
                text: '<?php echo $this->session->flashdata('success') ?>',
                type: 'success',
                timer: 3000,
                showConfirmButton: false
            });
        </Script>
    <?php } ?>

    <?php if ($this->session->flashdata('update')) { ?>
        <Script>
            swal({
                title: 'Well done!',
                text: 'caste update successfully!',
                type: 'success',
                timer: 3000,
                showConfirmButton: false
            });
        </Script>
    <?php } ?>
    <?php if ($this->session->flashdata('delete')) { ?>
        <Script>
            swal({
                title: 'Well done!',
                text: 'caste deleted successfully!',
                type: 'success',
                timer: 3000,
                showConfirmButton: false
            });
        </Script>
    <?php } ?>
</head>

<body class="main-body leftmenu light-leftmenu">

    <!-- Page -->
    <div class="page">
        <!-- Sidemenu -->
        <div class="main-sidebar main-sidebar-sticky side-menu">
            <div class="main-sidebar-body">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="<?php echo base_url('') ?>"><i
                                class="fe fe-home sidemenu-icon"></i><span class="sidemenu-label">Dashboard</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="<?php echo base_url('invoicelist') ?>"><i
                                class="fe fe-printer sidemenu-icon"></i><span class="sidemenu-label">invoice</span></a>
                    </li>
            </div>
        </div>
        <!-- End Sidemenu -->

        <!-- Main Header-->
        <div class="main-header side-header sticky">
            <div class="container-fluid">
                <div class="main-header-left">
                    <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
                </div>
                <h2 class="text-right text-danger">SRI VINAYAK WHEELS<h2>
                        <div class="main-header-right">

                            <div class="dropdown main-profile-menu">
                                <a class="d-flex" href="#">
                                    <i class="fe fe-user p-2 rounded-10 bg-primary text-white"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="header-navheading">
                                        <h6 class="main-notification-title text-capitalize">
                                            <?php echo $this->session->userdata('admin_username') ?>
                                        </h6>
                                    </div>
                                    <a class="dropdown-item" href="<?php echo base_url('reset-password') ?>">
                                        <i class="fe fe-settings"></i> Change Password
                                    </a>
                                    <a class="dropdown-item" href="<?php echo base_url('auth/authLogout') ?>">
                                        <i class="fe fe-power"></i> Sign Out
                                    </a>
                                </div>
                            </div>
                            <button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                            </button>
                        </div>
            </div>
        </div>
        <!-- End Main Header-->

        <!-- Mobile-header -->
        <div class="mobile-main-header">
            <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <div class="d-flex order-lg-2 ml-auto">

                        <div class="dropdown main-profile-menu">
                            <a class="d-flex" href="#">
                                <span class="main-img-user">
                                    <i class="fe fe-user"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="header-navheading">
                                    <h6 class="main-notification-title">Admin</h6>

                                </div>
                                <a class="dropdown-item" href="<?php echo base_url('reset-password') ?>">
                                    <i class="fe fe-settings"></i> Change Password
                                </a>
                                <a class="dropdown-item" href="<?php echo base_url('master/adminLogout') ?>">
                                    <i class="fe fe-power"></i> Sign Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile-header closed -->