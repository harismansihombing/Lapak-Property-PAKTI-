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
                            <h4 class="m-0 text-dark">Daftar Penyewa</h4>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active">Daftar Penyewa</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">

                <div class="card">
                    <div class="card-header bg-teal">
                        <h3 class="card-title">Daftar Permintaan Penyewa Properti Anda </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr class="">
                                    <th style="width: 8px">NO</th>
                                    <th> Judul Postingan </th>
                                    <th style="width: 140px">Jenis Properti</th>
                                    <th>Alamat</th>
                                    <th style="width: 140px"> Lama Menyewa</th>
                                    <th>Penyewa</th>
                                    <th style="width: 110px">Aksi</th>
                                </tr>

                            </thead>
                            <?php
                            $kd_pengguna = $this->uri->segment(3);
                            ?>
                            <?php
                            $no = 1;
                            foreach ($peminjaman_pending as $data) {

                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $data->Judul_postingan; ?></td>
                                        <td><?php echo $data->nama_jenis; ?></td>
                                        <td><?php echo $data->alamat_lokasi; ?></td>
                                        <td><?php echo $data->lama_waktu_penyewaan; ?></td>
                                        <td><?php echo $data->nama_pengguna; ?></td>
                                        <td>
                                            <a href="<?= base_url('pemilik/detail_daftar_penyewa_pending/' . $kd_pengguna . '/' . $data->kd_peminjaman) ?>" class="btn btn-block btn-outline-primary btn-xs" role="button">
                                                Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-olive">
                        <h3 class="card-title">Daftar Properti anda yang sedang Disewa. </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr class="">
                                    <th style="width: 8px">NO</th>
                                    <th> Judul Postingan </th>
                                    <th style="width: 140px">Jenis Properti</th>
                                    <th>Alamat</th>
                                    <th style="width: 140px"> Lama Menyewa</th>
                                    <th>Penyewa</th>
                                    <th style="width: 110px">Aksi</th>
                                </tr>

                            </thead>
                            <?php
                            $kd_pengguna = $this->uri->segment(3);
                            ?>
                            <?php
                            $no = 1;
                            foreach ($peminjaman as $d) {

                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $d->Judul_postingan; ?></td>
                                        <td><?php echo $d->nama_jenis; ?></td>
                                        <td><?php echo $d->alamat_lokasi; ?></td>
                                        <td><?php echo $d->lama_waktu_penyewaan; ?></td>
                                        <td><?php echo $d->nama_pengguna; ?></td>
                                        <td>
                                            <a href="<?= base_url('pemilik/detail_daftar_penyewa/' . $kd_pengguna . '/' . $d->kd_peminjaman) ?>" class="btn btn-block btn-outline-danger btn-xs" role="button">
                                                Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>


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