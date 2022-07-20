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
                    <li class="list-group-item list-group-item-action"><a href="<?php echo site_url() ?>welcome/properti_anda">Pengaturan Akun</a></li>
                    <li class="list-group-item list-group-item-action"><a href="<?php echo site_url() ?>welcome/daftar_postingan">Daftar Postingan</a></li>
                    <li class="list-group-item list-group-item-action">Data Penyewa</li>
                </ul>
            </div>

            <div class="col-sm-9">
                <?php $k = $this->uri->segment(3); ?>
                <?= anchor(base_url('crud/daftar_detail_data_penyewa_parsing/' . $k), ' Tambah Data', array('class' => 'btn btn-primary btn-sm fa fa-plus-square')) ?>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Datail Data Peminjaman</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Peminjaman Ke-</th>
                                    <th>Periode Sewa</th>
                                    <th>Nominal Pembayaran</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 1;
                            foreach ($user as $u) {

                            ?>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td><?php echo $u->peminjaman_ke; ?></td>
                                        <td><?php echo $u->durasi_pembayaran; ?></td>
                                        <td><?php echo $u->nominal_pembayaran; ?></td>
                                        <td><?php echo $u->tgl_pembayaran; ?></td>
                                        <td><?php echo $u->keterangan_status; ?></td>
                                        <td class="text-center">
                                            <?= anchor(base_url('crud/daftar_detail_data_penyewa_edit/' . $u->kd_detail_peminjaman), ' edit', array('class' => 'btn btn-primary btn-xs fa fa-edit')) ?>
                                            <?= anchor(base_url('crud/daftar_detail_data_penyewa_delete/' . $u->kd_detail_peminjaman), ' hapus', array('class' => 'btn btn-danger btn-xs fa fa-trash-alt')) ?>
                                        </td>
                                    </tr>

                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /col -->

        </div>


    </div>

    <?php $this->load->view('pemilik/template/js'); ?>
</body>

</html>