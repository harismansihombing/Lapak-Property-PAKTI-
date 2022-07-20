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
                            <h4 class="m-0 text-dark">Detail Sewa</h4>
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
                                    <h3 class="profile-username text-bold text-center ">Spesifikasi Property</h3>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Judul Postingan</b> <a class="float-right"><?php echo $hasil['0']->Judul_postingan ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Jenis Property </b> <a class="float-right"><?php echo $hasil['0']->nama_jenis ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Lama Waktu Penyewaan</b> <a class="float-right"><?php echo $hasil['0']->lama_waktu_penyewaan ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Harga Sewa</b> <a class="float-right"><?php echo $hasil['0']->harga_sewa_pertahun ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Alamat </b> <a class="float-right"><?php echo $hasil['0']->alamat_lokasi ?></a>
                                        </li>
                                    </ul>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-success btn-sm">Lihat Detail</button>
                                    </div>

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
                                                    <img class="d-block w-100" src="https://www.harapanrakyat.com/wp-content/uploads/2019/11/Rumah-Milenial-696x392.jpg" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSYsDu8_HFrKY_5_OEgH9T7zppqR3n5E9CHAw&usqp=CAU" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="https://magjogja.com/wp-content/uploads/2016/11/rumah-idaman-di-jogja-selatan.jpg" alt="Third slide">
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

                    <!-- Modal pembayar-->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                        Bayar Sewa +
                    </button>

                    <div class="modal fade" id="modal-info">
                        <div class="modal-dialog">
                            <div class="modal-content bg-light">
                                <div class="modal-header">
                                    <h4 class="modal-title text-dark">Transaksi Pembayaran </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                </div>

                                <div class="modal-body">
                                    <!-- form Pembayaran -->
                                    <div class="card card-primary bg-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title text-warning">Pastikan data Pembayaran yang anda
                                                masukkan benar.
                                            </h3>
                                        </div>
                                        <form role="form" action="<?= base_url('penyewa/detail_sewa_tambah/' . $this->uri->segment(3) . '/' . $hasil['0']->kd_peminjaman) ?>" method="POST" enctype="multipart/form-data">
                                            <input type="text" name="kd_detail_peminjaman" value="<?php echo $invoice; ?>">
                                            <input type="text" name="kd_peminjaman" value="<?php echo $hasil['0']->kd_peminjaman; ?>">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Tanggal Pembayaran</label>
                                                    <input type="date" class="form-control" name="tgl_pembayaran">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Nominal Pembayaran</label>
                                                    <input type="text" class="form-control" id="rupiah" placeholder="Rp." name="nominal_pembayaran">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Bukti Pembayaran</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <!-- <label class="custom-file-label" for="exampleInputFile">Kirim Bukti Pembayaran</label> -->
                                                            <!-- <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar"> -->
                                                            <input type="file" name="gambar">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Saya
                                                        Bertanggung
                                                        Jawab dengan data yang saya kirimkan.
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                            <div class="modal-footer justify-content-between">
                                                <button type="submit" class="btn btn-primary">Kirim</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--akhir Modal -->

                </div>

                <br>

                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th style="width: 8px">NO</th>
                            <th style="width: 230px">Waktu Pembayaran</th>
                            <th style="width: 250px">Jumlah Pembayaran</th>
                            <th style="width: 190px">Status Pembayaran</th>
                            <th>Bukti Pembayaran</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($hasil1 as $d) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $d->tgl_pembayaran; ?></td>
                                <td>
                                    <?php echo $d->nominal_pembayaran; ?>
                                </td>
                                <td>
                                    <?php echo $d->keterangan_status; ?>
                                </td>
                                <td>
                                    <img src="<?= base_url() ?>assets/Gambar/bukti_pembayaran/<?php echo $d->bukti_pembayaran; ?>" class="card-img-top">
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <?php $this->load->view('penyewa/template/footer'); ?>
        <!-- / Main Footer -->

    </div>
    <!-- ./wrapper -->


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


    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('penyewa/template/js'); ?>
</body>

</html>