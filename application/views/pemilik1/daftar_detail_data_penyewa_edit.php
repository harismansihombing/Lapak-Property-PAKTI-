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

                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $peminjaman->kd_detail_peminjaman; ?>" name="kd_detail_peminjaman">
                    <input type="hidden" value="<?php echo $peminjaman->kd_peminjaman; ?>" name="kd_peminjaman">
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header bg-success">
                                            <h5>Edit Detail Data Penyewa:</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="">Peminjaman Ke-</label><br>
                                                <input type="text" name="peminjaman_ke" style="width: 100%;" value="<?php echo $peminjaman->peminjaman_ke; ?>">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Periode Sewa</label><br>
                                                <input type="text" name="durasi_pembayaran" style="width: 100%;" value="<?php echo $peminjaman->durasi_pembayaran; ?>">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Nominal Pembayaran</label><br>
                                                <input type="text" name="nominal_pembayaran" style="width: 100%;" value="<?php echo $peminjaman->nominal_pembayaran; ?>">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Tanggal Pembayaran</label><br>
                                                <input type="text" name="tgl_pembayaran1" style="width: 49%;" value="<?php echo $peminjaman->tgl_pembayaran; ?>" disabled>
                                                <input type="date" name="tgl_pembayaran" style="width: 49%;">

                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="">Status</label><br>
                                                <input type="text" name="keterangan_status" style="width: 100%;" value="<?php echo $peminjaman->keterangan_status; ?>">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <input type="submit" value="Simpan" class="btn btn-primary" style="width: 100%;">
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.col-md-6 -->


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