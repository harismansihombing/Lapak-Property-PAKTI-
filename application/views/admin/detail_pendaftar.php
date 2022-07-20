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
                  
                      <div class="row">
                        <div class="col-lg-6"> 
                            <div class="card">
                                <div class="card-header bg-warning">
                                    <div class="card-title">Informasi Pemilik</div>
                                </div>
                                <div class="card-body">
                                    <div class="form">
                                        <label>NIK</label>
                                        <input type="text" name="nik_pengguna" value="<?= $penyewa[0]->NIK_pengguna; ?>" style="width: 100%;" >
                                    </div>
                                    <div class="form">
                                        <label>Nama</label>
                                        <input type="text" name="nama" value="<?= $penyewa[0]->nama_pengguna; ?>" style="width: 100%">
                                    </div>
                                    <div class="form">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" value="<?= $penyewa[0]->alamat_pengguna; ?>" style="width: 100%">
                                    </div>
                                    <div class="form">
                                        <label>Nomor Telepon</label>
                                        <input type="text" name="no_telepon" value="<?= $penyewa[0]->no_pengguna; ?>" style="width: 100%">
                                    </div>
                                    <div class="form">
                                        <label>Email</label>
                                        <input type="text" name="email" value="<?= $penyewa[0]->email; ?>" style="width: 100%">
                                    </div>
                                    <div class="form">
                                        <label>Username</label>
                                        <input type="text" name="username" value="<?= $penyewa[0]->username; ?>" style="width: 100%">
                                    </div>
                                    <div class="form">
                                        <label>Password</label>
                                        <input type="password" name="password" value="<?= $penyewa[0]->password; ?>" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="<?= base_url('admin/terima_penyewa/'. $penyewa[0]->kd_pengguna) ;?>" class="btn btn-success" style="margin-left: 150px; margin-right: 50px;">Terima</a>
                                <?= anchor(base_url('admin/hapusPenyewa/' . $penyewa[0]->kd_pengguna), ' Tolak', array('class' => 'btn btn-danger')) ?>
                            </div>
                        </div>
                    

                        <div class="col-lg-6"> 
                            <div class="card">
                                <div class="card-header bg-success">
                                    <div class="card-title">
                                        Foto Pemilik
                                    </div>
                                </div>
                                    <div class="card-body">
                                    <div class="form">
                                        <label>NIK</label>
                                        <input type="text" name="nik" value="" style="width: 100%;">
                                    </div>
                                    
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