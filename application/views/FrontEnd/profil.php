<!DOCTYPE html>
<html>

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <?php $this->load->view('Frontend/template/head'); ?>
    <style>
        /* Note: Try to remove the following lines to see the effect of CSS positioning */
        .affix {
            top: 0;
            width: 100%;
            z-index: 9999 !important;
        }

        .affix+.container-fluid {
            padding-top: 70px;
        }
    </style>
</head>

<body>

    <div class="container-fluid" style="background-color:#17202a;color:#fff;height:34px;">
        <header id="aa-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-area">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="aa-header-left">
                                        <div class="aa-telephone-no">
                                            <span class="fa fa-phone"></span>
                                            (0331) 444231
                                            <?php //echo $this->session->userdata('nama') 
                                            ?>
                                        </div>
                                        <div class="aa-email hidden-xs">
                                            <span class="fa fa-envelope-o"></span> Hallo@pakti.com
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="aa-header-right">
                                        <a href="register.html" class="aa-register">Register</a>
                                        <a href="<?php echo site_url() ?>/welcome/login" class="aa-login">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <nav class="navbar navbar-inverse" style="background-color:#fff" data-spy="affix" data-offset-top="197">

        <a class="nav navbar-nav" href="#">
            <img src="<?php echo base_url() ?>assets/logo/logo.png" alt="">
        </a>
        <ul class="nav navbar-nav">
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
        </ul>


    </nav>

    <div class="container-fluid" style="height:1000px">

    </div>




    <?php $this->load->view('Frontend/template/js'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>