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

            <?php $this->load->view('pemilik/template/sidebar'); ?>

            <div class="col-sm-9">

                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible">
                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <form action="<?php echo site_url('crud/daftar_data_penyewa_create') ?>" method="POST" enctype="multipart/form-data">
                    <input type="text" value="<?php echo $k = $this->uri->segment(3); ?>" name="nik_pemilik">
                    <input type="text" value="<?php echo $invoice; ?>" name="kd_peminjaman">
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header bg-success">
                                            <h5>Keterangan Properti:</h5>
                                        </div>
                                        <div class="card-body">

                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Nik Penyewa</label><br>
                                                <input type="text" name="nik_penyewa" style="width: 100%;">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Properti Yang disewa</label><br>
                                                <select id="cars" style="width: 100%;" name="kd_properti">
                                                    <option value=""> Pilih Properti </option>
                                                    <?php
                                                    foreach ($data as $u) {
                                                    ?>
                                                        <option value="<?php echo $u->kd_properti; ?>"> <?php echo $u->Judul_postingan; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Lama Waktu Sewa</label><br>
                                                <input type="text" name="lama_waktu_penyewaan" style="width: 100%;" maxlength="11" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" />
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Tanggal Awal Sewa</label><br>
                                                <input type="text" name="tgl_awal_penyewaan" style="width: 100%;">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Tanggal Berahkir Sewa</label><br>
                                                <input type="text" name="tgl_penyewaan_berakhir" style="width: 100%;">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <input type="submit" name="" style="width: 100%;" class="btn btn-primary" value="simpan">
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.col-md-6 -->


                                <div class="col-lg-6">

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