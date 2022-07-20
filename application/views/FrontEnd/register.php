<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Pendaftaran Lapak Properti</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .register {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            margin-top: 0%;
            padding: 58px;
        }

        .register-left {
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }

        .register-left input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }

        .register-right {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }

        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }

        .register .register-form {
            padding: 10%;
            margin-top: 10%;
        }

        .btnRegister {
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }

        .register .nav-tabs {
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }

        .register .nav-tabs .nav-link {
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .register .nav-tabs .nav-link.active {
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading {
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }

        .register-heading2 {
            text-align: center;
            margin-top: 15%;
            margin-bottom: -15%;
            color: #495057;
        }
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/all.min.css">
</head>

<body>
    <div class="container-fluid register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="<?php echo base_url() ?>assets/logo/browser.png" alt="" />
                <h3>Selamat Datang di Lapak Properti</h3>
                <p> Cari dan Temukan Berbagai Properti Menarik Yang Ada di Lapak Properti</p>
                <h5>Sudah Punya Akun ?</h6>
                    <a href="<?= site_url('auth') ?>">
                        <input type="submit" name="" value="Login" />
                    </a><br />
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Pendaftaran Akun Lapak Properti</h3>
                        <p class="register-heading2">Masukan Identitas sesuai dengan data diri anda</p>
                        <form action="<?php echo site_url('Auth/daftar'); ?>" method="POST">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nama Anda *" name="nama_pengguna" value="<?= set_value('nama_pengguna') ?>" oninput="setCustomValidity('')" maxlength="30" onkeyup="this.value=this.value.replace(/[^a-z\W]/g,'');" />
                                        <small class="text-danger"><?php echo form_error('nama_pengguna') ?></small>

                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="NIK (Nomor Induk Kependudukan) *" name="NIK_pengguna" value="<?= set_value('NIK_pengguna') ?>" minlength="9" maxlength="16" onkeyup="this.value=this.value.replace(/[^0-9\-]+/g, '').replace(/(\..*)\./g, '$1');" />
                                        <small class="text-danger"><?php echo form_error('NIK_pengguna') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <textarea type="text" class="form-control" placeholder="Alamat *" name="alamat_pengguna"><?= set_value('alamat_pengguna') ?></textarea>
                                        <small class="text-danger"><?php echo form_error('alamat_pengguna') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nomor Telp *" name="no_pengguna" value="<?= set_value('no_pengguna') ?>" minlength="9" maxlength="14" onkeyup="this.value=this.value.replace(/[^0-9\-]+/g, '').replace(/(\..*)\./g, '$1');" />
                                        <small class="text-danger"><?php echo form_error('no_pengguna') ?></small>
                                    </div>
                                    <!--<div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="Laki-laki" checked>
                                                <span> Laki-laki </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="Perempuan">
                                                <span> Perempuan </span>
                                            </label>
                                        </div>
                                    </div>-->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email *" name="email" value="<?= set_value('email') ?>" />
                                        <small class="text-danger"><?php echo form_error('email') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username *" name="username" value="<?= set_value('username') ?>">
                                        <small class="text-danger"><?php echo form_error('username') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" name="password" id="pass1" value="<?= set_value('password') ?>" style="float: left; width: 86%">
                                        <button id="c1" type="button" class="btn btn-default">
                                            <span class="fa fa-eye"></span>
                                        </button>
                                        <small class="text-danger"><?php echo form_error('password') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Konfirmasi Password *" id="pass2" name="password2" value="<?= set_value('password2') ?>" style="float: left; width: 86%">
                                        <button id="c2" type="button" class="btn btn-default">
                                            <span class="fa fa-eye"></span>
                                        </button>
                                    </div>
                                    <input type="submit" class="btnRegister" value="Daftar" />
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        var b = document.getElementById("c2");
        var pass2 = document.getElementById("pass2");
        b.onclick = function() {
            if (pass2.type === "password") {
                pass2.type = 'text';
                b.innerHTML = '<i class="fa fa-eye-slash"></i>';
            } else {
                pass2.type = 'password'
                b.innerHTML = '<i class="fa fa-eye"></i>';
            }
        }

        var h = document.getElementById("c1");
        var pass = document.getElementById("pass1");
        h.onclick = function() {
            if (pass.type === "password") {
                pass.type = 'text';
                h.innerHTML = '<i class="fa fa-eye-slash"></i>';
            } else {
                pass.type = 'password'
                h.innerHTML = '<i class="fa fa-eye"></i>';
            }
        }
    </script>
</body>

</html>