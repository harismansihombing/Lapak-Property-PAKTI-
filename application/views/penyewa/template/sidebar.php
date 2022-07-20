<aside class="main-sidebar sidebar-light-info">
    <!-- Brand Logo -->
    <a href="<?= base_url('frontend') ?>" class="brand-link text-center">
        <!--<img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
        <span class="brand-text font-weight-light">Lapak Properti</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url() ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <?php $nama_pengguna = $user->nama_pengguna; ?>
                <a href="#" class="d-block"><?php echo $nama_pengguna ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column text-sm" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <?php
                $kd_pengguna = $this->uri->segment(3);
                ?>
                <li class="nav-item">
                    <a href="<?= base_url('penyewa/tampil_akun/' . $kd_pengguna) ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('penyewa/tampil_profil/' . $kd_pengguna) ?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profil
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('penyewa/tampil_transaksi_kosong/' . $kd_pengguna) ?>" class="nav-link">
                        <i class="nav-icon fas fa-exchange-alt"></i>
                        <p>
                            Transaksi Sewa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('penyewa/riwayat_sewa/' . $kd_pengguna) ?>" class="nav-link">
                        <i class="nav-icon fas fa-history"></i>
                        <p>
                            Riwayat Sewa
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <?php
                if ($this->session->userdata('role') == 'penyewa') { // Jika sudah bisa mendapatkan session
                ?>
                    <li class="nav-item"><a href="<?= base_url('penyewa/buat_lapak_info/' . $kd_pengguna) ?>"><button type="button" class="btn btn-block btn-outline-primary btn-sm">Buat Lapak</button></a></li>
                <?php } ?>
                <?php
                // Cek role user
                if ($this->session->userdata('role') == 'pemilik') { // Jika sudah bisa mendapatkan session
                ?>
                    <li class="nav-header">Kelola Lapak</li>
            </ul>

            <ul class="nav nav-pills nav-sidebar flex-column text-sm" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('pemilik/lapak_saya/' . $kd_pengguna) ?>" class="nav-link active">
                        <i class="fas fa-store"></i>
                        <p>
                            Lapak Saya
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('pemilik/daftar_postingan/' . $kd_pengguna) ?>" class="nav-link active">
                        <i class="far fa-list-alt"></i>
                        <p>
                            Daftar Postingan
                        </p>

                    </a>
                </li>
                <li class="nav-item has-treeview menu-close">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-plus-square"></i>
                        <p>
                            Tambah Postingan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('pemilik/tambah_postingan_rumah/' . $kd_pengguna) ?>" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rumah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pemilik/tambah_postingan_ruko/' . $kd_pengguna) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ruko</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pemilik/tambah_postingan_tanah/' . $kd_pengguna) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tanah</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('pemilik/daftar_penyewa/' . $kd_pengguna) ?>" class="nav-link">
                        <i class="nav-icon fas fa-exchange-alt"></i>
                        <p>
                            Daftar Penyewa
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
            <br>
            <br>

        <?php } ?>
        <ul class="nav nav-pills nav-sidebar flex-column text-sm text-center">
            <li class="nav-item"><a href="<?php echo site_url() ?>auth/logout"><button type="button" class="btn btn-block btn-outline-success btn-sm">Logout</button></a></li>
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>