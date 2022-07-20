<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>admin/index" class="brand-link">
        <img src="<?php echo base_url() ?>assets/logo/pa2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PAK-TI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url() ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-child-indent text-sm" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="<?php echo site_url(); ?>admin/index" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo site_url(); ?>admin/pendaftar" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Pendaftar</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo site_url(); ?>admin/akun_terdaftar" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Akun Terdaftar</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo site_url(); ?>admin/postingan" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Daftar Postingan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo site_url(); ?>admin/verifikasi_postingan" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Verifikasi Postingan</p>
                    </a>
                </li>


                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>