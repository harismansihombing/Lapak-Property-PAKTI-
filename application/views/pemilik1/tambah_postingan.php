<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situs Sewa Properti</title>
    <?php $this->load->view('pemilik/template/head'); ?>
</head>

<body style="background-color: #f5eef8;">
    <?php $this->load->view('pemilik/template/navbar'); ?>
    <br>
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-3">
                <ul class="list-group list-group-flush">
                    <?php
                    $nik = $this->uri->segment(3);
                    ?>
                    <li class="list-group-item list-group-item-action text-center"><button class="btn btn-outline-success" type="submit" style="width: 250px;">Tambah Properti</button></li>
                    <li class="list-group-item list-group-item-action"><a href="<?php echo site_url() ?>welcome/properti_anda">Pengaturan Akun</a></li>
                    <li class="list-group-item list-group-item-action"><?php echo anchor('crud/daftar_postingan/' . $nik, 'Daftar Postingan'); ?></li>
                    <li class="list-group-item list-group-item-action"><?php echo anchor('crud/daftar_data_penyewa/' . $nik, 'Daftar Penyewa'); ?></li>
                </ul>
            </div>

            <div class="col-sm-9">
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible">
                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <form action="<?php echo site_url('crud/tambah_postingan') ?>" method="POST" enctype="multipart/form-data">
                    <input type="text" value="<?php echo $k = $this->uri->segment(3); ?>" name="nik_pemilik">
                    <input type="text" value="<?php echo $invoice; ?>" name="kd_properti">
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header bg-success">
                                            <h5>Keterangan Properti:</h5>
                                        </div>
                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="">Jenis Properti</label><br>
                                                <select id="cars" style="width: 100%;" name="kd_jenis">
                                                    <option value="1">Rumah</option>
                                                    <option value="2">Tanah</option>
                                                    <option value="3">Ruko</option>
                                                    <option value="4">Lain - lain</option>
                                                </select>
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Judul Postingan</label><br>
                                                <input type="text" name="judul_postingan" style="width: 100%;">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Harga Sewa Pertahun</label><br>
                                                <input type="text" name="harga_sewa_pertahun" style="width: 100%;" maxlength="11" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Harga Sewa Perbulan</label><br>
                                                <input type="text" name="harga_sewa_perbulan" style="width: 100%;" maxlength="11" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Alamat Lokasi Properti</label><br>
                                                <input type="text" name="alamat_lokasi" style="width: 100%;">
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Unggah Foto Properti</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="">Foto Tampak Depan</label><br>
                                                <input type="file" name="foto1">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Foto Tampak Belakang</label><br>
                                                <input type="file" name="foto2">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Foto Tampak Dalam</label><br>
                                                <input type="file" name="gambar3">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Foto Tampak Samping L</label><br>
                                                <input type="file" name="gambar4">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Foto Tampak Samping R</label><br>
                                                <input type="file" name="gambar5">
                                            </div>
                                        </div>
                                    </div> <!-- /.card -->
                                </div>
                                <!-- /.col-md-6 -->


                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header bg-warning">
                                            <h5 class="card-title-center">Spesifikasi Properti :</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="">Luas Tanah</label><br>
                                                <input type="text" name="luas_tanah" style="width: 100%;">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Luas Bangunan</label><br>
                                                <input type="text" name="luas_bangunan" style="width: 100%;">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Jumlah Kamar Tidur</label><br>
                                                <input type="text" name="jumlah_kamar_tidur" style="width: 100%;" maxlength="4" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Jumlah Kamar Mandi</label><br>
                                                <input type="text" name="jumlah_kamar_mandi" style="width: 100%;" maxlength="4" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Sumber Air</label><br>
                                                <input type="text" name="sumber_air" style="width: 100%;">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Daya Listrik</label><br>
                                                <input type="text" name="daya_listrik" style="width: 100%;">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Keterangan</label><br>
                                                <input type="text" name="Deskripsi" style="width: 100%;">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <input type="submit" value="Simpan" name="kirim" class="btn btn-info btn-sm" style="width: 100%;">
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </form>

            </div>
        </div>
    </div>



    <?php $this->load->view('pemilik/template/js'); ?>

</body>



</html>