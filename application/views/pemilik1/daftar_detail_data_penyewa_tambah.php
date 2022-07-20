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
                <form action="<?php echo site_url('crud/daftar_detail_data_penyewa_tambah') ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $invoice; ?>" name="kd_detail_peminjaman">
                    <?php
                    foreach ($data as $u) {
                    ?>
                        <input type="hidden" value="<?php echo $u->kd_peminjaman; ?>" name="kd_peminjaman">
                    <?php } ?>

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
                                                <label for="">Peminjaman Ke-</label><br>
                                                <input type="text" name="peminjaman_ke" style="width: 100%;">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Nominal Pembayaran</label><br>
                                                <input type="text" name="nominal_pembayaran" id="rupiah" style="width: 100%;">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Tanggal Pembayaran</label><br>
                                                <input type="date" name="tgl_pembayaran" style="width: 100%;" />
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Periode Sewa</label><br>
                                                <select id="cars" style="width: 100%;" name="durasi_pembayaran">
                                                    <option value=""></option>
                                                    <option value="Tahun">Tahun</option>
                                                    <option value="Bulan">Bulan</option>
                                                    <option value="Minggu">Minggu</option>
                                                </select>
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Status Pembayaran</label><br>
                                                <select id="cars" style="width: 100%;" name="keterangan_status">
                                                    <option value=""></option>
                                                    <option value="Lunas">Lunas</option>
                                                    <option value="Belum Lunas">Belum Lunas</option>
                                                </select>
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <input type="submit" name="" style="width: 100%;" class="btn btn-primary" value="simpan">
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                    </div>
                                    <!-- /.card -->


                                    <!-- Script Untuk Membuat Format Rupiah -->
                                    <script type="text/javascript">
                                        var rupiah = document.getElementById('rupiah');
                                        rupiah.addEventListener('keyup', function(e) {
                                            // tambahkan 'Rp.' pada saat form di ketik
                                            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                                            rupiah.value = formatRupiah(this.value, 'Rp. ');
                                        });

                                        /* Fungsi formatRupiah */
                                        function formatRupiah(angka, prefix) {
                                            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                                                split = number_string.split(','),
                                                sisa = split[0].length % 3,
                                                rupiah = split[0].substr(0, sisa),
                                                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                                            // tambahkan titik jika yang di input sudah menjadi angka ribuan
                                            if (ribuan) {
                                                separator = sisa ? '.' : '';
                                                rupiah += separator + ribuan.join('.');
                                            }

                                            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                                            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                                        }
                                    </script>
                                    <!-- / Script Untuk Membuat Format Rupiah -->


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