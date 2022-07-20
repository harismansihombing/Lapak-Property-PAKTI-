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
                            <h4 class="m-0 text-dark">Detail Penyewaan</h4>
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
                        <div class="col-8">
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <form action="<?= base_url('pemilik/detail_daftar_penyewa_pending_tolak/' . $kd_pengguna = $this->uri->segment(3)) ?>" method="POST">
                                        <h3 class="profile-username text-bold text-center ">Spesifikasi Properti</h3>

                                        <ul class="list-group list-group-unbordered mb-3">
                                            <li class="list-group-item">
                                                <b>Judul Postingan :</b>
                                                <div style="width: 300px;"><?= $properti['0']->Judul_postingan ?></div>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Jenis Properti </b> <a class="float-right"><?= $properti['0']->nama_jenis ?></a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Lama Waktu Penyewaan</b> <a class="float-right"><?= $properti['0']->lama_waktu_penyewaan ?></a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Harga Sewa</b> <a class="float-right"><?= $properti['0']->harga_sewa_pertahun ?></a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Alamat Lokasi </b> <a class="float-right"><?= $properti['0']->alamat_lokasi ?></a>
                                            </li>
                                            <li class="list-group-item bg-olive text-center"> Informasi Penyewa</li>
                                        </ul>
                                        <ul class="list-group list-group-unbordered mb-3">
                                            <li class="list-group-item">
                                                <b>Nama Penyewa</b> <a class="float-right"><?= $peminjaman_pending['0']->nama_pengguna ?></a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Nomor Penyewa</b> <a class="float-right"><?= $peminjaman_pending['0']->no_pengguna ?></a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Lama Waktu Penyewaan</b> <a class="float-right"><?= $peminjaman_pending['0']->lama_waktu_penyewaan ?></a>
                                            </li>
                                        </ul>

                                        <input type="text" name="kd_peminjaman" value="<?= $properti['0']->kd_peminjaman ?>">
                                        <input type="text" name="kd_lapak" value="<?= $properti['0']->kd_lapak ?>">
                                        <input type="text" name="kd_pengguna" value="<?= $properti['0']->kd_pengguna ?>">
                                        <input type="text" name="lama_waktu_penyewaan" value="<?= $properti['0']->lama_waktu_penyewaan ?>">
                                        <input type="text" name="tgl_awal_penyewaan" value="<?= $properti['0']->tgl_awal_penyewaan ?>">
                                        <input type="text" name="tgl_penyewaan_berakhir" value="<?= $properti['0']->tgl_penyewaan_berakhir ?>">


                                        <div class="modal-footer right-content-between">
                                            <button type="submit" class="btn btn-danger btn-sm">Tolak Penawaran</button>
                                        </div>
                                    </form>

                                    <form action="<?= base_url('pemilik/detail_daftar_penyewa_pending_terima/' . $kd_pengguna = $this->uri->segment(3)) ?>" method="POST">
                                        <input type="text" name="kd_peminjaman" value="<?= $properti['0']->kd_peminjaman ?>">
                                        <input type="text" name="kd_lapak" value="<?= $properti['0']->kd_lapak ?>">
                                        <input type="text" name="kd_pengguna" value="<?= $properti['0']->kd_pengguna ?>">
                                        <input type="text" name="lama_waktu_penyewaan" value="<?= $properti['0']->lama_waktu_penyewaan ?>">
                                        <input type="text" name="tgl_awal_penyewaan" value="<?= $properti['0']->tgl_awal_penyewaan ?>">
                                        <input type="text" name="tgl_penyewaan_berakhir" value="<?= $properti['0']->tgl_penyewaan_berakhir ?>">


                                        <div class="modal-footer right-content-between">
                                            <button type="submit" class="btn btn-success btn-sm">Terima Penawaran</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card card-primary card-outline">
                                <div class="card-body box-foto">
                                    <h3 class="profile-username font-weight-light text-center ">Foto Property</h3>

                                    <div class="card-body">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="<?= base_url() ?>assets/Gambar/foto1/<?= $properti['0']->kd_pengguna ?>" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="<?= base_url() ?>assets/Gambar/foto1/<?= $properti['0']->kd_pengguna ?>" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="<?= base_url() ?>assets/Gambar/foto1/<?= $properti['0']->kd_pengguna ?>" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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