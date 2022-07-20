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
                            <h4 class="m-0 text-dark">Daftar Postingan</h4>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Daftar Postingan</li>
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
                                    <h3 class="card-title">Daftar Postingan Anda</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th style="width: 8px">NO</th>
                                                <th>Judul Postingan</th>
                                                <th style="width: 140px">Jenis Property</th>
                                                <th>Alamat</th>
                                                <th>Harga</th>
                                                <th>Tanggal Posting</th>
                                                <th style="width: 110px" class="bg-secondary">Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $kd_pengguna = $this->uri->segment(3);
                                        ?>
                                        <?php
                                        $no = 1;
                                        foreach ($lapak as $u) {

                                        ?>
                                            <tbody>

                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $u->Judul_postingan; ?></td>
                                                    <td><?php echo $u->kd_jenis; ?></td>
                                                    <td><?php echo $u->alamat_lokasi; ?></td>
                                                    <td><?php echo $u->harga_sewa_pertahun; ?></td>
                                                    <td><?php echo $u->tanggal; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('pemilik/edit_daftar_postingan/' . $kd_pengguna) ?>"><button class="btn btn-block btn-success btn-sm">Edit</button></a>

                                                        <a href="<?= base_url('pemilik/hapus_daftar_postingan/' . $u->kd_lapak . '/' . $kd_pengguna) ?>" class="btn btn-block btn-danger btn-sm" role="button">Hapus</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        <?php } ?>
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


        <!-- Main Footer -->
        <?php $this->load->view('penyewa/template/footer'); ?>
        <!-- / Main Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('penyewa/template/js'); ?>
</body>

</html>