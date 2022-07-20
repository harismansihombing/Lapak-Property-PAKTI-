<section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- Text based logo -->
                <a class="navbar-brand aa-logo" href="<?= base_url(); ?>frontend/index"> Lapak <span>Properti</span></a>
                <!-- Image based logo -->
                <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
                    <!-- Mengecek Kondisi Apakah Terdapat Session Atau Tidak -->
                    <?php
                    // Cek role user
                    if (!$this->session->userdata('role')) { // Jika sudah bisa mendapatkan session
                    ?>
                        <li class="active"><a href="<?= base_url(); ?>frontend/index">HOME</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">PROPERTI <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?= base_url('frontend/cari_rumah') ?>">RUMAH</a></li>
                                <li><a href="<?= base_url('frontend/cari_tanah') ?>">TANAH</a></li>
                                <li><a href="<?= base_url('frontend/cari_ruko') ?>">RUKO</a></li>
                            </ul>
                        </li>

                    <?php
                    } else if ($this->session->userdata('role') == 'pemilik') { // Jika role-nya pemilik
                    ?>
                        <?php $u = $this->session->userdata('kd_pengguna'); ?>


                        <li class="active"><a href="<?= base_url(); ?>frontend/index">HOME</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">PROPERTI <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?= base_url('frontend/cari_rumah') ?>">RUMAH</a></li>
                                <li><a href="<?= base_url('frontend/cari_tanah') ?>">TANAH</a></li>
                                <li><a href="<?= base_url('frontend/cari_ruko') ?>">RUKO</a></li>
                            </ul>
                        </li>

                        <li><a href="<?= base_url('penyewa/tampil_akun/' . $u) ?>"><i class="fa fa-gear"></i> Kelola Lapak</a></li>
                        <li>

                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $this->session->userdata('username') ?>
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <?php $u = $this->session->userdata('kd_pengguna'); ?>
                                    <li><a href="<?php echo base_url('penyewa/tampil_profil/' . $u) ?>">Pengaturan Profil</a></li>
                                    <li><a href="<?php echo site_url() ?>auth/logout">Logout</a></li>
                                </ul>
                            </div>
                        </li>

                    <?php
                    } else if ($this->session->userdata('role') == 'penyewa') { // Jika role nya penyea
                    ?>
                        <?php $u = $this->session->userdata('kd_pengguna'); ?>

                        <li class="active primary"><a href="<?= base_url('penyewa/buat_lapak_info/' . $u) ?>">Buat Lapak</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">PROPERTI <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?= base_url('frontend/cari_rumah') ?>">RUMAH</a></li>
                                <li><a href="<?= base_url('frontend/cari_tanah') ?>">TANAH</a></li>
                                <li><a href="<?= base_url('frontend/cari_ruko') ?>">RUKO</a></li>
                            </ul>
                        </li>
                        <li><?= anchor(base_url('penyewa/tampil_akun/' . $u), ' Transaksi ', array('class' => 'fa fa-exchange')) ?></li>

                        <li>

                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $this->session->userdata('username') ?>
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url('penyewa/tampil_profil/' . $u) ?>">Pengaturan Profil</a></li>
                                    <li><a href="<?php echo site_url() ?>auth/logout">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    <?php
                    } else { // Jika role nya admin
                    ?>
                        <li class="active"><a href="index.html">HOME</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">PROPERTI <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?= base_url('frontend/cari_rumah') ?>">RUMAH</a></li>
                                <li><a href="<?= base_url('frontend/cari_tanah') ?>">TANAH</a></li>
                                <li><a href="<?= base_url('frontend/cari_ruko') ?>">RUKO</a></li>
                            </ul>
                        </li>
                        <li><a href="gallery.html">MITRA</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                        <li><a href="<?php echo site_url() ?>welcome/profil">PROFIL</a></li>
                        <li>

                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $this->session->userdata('role') ?>
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Akun</a></li>
                                    <?php $u = $this->session->userdata('id'); ?>

                                    <li><a href="<?php echo site_url() ?>auth/logout">Log</a></li>
                                </ul>
                            </div>
                        </li>
                    <?php
                    }
                    ?>

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
</section>