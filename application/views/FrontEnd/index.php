<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('Frontend/template/head'); ?>
</head>

<body class="aa-price-range">
    <!-- Pre Loader -->
    <div id="aa-preloader-area">
        <div class="pulse"></div>
    </div>
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start header section -->
    <?php $this->load->view('Frontend/template/header');
    ?>
    <!-- End header section -->

    <!-- Start menu section Navbar -->
    <?php $this->load->view('Frontend/template/navbar'); ?>
    <!-- End menu section -->

    <!-- Start slider  -->
    <section id="aa-slider">
        <div class="aa-slider-area">
            <!-- Top slider -->
            <div class="aa-top-slider">
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="<?php echo base_url() ?>assets/Frontend/img/slider/q2.jpg" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">Lebih Dari</span>
                        <h2 class="aa-top-slider-title">1999+ Properti</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>Jember, Indonesia (ID)</p>
                        <span class="aa-top-slider-off">Discount 30% OFF</span>
                        <p class="aa-top-slider-price">Rp.500.000</p>
                        <!-- <a href="#" class="aa-top-slider-btn">Selengkapnya <span class="fa fa-angle-double-right"></span></a> -->
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
            </div>
        </div>
    </section>
    <!-- End slider  -->

    <!-- Advance Search -->
    <section id="aa-advance-search">
        <div class="container">
            <div class="aa-advance-search-area">
                <form action="<?= base_url('frontend/cari') ?>" method="POST">
                    <div class="form">
                        <div class="aa-advance-search-top">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="aa-single-advance-search">
                                        <input type="text" placeholder="Mau Cari Properti APA?" name="cari">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="aa-single-advance-search">
                                        <input class="aa-search-btn" type="submit" value="Search">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- About us -->
    <section id="aa-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-about-us-area">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="aa-about-us-left">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/about-us.png" alt="image">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="aa-about-us-right">
                                    <div class="aa-title">
                                        <h2>Tentang Kami</h2>
                                        <span></span>
                                    </div>
                                    <p>PAKTI (Lapak Properti) adalah sebuah situs yang berbasis website dan mobile yang bertujuan untuk membantu mempertemukan pemilik properti dengan penyewa. Keunggulan kami antara lain:</p>
                                    <ul>
                                        <li>Penyewa akan dipertemukan langsung dengan pemilik properti itu sendiri.</li>
                                        <li>Pemilik properti pada situs kami sudah terverifikasi</li>
                                        <li>Kami bekerjasama dengan berbagai pengusaha properti ternama</li>
                                        <li>Situs kami dapat diakses di berbagai perangkat</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / About us -->

    <!-- Latest property -->
    <section id="aa-latest-property">
        <div class="container">
            <div class="aa-latest-property-area">
                <div class="aa-title">
                    <h2>Properti Disewakan Termurah</h2>
                    <span></span>
                    <p>Berbagai Properti Disewakan Ada disini </p>
                </div>
                <div class="aa-latest-properties-content">
                    <div class="row">
                        <?php
                        $no = $this->uri->segment('3') + 1;
                        foreach ($user as $u) {
                        ?>
                            <div class="col-md-4">
                                <article class="aa-properties-item">
                                    <a href="<?= base_url('frontend/detail_properti/' . $u->kd_lapak) ?>" class="aa-properties-item-img">
                                        <img src="<?php echo base_url() ?>assets/Gambar/foto1/<?= $u->foto1 ?>" alt="img" style="height: 200px; width: 360px;">
                                    </a>
                                    <!--<div class="aa-tag for-sale">
                                        Tersedia
                                    </div>-->
                                    <div class="aa-properties-item-content">
                                        <div class="aa-properties-info">
                                            <span>upload tanggal</span>
                                            <span><?php echo $u->tanggal; ?></span>
                                        </div>
                                        <div class="aa-properties-about">
                                            <h3><a href="#"><?php echo $u->Judul_postingan; ?></a></h3>
                                            <p><?php echo $u->Deskripsi; ?></p>
                                        </div>
                                        <div class="aa-properties-detial">
                                            <span class="aa-price">
                                                <?php echo $u->harga_sewa_pertahun; ?><h5><b>/Tahun</b></h5>
                                            </span>
                                            <a href="<?= base_url('frontend/detail_properti/' . $u->kd_lapak) ?>" class="aa-secondary-btn">Selengkapnya</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php } ?>

                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12 text-center">
                            <?php
                            echo $this->pagination->create_links();
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Latest property -->

    <!-- Service section -->
    <section id="aa-service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-service-area">
                        <div class="aa-title">
                            <h2>Kenapa Harus Pilih Kami</h2>
                            <span></span>
                            <p>Kami Akan Mempertemukan Anda Langsung Dengan Pemilik Tanpa Prantara</p>
                        </div>
                        <!-- service content -->
                        <div class="aa-service-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="aa-single-service">
                                        <div class="aa-service-icon">
                                            <span class="fa fa-home"></span>
                                        </div>
                                        <div class="aa-single-service-content">
                                            <h4><a href="#">Berbagai Properti</a></h4>
                                            <p>Kami Bekerjasama Dengan Berbagai Pengusaha Ternama</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="aa-single-service">
                                        <div class="aa-service-icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="aa-single-service-content">
                                            <h4><a href="#">Pemilik Terverifikasi</a></h4>
                                            <p>Pemilik Properti Sudah Kami Verifikasi Keaslian Data Diri</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="aa-single-service">
                                        <div class="aa-service-icon">
                                            <span class="fa fa-crosshairs"></span>
                                        </div>
                                        <div class="aa-single-service-content">
                                            <h4><a href="#">Berbagai Lokasi</a></h4>
                                            <p>Labih dari 101 properti dari berbagai daerah</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="aa-single-service">
                                        <div class="aa-service-icon">
                                            <span class="fa fa-bar-chart-o"></span>
                                        </div>
                                        <div class="aa-single-service-content">
                                            <h4><a href="#">Harga Termurah</a></h4>
                                            <p>Kami Tidak Menggunakan Prantara Anda dapat menghemat pengeluaran</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Service section -->

    <!-- Promo Banner Section -->
    <section id="aa-promo-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-promo-banner-area">
                        <h3>Cari Properti Sesuai Keinginanmu</h3>
                        <p>Anda Belum Memiliki Dana Lebih Untuk Membeli Properti ? Sewa dulu aja agar kamu bisa menikmati properti tanpa kamu memilikinya.</p>
                        <a href="#" class="aa-view-btn">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Promo Banner Section -->

    <!-- Our Agent Section-->

    <!-- / Our Agent Section-->

    <!-- Client Testimonial -->

    <!-- Client Testimonial -->

    <!-- Client brand -->
    <section id="aa-client-brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-client-brand-area">
                        <ul class="aa-client-brand-slider">
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-1.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-2.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-3.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-5.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-4.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-1.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-2.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-3.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-5.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-4.png" alt="brand image">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Client brand -->

    <!-- Latest blog -->

    <!-- / Latest blog -->

    <!-- Footer -->
    <?php $this->load->view('Frontend/template/footer'); ?>
    <!-- / Footer -->



    <!-- jQuery library -->
    <?php $this->load->view('Frontend/template/js'); ?>
</body>

</html>