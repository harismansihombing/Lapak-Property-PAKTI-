<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Syarat & Ketentuan</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="<?= base_url('frontend') ?>" class="navbar-brand">
                    <!-- <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                    <span class="brand-text font-weight-light">Lapak Properti</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>



            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"> Syarat & Ketentuan Buat Lapak</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active">Syarat & Ketentuan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>Keuntungan Bergabung Menjadi Lapak</strong></h5>
                                    <br>
                                    <ul class="card-text">
                                        <li>
                                            Anda dapat mengiklankan properti anda tanpa harus membayar
                                        </li>
                                        <li>
                                            Kami akan menjamin keamanan data anda
                                        </li>
                                        <li>
                                            Anda tidak perlu meminta bantuan pihak ketiga
                                        </li>
                                    </ul>
                                    <!-- <a href="#" class="card-link">Card link</a> -->
                                    <!-- <a href="#" class="card-link">Another link</a> -->
                                </div>
                            </div>

                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>Syarat & Ketentuan Menjadi Lapak</strong></h5>
                                    <ul class="card-text">
                                        <li>
                                            Pendaftar Wajib Berwarga Negara Indonesia
                                        </li>
                                        <li>
                                            Pastikan data yang anda kirim pada kami benar dan dapat dipertanggung jawabkan
                                        </li>
                                        <li>
                                            Anda dilarang mengirimkan atau meneruskan postingan milik orang lain
                                        </li>
                                        <li>
                                            Sebelum mengirim postingan pastikan data sudah benar
                                        </li>
                                        <li>
                                            Apabila Anda Melanggar Aturan yang ditetapkan oleh Lapak Properti, Akun Anda Akan dinonaktifkan tanpa pemberitahuan terlebih dahulu
                                        </li>
                                    </ul>

                                </div>
                            </div><!-- /.card -->
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header bg-danger">
                                    <h5 class="card-title m-0 ">Perhatian</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Kami tidak pernah Meminta dan Menyuruh untuk <strong> Mentransfer Uang </strong>dengan Nominal Berapapun!</p>
                                </div>
                            </div>

                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <h6 class="card-title"></h6>
                                    <?php
                                    $kd_pengguna = $this->uri->segment(3);
                                    ?>
                                    <p class="card-text">Klik di bawah untuk melanjutkan Buat Lapak</p>
                                    <a href="<?= base_url('penyewa/buka_toko/' . $kd_pengguna) ?>" class="btn btn-primary">Buat Lapak</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer text-small">
            <!-- Default to the left -->
            <strong>Copyright &copy; 2020 <a href="#">Lapak Properti</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>
</body>

</html>