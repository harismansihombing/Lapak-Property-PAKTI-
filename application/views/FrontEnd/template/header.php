<header id="aa-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-header-area">
                    <div class="row">

                        <?php
                        // Cek role user
                        if (!$this->session->userdata('username')) { // Jika role-nya admin
                        ?>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="aa-header-left">
                                    <div class="aa-telephone-no">
                                        <span class="fa fa-phone"></span>
                                        (+62) 81333992731
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
                                    <a href="<?php echo site_url() ?>welcome/register" class="aa-register">Register</a>
                                    <a href="<?php echo site_url() ?>welcome/login" class="aa-login">Login</a>
                                </div>
                            </div>
                        <?php
                        } else { // Jika role-nya operator
                        ?>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="aa-header-left">
                                    <div class="aa-telephone-no">
                                        <span class="fa fa-phone"></span>
                                        (+62) 81333992731
                                        <?php //echo $this->session->userdata('nama') 
                                        ?>
                                    </div>
                                    <div class="aa-email hidden-xs">
                                        <span class="fa fa-envelope-o"></span> Hallo@pakti.com
                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>