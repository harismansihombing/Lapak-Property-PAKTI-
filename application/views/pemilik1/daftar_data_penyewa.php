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
                <div class="card">
                    <div class="card-header">
                        Daftar Data Penyewa
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <?php $k = $this->uri->segment(3);
                            $k = $this->uri->segment(3);
                            //echo anchor('crud/daftar_data_penyewa_tambah/' . $k, 'Properti Anda');
                            echo anchor(base_url('crud/daftar_data_penyewa_tambah/' . $k), ' Tambah Data', array('class' => 'btn btn-primary btn-md fa fa-edit'))
                            ?>
                            <br>
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr class="table-success text-center">
                                        <th scope="col" style="width: 20px;">No</th>
                                        <th scope="col">Nama Penyewa</th>
                                        <th scope="col">No Telp</th>
                                        <th scope="col">Lama Penyewaan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                $no = 1;
                                foreach ($user as $u) {

                                ?>
                                    <tbody>

                                        <tr>
                                            <th scope="row" class="text-center"><?php echo $no++ ?></th>
                                            <td><?php echo $u->nama_penyewa; ?></td>
                                            <td><?php echo $u->no_penyewa; ?></td>
                                            <td><?php echo $u->lama_waktu_penyewaan; ?></td>
                                            <td class="text-center">
                                                <?php echo anchor('crud/daftar_detail_data_penyewa/' . $u->kd_peminjaman, 'Selengkapnya'); ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('pemilik/template/js'); ?>
</body>

</html>