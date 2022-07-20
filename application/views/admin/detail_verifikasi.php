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
                                    <div card="card-title">Informasi Postingan</div>
                                </div>
                                <div class="card-body">
                                    <div class="form">
                                        <label>Judul Postingan</label>
                                        <input type="text" name="judul_postingan" value="<?= $verifikasi[0]->Judul_postingan; ?>" style="width: 100%;">
                                    </div>
                                    <div class="form">
                                        <label>Harga Sewa Pertahun</label>
                                        <input type="text" name="harga_sewa_pertahun" value="<?= $verifikasi[0]->harga_sewa_pertahun; ?>" style="width: 100%;">
                                    </div>
                                    <div class="form">
                                        <label>Harga Sewa Perbulan</label>
                                        <input type="text" name="harga_sewa_perbulan" value="<?= $verifikasi[0]->harga_sewa_perbulan; ?>" style="width: 100%;">
                                    </div>
                                    <div class="form">
                                        <label>Alamat Lokasi</label>
                                        <input type="text" name="alamat_lokasi" value="<?= $verifikasi[0]->alamat_lokasi; ?>" style="width: 100%;">
                                    </div>
                                    <div class="form">
                                        <label>Luas Tanah</label>
                                        <input type="text" name="luas_tanah" value="<?= $verifikasi[0]->luas_tanah; ?>" style="width: 100%;">
                                    </div>
                                    <div class="form">
                                        <label>Luas Bangunan</label>
                                        <input type="text" name="judul_postingan" value="<?= $verifikasi[0]->luas_bangunan; ?>" style="width: 100%;">
                                    </div>
                                    <div class="form">
                                        <label>Kamar Tidur</label>
                                        <input type="text" name="jumlah_kamar_tidur" value="<?= $verifikasi[0]->jumlah_kamar_tidur; ?>" style="width: 100%;">
                                    </div>
                                    <div class="form">
                                        <label>Kamar Mandi</label>
                                        <input type="text" name="jumlah_kamar_mandi" value="<?= $verifikasi[0]->jumlah_kamar_mandi; ?>" style="width: 100%;">
                                    </div>
                                    <div class="form">
                                        <label>Sumber Air</label>
                                        <input type="text" name="sumber_air" value="<?= $verifikasi[0]->sumber_air; ?>" style="width: 100%;">
                                    </div>
                                    <div class="form">
                                        <label>Daya Listrik</label>
                                        <input type="text" name="daya_listrik" value="<?= $verifikasi[0]->daya_listrik; ?>" style="width: 100%;">
                                    </div>
                                    <div class="form">
                                        <label>Deskripsi</label>
                                        <input type="text" name="deskripsi" value="<?= $verifikasi[0]->Deskripsi; ?>" style="width: 100%;">
                                    </div>
                                    <div class="form">
                                        <label>Jumlah Lantai</label>
                                        <input type="text" name="jumlah_lantai" value="<?= $verifikasi[0]->jumlah_lantai; ?>" style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <?= anchor(base_url('admin/hapusVerifikasi/' . $verifikasi[0]->kd_lapak), ' Tolak', array('class' => 'btn btn-danger')) ?>
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