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
                            <h4 class="m-0 text-dark">Pengaturan Akun</h4>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Pengaturan Akun</li>
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
                        <div class="col-md-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning"><i class="fa fa-exclamation-circle"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-number">Hai Sobat PAKTI</span>
                                    <span class="">Terimakasih Sudah Bergabung Bersama Kami. Ayo Cari properti yang kamu inginkan !!! Tapi Jangan lupa ya untuk melengkapi data diri kamu Agar Kamu dapat Menyewa Properti Yang Kamu Inginkan </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>

                    <!-- Info boxes -->
                    <div class="row">

                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url() ?>assets/admin/dist/img/user4-128x128.jpg" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center"><?php echo $user->nama_pengguna ?></h3>

                                    <p class="text-muted text-center">Online</p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Alamat :</b> <?php echo $user->alamat_pengguna ?>
                                        </li>
                                        <li class="list-group-item">
                                            <b>No Telp :</b> <?php echo $user->no_pengguna ?>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Email :</b> <?php echo $user->email ?>
                                        </li>
                                    </ul>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#akun" data-toggle="tab">Informasi Umum</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#verifikasi" data-toggle="tab">Verifikasi Akun</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#informasi_akun" data-toggle="tab">Informasi Akun</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="akun">
                                            <p>Hai KAK! Jika informasi Data diri kamu salah atau tidak lengkap bisa diubah dibawah ini</p>
                                            <form class="form-horizontal">
                                                <div class="form-group row">
                                                    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="Nama" placeholder="Nama" value="<?php echo $user->nama_pengguna ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" id="Alamat" placeholder="Alamat"><?php echo $user->alamat_pengguna ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Email" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="Email" placeholder="Email" value="<?php echo $user->email ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="No" class="col-sm-2 col-form-label">No Telp</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" id="No" placeholder="No Telp" value="<?php echo $user->no_pengguna ?>"></input>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="offset-sm-2 col-sm-10">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Saya Setuju dengan Syarat & Ketentuan dari <a href="#">Lapak Properti</a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="offset-sm-2 col-sm-10">
                                                        <button type="submit" class="btn btn-danger">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                        <!-- /.tab-pane -->

                                        <div class="tab-pane" id="verifikasi">
                                            <!-- The timeline -->
                                            <div class="timeline timeline-inverse">
                                                <!-- timeline time label -->
                                                <div class="time-label">
                                                    <span class="bg-danger">
                                                        10 Feb. 2014
                                                    </span>
                                                </div>
                                                <!-- /.timeline-label -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-envelope bg-primary"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                                        <div class="timeline-body">
                                                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                            quora plaxo ideeli hulu weebly balihoo...
                                                        </div>
                                                        <div class="timeline-footer">
                                                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-user bg-info"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                                                        <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-comments bg-warning"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                                                        <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                                        <div class="timeline-body">
                                                            Take me to your leader!
                                                            Switzerland is small and neutral!
                                                            We are more like Germany, ambitious and misunderstood!
                                                        </div>
                                                        <div class="timeline-footer">
                                                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <!-- timeline time label -->
                                                <div class="time-label">
                                                    <span class="bg-success">
                                                        3 Jan. 2014
                                                    </span>
                                                </div>
                                                <!-- /.timeline-label -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-camera bg-purple"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                                                        <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                                        <div class="timeline-body">
                                                            <img src="http://placehold.it/150x100" alt="...">
                                                            <img src="http://placehold.it/150x100" alt="...">
                                                            <img src="http://placehold.it/150x100" alt="...">
                                                            <img src="http://placehold.it/150x100" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <div>
                                                    <i class="far fa-clock bg-gray"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->

                                        <div class="tab-pane" id="informasi_akun">
                                            <form class="form-horizontal">
                                                <div class="form-group row">
                                                    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="Nama" placeholder="Nama" value="<?php echo $user->username ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" id="Alamat" placeholder="Alamat" value="<?php echo $user->password ?>"></input>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="offset-sm-2 col-sm-10">
                                                        <button type="submit" class="btn btn-danger">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <?php $this->load->view('penyewa/template/footer'); ?>
    <!-- / Main Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('penyewa/template/js'); ?>
</body>

</html>