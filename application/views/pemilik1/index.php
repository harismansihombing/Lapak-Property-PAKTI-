<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situs Sewa Properti </title>
    <?php $this->load->view('pemilik/template/head'); ?>
</head>

<body style="background-color: #f5eef8;">
    <?php $this->load->view('pemilik/template/navbar'); ?>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 ">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <?php $nik = $user->nik_pemilik; ?>
                        <li class="list-group-item list-group-item-action text-center"><button class="btn btn-outline-success" type="submit" style="width: 250px;">Tambah Properti</button></li>
                        <li class="list-group-item list-group-item-action"><a href="<?php echo site_url() ?>welcome/properti_anda">Pengaturan Akun</a></li>
                        <li class="list-group-item list-group-item-action"><?php echo anchor('crud/daftar_postingan/' . $nik, 'Daftar Postingan'); ?></li>
                        <li class="list-group-item list-group-item-action"><?php echo anchor('crud/daftar_data_penyewa/' . $nik, 'Daftar Penyewa'); ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-header">
                        Ringkasan Akun
                    </div>
                    <div class="card-body">
                        <!--<h5 class="card-title">Special title treatment</h5>-->
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3 text-center">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/logo.png" width="200px" height="200px" width="200px" alt="">
                                </div>
                                <div class="col-sm-9">
                                    <div class="card">
                                        <div class="card-text">
                                            <?php
                                            //$nik = $user['nik_pemilik'];
                                            // $Nama = $user['Nama'];
                                            //$Alamat = $user['Alamat'];
                                            //$no_telepon = $user['no_telepon'];
                                            //$email = $user['email'];

                                            // Menangkap Parsing Data dari controler CRUD
                                            $nik = $user->nik_pemilik;
                                            $Nama = $user->Nama;
                                            $Alamat = $user->Alamat;
                                            $no_telepon = $user->no_telepon;
                                            $email = $user->email;

                                            ?>
                                            <p>NIK : <?php echo $nik ?></p>
                                            <p>Nama : <?php echo $Nama ?></p>
                                            <p>Alamat : <?php echo $Alamat ?> </p>
                                            <p>No Telp : <?php echo $no_telepon ?> </p>
                                            <p>Email : <?php echo $email ?></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php $this->load->view('pemilik/template/js'); ?>
</body>

</html>