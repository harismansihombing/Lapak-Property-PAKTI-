<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/template/head') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar // Ini Bagian header -->
        <?php $this->load->view('admin/template/header') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container || ini bagian Sidebar-->
        <?php $this->load->view('admin/template/sidebar') ?>
        <!-- /.sidebar -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Disini Taruh Content nya -->
                    <div class="row">
	                    <div class="col-lg-3">
		                    <div class="card bg-primary">
		                    	<h5 class="card-header">Pendaftar</h5>
		                    	<div class="card-body">
		                    		<h3>ANGKA</h3>
		                    		<a href="<?= base_url(); ?>admin/pendaftar" class="btn btn-light col-sm-4 float-right">GO</a>
		                    	</div>
		                    </div>
		                </div>
		                <div class="col-lg-3">
		                    <div class="card bg-success" style="margin-left: 10px;">
		                    	<h5 class="card-header">Akun Terdaftar</h5>
		                    	<div class="card-body">
		                    		<h3>ANGKA</h3>
		                    		<a href="<?= base_url(); ?>admin/akun_terdaftar" class="btn btn-light col-sm-4 float-right">GO</a>
		                    	</div>
		                    </div>
		                </div>
		                <div class="col-lg-3">
		                    <div class="card bg-warning" style="margin-left: 10px;">
		                    	<h5 class="card-header">Daftar Postingan</h5>
		                    	<div class="card-body">
		                    		<h3>ANGKA</h3>
		                    		<a href="<?= base_url(); ?>admin/postingan" class="btn btn-light col-sm-4 float-right">GO</a>
		                    	</div>
		                    </div>
		                </div>
                        <div class="col-lg-3">
                            <div class="card bg-danger" style="margin-left: 10px;">
                                <h5 class="card-header">Verifikasi Postingan</h5>
                                <div class="card-body">
                                    <h3>ANGKA</h3>
                                    <a href="<?= base_url(); ?>admin/verifikasi_postingan" class="btn btn-light col-sm-4 float-right">GO</a>
                                </div>
                            </div>
                        </div>
	                </div>
                    
                    

                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer || INI BAGIAN FOOTER -->
        <?php $this->load->view('admin/template/footer') ?>

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS || INI BAGIAN JS-->
    <?php $this->load->view('admin/template/js') ?>

</body>

</html>