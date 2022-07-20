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
                                <li class="breadcrumb-item active">Riwayat Sewa</li>
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
                                        <?php
                                        $no = 1;
                                        foreach ($riwayat_sewa as $data) {
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
                                                        <a href="<?= base_url('penyewa/detail_riwayat_sewa/' . $kd_pengguna) ?>" class="btn btn-block btn-success btn-sm" role="button">
                                                            Detail</a>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        <?php } ?>
                                    </table>
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