<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situs Sewa Properti </title>
    <?php $this->load->view('pemilik1/template/head'); ?>
</head>

<body style="background-color: #F5F5F5;">
    <?php $this->load->view('pemilik1/template/navbar'); ?>
    <br>
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-body box-foto">
                        <h3 class=" font-weight-light "><b><?= $data['0']->Judul_postingan;  ?></b></h3>
                        <h5 class=""><b><?= $data['0']->harga_sewa_pertahun;  ?> / Tahun</b></h5>
                        <div class="card-body">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                    </li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="<?php echo base_url() ?>assets/Gambar/foto1/<?= $data[0]->foto1 ?>" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?php echo base_url() ?>assets/Gambar/foto1/<?= $data[0]->foto2 ?>" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?php echo base_url() ?>assets/Gambar/foto1/<?= $data[0]->foto3 ?>" alt="Third slide">
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

        <div class="row">
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <h3 class="profile-username font-bold text-center ">Deskripsi Properti</h3>
                    </div>
                    <div class="card-body">
                        <?= $data['0']->Deskripsi ?>
                    </div>
                </div>
            </div>
            <!-- / Col -->
            <div class="col-lg-5">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile  ">
                        <div class="text-center">
                            <img src=" <?= base_url() ?>assets/logo/kk.png " class="card-img-center rounded-circle" alt="Cinque Terre" width="200" height="150">
                        </div>


                        <div class="text-center">
                            <li class="modal-footer justify-content-between "><a href="https://api.whatsapp.com/send?phone=<?php echo $data['0']->no_pengguna ?> ">Chat
                                    Pelapak</a></li>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /rox -->
    </div>
    <!-- /Container -->


    <div class="container">
        <div class="row">

            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header text-center">
                        Spesifikasi Properti
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Harga Sewa </label>
                                <div class="col-sm-7">
                                    : <?= $data['0']->harga_sewa_pertahun ?> / Tahun
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Alamat </label>
                                <div class="col-sm-7">
                                    : <?= $data['0']->alamat_lokasi ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Luas Tanah </label>
                                <div class="col-sm-7">
                                    : <?= $data['0']->luas_tanah ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Luas Bangunan </label>
                                <div class="col-sm-7">
                                    : <?= $data['0']->luas_bangunan ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Jumlah Kamar Mandi </label>
                                <div class="col-sm-7">
                                    : <?= $data['0']->jumlah_kamar_mandi ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Jumlah Kamar Tidur </label>
                                <div class="col-sm-7">
                                    : <?= $data['0']->jumlah_kamar_tidur ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Sumber Air </label>
                                <div class="col-sm-7">
                                    : <?= $data['0']->sumber_air ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Daya Listrik </label>
                                <div class="col-sm-7">
                                    : <?= $data['0']->daya_listrik ?> / VA
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>




            <div class="col-sm-5">
                <div class="card">
                    <div class="card-header text-center">
                        Syarat dan Ketentuan
                    </div>
                    <div class="card-body">

                        <div class="col-md-12">
                            <div class="card">

                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Informasi Umum</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Informassi
                                            Pelapak</a></li>
                                </ul>

                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="activity">

                                            <p>1 : Pastikan anda membaca informasi dari property yang
                                                ingin anda sewa secara detail.</p>
                                            <p>2 : Pastikan anda tidak melakukan kesalahan selama proses
                                                penyewaan </p>
                                            <p>3 : Pihak Manajemen dapat memblokir akun anda, dan
                                                melaporkan
                                                data diri anda pada pihak berwajib jika terjadi
                                                penyalagunaan akun dan merugikan orang lain </p>
                                            <p>4 : Apabiala terdapat keanehan selama proses penyewaan
                                                berlang segera laporkan pada pihak Manajen. </p>

                                        </div>


                                        <div class="tab-pane" id="timeline">

                                            <p>1 : Pastikan anda membaca informasi dari property yang
                                                kami lampirkan secara detail.</p>
                                            <p>2 : Anda diwajibkan untuk membayar uang sewa tepat waktu
                                            </p>
                                            <p>3 : Setelah membayar dana diwajibkan juga untuk
                                                melampirkan bukti pembayaran/pengiriman uang sewa dalam
                                                bentuk Gambar</p>
                                            <p>4 : Apabiala anda tidak mengirimkan bukti pembayaran maka
                                                pembayarn anda tdak terkonfirmasi </p>
                                            <p>5 : Apabiala dalam waktu 24 jam setelah mengirimkan bukti
                                                pembayaran status dalam tebel pembayarn anda tidak
                                                dikonformasi, segera hubungi kami pihak Pelapak. </p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <a class="btn btn-success btn-sm" href="<?= base_url('frontend/transaksi_sewa/' . $data['0']->kd_lapak) ?>" role="button">Ajukan Penyewaan</a>

                    </div>
                </div>
            </div>



        </div>
    </div>





    <?php $this->load->view('pemilik1/template/js'); ?>
</body>

</html>