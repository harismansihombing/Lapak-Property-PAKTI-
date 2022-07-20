<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situs Sewa Properti </title>
    <?php $this->load->view('pemilik1/template/head'); ?>
</head>

<body style="background-color: #f5eef8;">
    <?php if (!$this->session->userdata('authenticated'))
        redirect('auth'); // Redirect ke halaman login
    ?>

    <?php $this->load->view('pemilik1/template/navbar'); ?>
    <br>


    <div class="container">
        <div class="row ">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="callout callout-info">
                                <h5><i class="fas fa-info"></i> Catatan:</h5>
                                Halaman ini merupakan formulir dalam melakukan penyewaan.
                            </div>

                            <!-- Main content -->
                            <div class="invoice p-3 mb-3">
                                <!-- title row -->
                                <div class="row">
                                    <div class="col-12">
                                        <h4>

                                            <img src="<?php echo base_url() ?>assets/Frontend/img/logo.png" width="200px" height="50px" width="100px" alt="">

                                            <small class="float-right">Date: <?php echo date('d-m-Y'); ?></small>
                                        </h4>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->
                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                        <div class="text-danger">
                                            Penanggung jawab
                                        </div>
                                        <address>
                                            <strong>Admin, PAKTI.</strong><br>
                                            Perum Griya Mangli, R 13<br>
                                            Phone: (804) 123-5432<br>
                                            Email: infoprperty@gmail.com
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        <div class="text-danger">
                                            Pelapak
                                        </div>
                                        <address>
                                            <strong>
                                                <?= $data1['0']->nama_pengguna; ?>
                                            </strong><br>
                                            <?= $data1['0']->alamat_pengguna; ?>
                                            <br>
                                            <?= $data1['0']->no_pengguna; ?><br>
                                            <?= $data1['0']->email; ?>
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col ">

                                        <h5 class="font-weight-light">Kode Boking <b>: <?= $invoice; ?> </b></h5>


                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- Table row -->
                                <div class="row">
                                    <div class="col-7 table-responsive">
                                        <form action="<?= base_url('penyewa/sewa_properti_tambah/' . $data1['0']->kd_pengguna) ?>" method="POST">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <td>Deskripsi</td>
                                                        <td><?= $data1[0]->Deskripsi; ?></td>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Judul Postingan </td>
                                                        <td class="font-weight-bold float-right"><?= $data1[0]->Judul_postingan ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Jenis Property </td>
                                                        <td class="font-weight-bold float-right">:::::::</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Alamat </td>
                                                        <td class="font-weight-bold float-right"><?= $data1[0]->alamat_lokasi; ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Harga Sewa</td>
                                                        <td class="font-weight-bold float-right"><?= $data1[0]->harga_sewa_pertahun; ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            Durasi Sewa
                                                        </td>
                                                        <td>
                                                            <p class="float-right">/Tahun</p>
                                                            <input type="text" name="lama_waktu_penyewaan" value="" class="float-right" style="margin-left: 25px;" placeholder="Durasi sewa anda" />
                                                            <br>
                                                            <div class="font-italic">
                                                                Periode Sewa Pertahun
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="hidden" name="kd_peminjaman" value="<?php echo $invoice; ?>">
                                                            <input type="hidden" name="kd_lapak" value="<?php echo $this->uri->segment(3); ?>">
                                                            <input type="hidden" name="kd_pengguna" value="<?php echo $this->session->userdata('kd_pengguna');  ?>">
                                                            <input type="hidden" name="lama_waktu_penyewaan">
                                                            <input type="hidden" name="tgl_awal_penyewaan">
                                                            <input type="hidden" name="tgl_penyewaan_berakhir">
                                                            <input type="hidden" name="status_penyewaan" value="Tertunda">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button type="submit" class="btn btn-primary float-right" style="margin-right: 5px;">
                                                                <i class="fas fa-money-check"></i> Ajukan Penyewaan
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>


                                    <!-- accepted payments column -->
                                    <div class="col-5"> <br>
                                        <p class="lead  float-left">Payment Methods:</p> <br> <br>
                                        <div class="float-right">
                                            <img src=" <?php echo site_url() ?>/assets/admin/dist/img/credit/visa.png" alt="Visa">
                                            <img src="<?php echo site_url() ?>/assets/admin/dist/img/credit/mastercard.png" alt="Mastercard">
                                            <img src="<?php echo site_url() ?>/assets/admin/dist/img/credit/american-express.png" alt="American Express">
                                            <img src="<?php echo site_url() ?>/assets/admin/dist/img/credit/paypal2.png" alt="Paypal">
                                        </div>
                                        <br>
                                        <br>
                                        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                            <b>Perhatian</b> Apabila Anda Akan Melakukan Transaksi Pastikan Nama Pemilik Nomor Rekening Sesuai Nama Pada Profil Pelapak
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.invoice -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->






            <!--MODAL SEWA SEKARANG-->

            <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                data-whatever="@mdo">Open modal for @mdo</button>-->


            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title text-warning" id="exampleModalLabel">KONFIRMASI</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label text-center text-dark">Saat
                                        anda melakukan
                                        penyewaan,
                                        anda dianggap menyetujui semua aturan dan ketentuan yang berlaku!

                                    </label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Ya, Saya menyetujui Syarat dan
                                        Ketentuan yang berlaku</label>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#exampleModalCenter">
                                Sewa Sekarang
                            </button>

                        </div>
                    </div>
                </div>
            </div>
            <!--AKHIR MODAL SEWA SEKARANG -->




            <!--MODAL Konfirmasi penyewaan-->

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title text-warning" id="exampleModalCenterTitle">Verifikasi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Permintaan Penyewaan anda sudah dikrimkan pada Pelapak dan sedang tahap Verifikasi, Tunggu
                            informasi Selanjutnya.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
            <!--MODAL Konfirmasi penyewaan-->

        </div>
    </div>




    <?php $this->load->view('pemilik1/template/js'); ?>
</body>

</html>