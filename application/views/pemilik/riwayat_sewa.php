<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('penyewa/template/head') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('penyewa/template/navbar') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('penyewa/template/sidebar') ?>
        <!-- /.Sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4 class="m-0 text-dark">Riwayat Sewa</h4>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v2</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Daftar Property yang pernah anda Sewa</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered text-center">
                                        <?php
                                        $kd_pengguna = $this->uri->segment(3);
                                        ?>
                                        <thead>
                                            <tr>
                                                <th style="width: 8px">NO</th>
                                                <th class="bg-secondary"> Judul Postingan </th>
                                                <th style="width: 140px" class="bg-secondary">Jenis Property</th>
                                                <th class="bg-secondary">Alamat</th>
                                                <th style="width: 140px" class="bg-secondary"> Lama Menyewa</th>
                                                <th class="bg-secondary">Pemilik</th>
                                                <th style="width: 110px" class="bg-secondary">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="bg-secondary">1.</td>
                                                <td>Tanah Murah</td>
                                                <td>
                                                    TANAH
                                                </td>
                                                <td>
                                                    jl. Mastrip
                                                </td>
                                                <td> 6 Bulan </td>
                                                <td>Reza</td>
                                                <td>
                                                    <a href="<?= base_url('penyewa/detail_riwayat_sewa/' . $kd_pengguna) ?>" class="btn btn-block btn-success btn-sm" role="button">
                                                        Detail</a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="bg-secondary">2.</td>
                                                <td>Rumah Mewah</td>
                                                <td>
                                                    RUMAH
                                                </td>
                                                <td>
                                                    Mangli
                                                </td>
                                                <td> # </td>
                                                <td>
                                                    Reza
                                                </td>
                                                <td>
                                                    <a href="<?php echo site_url() ?>welcome/detail_riwayat_sewa" class="btn btn-block btn-success btn-sm" role="button">
                                                        Detail</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-secondary">3.</td>
                                                <td>Ruko 2 Lantai</td>
                                                <td>
                                                    RUKO
                                                </td>
                                                <td>
                                                    Medan
                                                </td>
                                                <td> # </td>
                                                <td>
                                                    Harisman
                                                </td>
                                                <td>
                                                    <a href="<?php echo site_url() ?>welcome/detail_riwayat_sewa" class="btn btn-block btn-success btn-sm" role="button">
                                                        Detail</a>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-secondary">4.</tdtf>
                                                <td>Ruko 3 Lantai</td>
                                                <td>
                                                    RUKO
                                                </td>
                                                <td>Sumber Sari</td>
                                                <td> # </td>
                                                <td>
                                                    Rifqi Firmansyah
                                                </td>
                                                <td>
                                                    <a href="<?php echo site_url() ?>welcome/detail_riwayat_sewa" class="btn btn-block btn-success btn-sm" role="button">
                                                        Detail</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <ul class="pagination pagination-sm m-0 float-right">
                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                    </ul>
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

        <!-- Main Footer -->
        <?php $this->load->view('penyewa/template/footer'); ?>
        <!-- / Main Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('penyewa/template/js'); ?>
</body>

</html>