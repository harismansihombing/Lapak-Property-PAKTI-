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

                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Disini Taruh Content nya -->
                    <div class="card">
                      <div class="card-header bg-secondary">
                        <h3 class="text-white">Akun Terdaftar</h3>
                      </div>
                      <div class="card-body text-center">


                        <table class="table table-hover table-bordered">
                                <thead>
                                    <tr class="table-success text-center">
                                        <th scope="col" style="width: 20px;">No</th>
                                        <th scope="col">Judul Postingan</th>
                                        <th scope="col">Alamat Lokasi Properti</th>
                                        <th scope="col">Email</th>
                                        <th scope="col" colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                $no = 1;
                                foreach ($pemilik as $lapak) {

                                ?>
                                    <tbody>

                                        <tr>
                                            <th scope="row" class="text-center"><?php echo $no++ ?></th>
                                            <td><?php echo $lapak->nama_pengguna; ?></td>
                                            <td><?php echo $lapak->no_pengguna; ?></td>
                                            <td><?php echo $lapak->email; ?></td>

                                            <td><?= anchor(base_url('admin/detail_akun_terdaftar/' . $lapak->kd_pengguna), ' detail', array('class' => 'badge badge-primary')) ?></td>
                                            
                                        </tr>
                                    </tbody>
                                <?php } ?>
                            </table>


                         <!-- <table border="0" class="table table-striped" style="text-align:center">
                            <thead class="thead-light">
                              <tr>
                                <th>Nama</th>
                                <th>Nomor Telepon</th>
                                <th>Email</th>
                                <th colspan="2">Aksi</th>
                              </tr>
                                <?php foreach($pemilik as $pmlk) : ?>
                              <tr>
                                <td><?= $pmlk['nama_pengguna']; ?></td>
                                <td><?= $pmlk['no_pengguna']; ?></td>
                                <td><?= $pmlk['email']; ?></td>
                                <td><a href="<?php base_url(); ?>detail_akun_terdaftar" class="badge badge-primary">Detail</a></td>
                                <td><a href="#" class="badge badge-danger">Hapus</a></td>
                              </tr>
                              <?php endforeach; ?>
                            </thead>
                          </table> -->
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