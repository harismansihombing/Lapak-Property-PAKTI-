<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    use PhpParser\Node\Stmt\Echo_;

    $this->load->view('penyewa/template/head') ?>
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
                            <h4 class="m-0 text-dark">Transaksi Sewa</h4>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Transaksi Sewa</li>
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
                                <div class="card-header bg-olive">
                                    <h3 class="card-title">Pesanan Sewa</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php
                                    $kd_pengguna = $this->uri->segment(3);
                                    ?>
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th style="width: 8px">NO</th>
                                                <th>Judul Postingan</th>
                                                <th style="width: 140px">Jenis Properti</th>
                                                <th>Alamat</th>
                                                <th>Status Sewa</th>
                                                <th style="width: 110px">Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no = 1;
                                        foreach ($hasil as $u) {

                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $u->Judul_postingan; ?></td>
                                                    <td>
                                                        <?php echo $u->nama_jenis; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $u->alamat_lokasi; ?>
                                                    </td>
                                                    <td><?php echo $u->status_penyewaan; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('penyewa/tampil_detail_sewa_pending/' . $kd_pengguna . '/' . $u->kd_peminjaman) ?>" class="btn btn-block btn-success btn-sm" role="button">Lihat
                                                            Detail</a>
                                                    </td>



                                                </tr>
                                                <tr>

                                                </tr>

                                            </tbody>
                                        <?php } ?>
                                    </table>
                                    <?php
                                    if (!isset($u)) echo 'Anda Belum Memiliki Transaksi Sewa';
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header bg-warning">
                                    <h3 class="card-title">Sedang Menyewa</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php
                                    $kd_pengguna = $this->uri->segment(3);
                                    ?>
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th style="width: 8px">NO</th>
                                                <th>Judul Postingan</th>
                                                <th style="width: 140px">Jenis Properti</th>
                                                <th>Alamat</th>
                                                <th>Status Sewa</th>
                                                <th style="width: 110px">Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no = 1;
                                        foreach ($hasil1 as $id) {

                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $id->Judul_postingan; ?></td>
                                                    <td>
                                                        <?php echo $id->nama_jenis; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $id->alamat_lokasi; ?>
                                                    </td>
                                                    <td><?php echo $id->status_penyewaan; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('penyewa/tampil_detail_sewa/' . $kd_pengguna . '/' . $id->kd_peminjaman) ?>" class="btn btn-block btn-success btn-sm" role="button">Lihat
                                                            Detail</a>
                                                    </td>

                                                </tr>

                                            </tbody>
                                        <?php } ?>
                                    </table>
                                    <?php
                                    if (!isset($id)) echo 'Anda Tidak Mempunyai Transaksi Sewa. Untuk Menyewa Anda bisa Mencari Pada Katalog';
                                    ?>
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