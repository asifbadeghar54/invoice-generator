<!-- Main Content-->
<?php if ($this->session->flashdata('login-success')) { ?>
    <script>
        swal({
            title: 'Well done!',
            text: 'Login success!',
            type: 'success',
            timer: 3000,
            showConfirmButton: false
        });
    </script>
<?php } ?>
<div class="main-content side-content pt-0">

    <div class="container-fluid">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-1">
                    <h1 class="main-content-title tx-30">Dashboard</h1>

                </div>
            </div>
            <!-- End Page Header -->


            <!-- Row -->
           
            <div class="text-center">
                <img src="<?php echo base_url() ?>assets/admin_assets/logo/logo-black.webp"
                    class="header-brand-img text-left mb-5 desktop-logo" alt="logo">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="card overflow-hidden bg-primary-gradient">
                                <div class="card-body">
                                    <div class="d-flex clearfix">
                                        <div class="text-left">
                                            <p class="mb-0 text-white fs-24"><i class="fe fe-printer sidemenu-icon"></i> Total Invoices</p>
                                            <h1 class="mb-0 text-white fs-30">
                                            <?php echo $this->Fetch_Model->get_count('invoices') ?>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
                <!-- </div> -->

            </div>
            <!-- ROW-4 END -->
        </div>
    </div>
</div>
<!-- End Main Content-->