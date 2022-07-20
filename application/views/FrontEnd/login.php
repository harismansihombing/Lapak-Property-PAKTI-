<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Property | Signin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/Frontend/img/favicon.ico" type="image/x-icon">


    <!-- Font awesome -->
    <link href="<?php echo base_url() ?>assets/Frontend/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/Frontend/css/bootstrap.css" rel="stylesheet">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Frontend/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Frontend/css/nouislider.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/Frontend/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="<?php echo base_url() ?>assets/Frontend/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="<?php echo base_url() ?>assets/Frontend/css/style.css" rel="stylesheet">


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>
    <?php
    // Cek apakah terdapat session nama message
    if ($this->session->flashdata('message')) { // Jika ada
        echo '<div class="alert alert-danger">' . $this->session->flashdata('message') . '</div>'; // Tampilkan pesannya
    }
    ?>

    <div id="aa-preloader-area">
        <div class="pulse"></div>
    </div>
    <section id="aa-signin">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-signin-area">
                        <div class="aa-signin-form">
                            <div class="aa-signin-form-title">
                                <a class="aa-property-home" href="index.html">Lapak Properti</a>
                                <h4>Log in</h4>
                            </div>
                            <div class="aa-signin-form-title">
                                <?php
                                // Cek apakah terdapat session nama message
                                if ($this->session->flashdata('message')) { // Jika ada
                                    echo '<div class="alert alert-danger">' . $this->session->flashdata('message') . '</div>'; // Tampilkan pesannya
                                }
                                ?>
                            </div>
                            <form class="contactform" method="POST" action="<?php echo base_url('auth/login'); ?>">
                                <div class="aa-single-field">
                                    <label for="email">Email / Username <span class="required">*</span></label>
                                    <input type="text" required="required" aria-required="true" value="" name="username">
                                </div>
                                <div class="aa-single-field">
                                    <label for="password">Password <span class="required">*</span></label>
                                    <input type="password" name="password">
                                </div>
                                <div class="aa-single-field">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                                <div class="aa-double-submit">
                                    <a href="<?php echo site_url() ?>welcome/index"><input type="button" value="Batal" class="btn btn-danger" name="submit"></a>
                                    <input type="submit" value="Login" class="btn btn-success" name="submit">
                                    <p>Anda Belum Punya Akun? <a href="<?php echo site_url('welcome/daftar'); ?>">DAFTAR SEKARANG!</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery library -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script src="<?php echo base_url() ?>assets/Frontend/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>assets/Frontend/js/bootstrap.js"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/Frontend/js/slick.js"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/Frontend/js/nouislider.js"></script>
    <!-- mixit slider -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/Frontend/js/jquery.mixitup.js"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/Frontend/js/jquery.fancybox.pack.js"></script>
    <!-- Custom js -->
    <script src="<?php echo base_url() ?>assets/Frontend/js/custom.js"></script>

</body>

</html>