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
                            <h4 class="m-0 text-dark">Tambah Postingan Ruko</h4>
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
                    <?php
                    $kd_jenis = 1;
                    $kd_pengguna1 = $this->uri->segment(3);
                    ?>
                    <form role="form" action="<?= base_url('pemilik/save_postingan_ruko/' . $kd_pengguna1) ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card card-primary">
                                    <div class="card-header text-danger">
                                        <h3 class="card-title ">Data Rumah</h3>
                                    </div>
                                    <!-- /.card-header -->

                                    <!-- form start -->
                                    <input type="hidden" name="kd_lapak" id="" value="<?= $invoice; ?>">
                                    <input type="hidden" name="kd_pengguna" id="" value="<?= $kd_pengguna1; ?>">
                                    <input type="hidden" name="kd_jenis" id="" value="<?= $kd_jenis; ?>">
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Judul Postingan</label>
                                                <input type="text" class="form-control" name="Judul_postingan">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Harga Sewa
                                                </label>
                                                <input type="text" class="form-control" placeholder="Rp" name="harga_sewa_pertahun" id="rupiah">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Alamat</label>
                                                <textarea type="password" class="form-control" name="alamat_lokasi"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Luas Tanah</label>
                                                <input type="text" class="form-control" name="luas_tanah">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Luas Bangunan</label>
                                                <input type="text" class="form-control" name="luas_bangunan">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Jumlah Kamar Mandi</label>
                                                <input type="text" class="form-control" name="jumlah_kamar_mandi">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Jumlah kamar Tidur </label>
                                                <input type="text" class="form-control" name="jumlah_kamar_tidur">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Sumber Air</label>
                                                <input type="text" class="form-control" name="sumber_air">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Daya Listrik </label>
                                                <input type="text" class="form-control" name="daya_listrik">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Deskripsi"></textarea>
                                        </div>

                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label text-danger" for="exampleCheck1">Saya
                                                bertanggungjawab
                                                dengan data yang saya Masukkan.</label>
                                        </div>
                                        <div class="form-group float-right">
                                            <button type="submit" class="btn btn-info">
                                                Upload
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Gambar</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Gambar Properti Ruko</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="foto1">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="foto2">>
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="foto3">>
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="foto4">>
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="foto5">>
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>

                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Gambar Surat Bukti Bayar Pajak</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="surat_pbb">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Gambar Surat Bukti Kepemilikan</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="surat_kepemilikan">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <!--/. container-fluid -->
            </section>

            <div class="modal fade" id="modal-info">
                <div class="modal-dialog">
                    <div class="modal-content bg-light">
                        <div class="modal-header">
                            <h4 class="modal-title text-dark">Postingan Dikirim</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                        </div>

                        <div class="modal-body">
                            <!-- form Pembayaran -->
                            <div class="card card-primary bg-secondary">
                                <div class="card-header">
                                    <h3 class="card-title text-warning text-center">
                                        Postingan anda sedang menunggu ferifikasi pihak admin. <br>
                                        Terimakasih
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- /.content-wrapper -->
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


        <!-- Main Footer -->
        <?php $this->load->view('penyewa/template/footer'); ?>
        <!-- / Main Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('penyewa/template/js'); ?>
</body>

</html>