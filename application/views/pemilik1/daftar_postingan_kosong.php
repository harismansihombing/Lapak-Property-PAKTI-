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

                    <li class="list-group-item list-group-item-action text-center"><button class="btn btn-outline-success" type="submit" style="width: 250px;">Tambah Properti</button></li>
                    <?php $u = $this->session->userdata('id'); ?>
                    <li class="list-group-item list-group-item-action"><?php echo anchor('crud/tampil_akun/' . $u, 'Properti Anda'); ?></li>
                    <li class="list-group-item list-group-item-action"><a href="<?php echo site_url() ?>welcome/daftar_postingan">Daftar Postingan</a></li>
                    <li class="list-group-item list-group-item-action">Data Penyewa</li>
                </ul>
            </div>

            <div class="col-sm-9">
                <div class="card">
                    <div class="card-header">
                        Daftar Postingan
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <h4>Anda Belum Memiliki Daftar Postingan, klik dibawah untuk tambah postingan</h4>
                            <a href="<?php echo site_url() ?>welcome/tambah_postingan"><input type="button" class="btn btn-primary" value="Tambah Postingan"></a>
                            <?php
                            $k = $this->uri->segment(3);
                            echo anchor('welcome/tambah_postingan/' . $k, 'Properti Anda');
                            echo $k;


                            ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php $this->load->view('pemilik/template/js'); ?>
</body>

</html>