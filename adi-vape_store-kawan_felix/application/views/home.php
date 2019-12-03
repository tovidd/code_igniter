<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $judul ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

    <!-- nav bar --> <!-- nav bar --> <!-- nav bar --> <!-- nav bar --> <!-- nav bar --> <!-- nav bar -->
    <div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid" id="tabs">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= site_url('Home/') ?>" title="Namava pestore">Namava pestore&emsp;&emsp;</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a title="Home" href="<?= site_url('Home/') ?>">&emsp;Home &emsp; </a></li>
                    <li><a title="Shop" href="<?= site_url('Home/shop') ?>">&emsp;Shop&emsp;</a></li>
                    <li><a title="About" href="<?= site_url('Home/about') ?>">&emsp;About&emsp;</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right"> 
                    <?php
                        if($this->session->userdata('username') != null)
                        {
                            echo '
                                <li><a data-toggle="modal" data-target="#cart_popup_modal" class="pointer"><span class="glyphicon glyphicon-shopping-cart"></span>&emsp; My cart&emsp;</a></li>
                                <li><a data-toggle="modal" data-target="#profil_popup_modal" class="pointer"><span class="glyphicon glyphicon-user"></span>&emsp;'.$this->session->userdata('username')->username.' &emsp;</a></li>
                                <li><a data-toggle="modal" data-target="#keluar_popup_modal" class="pointer"><span class="glyphicon glyphicon-log-out"></span>&emsp; Log out&emsp;</a></li>
                            ';
                        }
                        else
                        {
                            echo'
                                <li><a data-toggle="modal" data-target="#daftar_popup_modal" class="pointer"><span class="glyphicon glyphicon-tags"></span>&emsp; Sign up&emsp;</a></li>
                                <li><a data-toggle="modal" data-target="#masuk_popup_modal" class="pointer" ><span class="glyphicon glyphicon-log-in"></span>&emsp; Log in&emsp;</a></li>
                            ';
                        }
                    ?>
                </ul>
            </div>
        </nav>
    </div>
    <!-- nav bar --> <!-- nav bar --> <!-- nav bar --> <!-- nav bar --> <!-- nav bar --> <!-- nav bar -->
    </body>


    <!-- home content --> <!-- home content --> <!-- home content --> <!-- home content --> <!-- home content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" width="100%">
                <img src="<?= base_url('images/home.jpg'); ?>" width="100%" height="100%">
                <div class="carousel-caption">
                    <form method="post" action="<?= base_url('Home/shop'); ?>">
                        <button class="btn-get-started" type="submit">Shop now</button>
                    </form>
                    <h1 style="background-color: rgba( 0, 0, 0, 0.5); padding: 20px">Namava pestore</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- home content --> <!-- home content --> <!-- home content --> <!-- home content --> <!-- home content -->
    









    <!-- [START] Login/Masuk -->   <!-- [START] Login/Masuk -->   <!-- [START] Login/Masuk -->   <!-- [START] Login/Masuk -->
    <div>
        <div class="container">
            <div class="modal fade" id="masuk_popup_modal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="padding:35px 50px;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4><span class="glyphicon glyphicon-log-in"></span> Log in</h4>
                        </div>
                        <div class="modal-body" style="padding:40px 50px;">
                            <form action="<?= base_url() ?>Home/login" method="post">
                                <div class="form-group">
                                    <label><span class="glyphicon glyphicon-user"></span> Username</label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                                </div>
                                <button type="submit" class="btn btn-success btn-block"> Log in now</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&emsp;Cancel&emsp;</button>
                            <p>Not register yet? <a class="pointer" data-dismiss="modal" data-toggle="modal" data-target="#daftar_popup_modal">Sign up now</a></p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!-- [CLOSED] Login/Masuk -->   <!-- [CLOSED] Login/Masuk -->   <!-- [CLOSED] Login/Masuk -->   <!-- [CLOSED] Login/Masuk -->







    <!-- [START] SignUp/Daftar -->   <!-- [START] SignUp/Daftar -->   <!-- [START] SignUp/Daftar -->   <!-- [START] SignUp/Daftar -->
<div>
    <div class="container">
        <div class="modal fade" id="daftar_popup_modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="padding:35px 50px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4><span class="glyphicon glyphicon-tags"></span> Sign up</h4>
                    </div>
                    <div class="modal-body" style="padding:40px 50px;">
                        <form class="register" action="<?= base_url() ?>Home/signup" method="POST">
                            <div class="form-group">
                                <label><span class="glyphicon glyphicon-user"></span> Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" required>
                            </div>
                            <div class="form-group">
                                <label><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                <input class="form-control" id="password" name="password" type="password" onchange="if(this.checkValidity()) form.confirmPassword.pattern= this.value;" placeholder="Enter your password" required>
                            </div>
                            <div class="form-group">
                                <label><span class="glyphicon glyphicon-eye-close"></span> Confirm password</label>
                                <input class="form-control" name="confirmPassword" id="confirmPassword" type="password" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Confirm password does not correct' : '');" placeholder="Confirm your password" required>
                            </div>
                                <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-plane"></span> Sign up now</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&emsp;Cancel&emsp;</button>
                        <p>Already have account? <a class="pointer" data-dismiss="modal" data-toggle="modal" data-target="#masuk_popup_modal">Log in now</a></p>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<!-- [CLOSED] SignUp/Daftar -->   <!-- [CLOSED] SignUp/Daftar -->   <!-- [CLOSED] SignUp/Daftar -->   <!-- [CLOSED] SignUp/Daftar -->







    <!-- profil --> <!-- profil --> <!-- profil --> <!-- profil --> <!-- profil --> <!-- profil --> <!-- profil -->
    <div>
        <div class="container">
            <div id="profil_popup_modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h1 class="text-center">My profile</h1>
                        </div>
                        <div class="modal-body">
                            <h3>Hello, <?= $this->session->userdata('username')->username ?></h3>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-12">
                                <button class="btn btn-success btn-default pull-left" aria-hidden="true" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span>&emsp;Close&emsp;</button>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- profil --> <!-- profil --> <!-- profil --> <!-- profil --> <!-- profil --> <!-- profil --> <!-- profil -->








    <!-- [START] Keluar -->   <!-- [START] Keluar -->   <!-- [START] Keluar -->   <!-- [START] Keluar -->   <!-- [START] Keluar -->
    <div>
        <div class="container">
            <div id="keluar_popup_modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h1 class="text-center">Log out now?</h1>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-12">
                                    <button class="btn btn-danger btn-default pull-right" aria-hidden="true" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span>&emsp;Cancel &emsp;</button>
                                <form action="<?= base_url() ?>Home/logout" method="post">
                                    <button class="btn btn-success btn-default pull-left" aria-hidden="true" > <span class="glyphicon glyphicon-ok"></span>&emsp;Ok&emsp;</button>
                                </form>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [CLOSED] Keluar -->   <!-- [CLOSED] Keluar -->   <!-- [CLOSED] Keluar -->   <!-- [CLOSED] Keluar -->   <!-- [CLOSED] Keluar -->









    <!-- cart --> <!-- cart --> <!-- cart --> <!-- cart --> <!-- cart --> <!-- cart --> <!-- cart --> <!-- cart -->
    <div>
        <div class="container">
            <div id="cart_popup_modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h1 class="text-center">My cart</h1>
                        </div>
                        <div class="modal-body">
                            <div>
                                <div class="row">
                                    <div class="scrolling-wrapper"> 
                                        <div class="card">
                                            <?php foreach($transaksi as $t): ?>
                                                <form action="<?= base_url() ?>Home/unbuy" method="post">
                                                    <?php if($t['id_pelanggan'] == $this->session->userdata('username')->id_pelanggan): ?>
                                                        <?php if($t['status_bayar'] == "belum"): ?>
                                                            <div class="col-md-12" style="background-color: rgba( 56, 57, 56, 0.1);">'
                                                                <div class="thumbnail">'
                                                                    <?php echo '<img class="full" src="data:image/jpeg;base64,'.base64_encode( $t['gambar'] ).'"/>'; ?>
                                                                    <?php
                                                                        if($t['harga_diskon'] != 0)
                                                                        {
                                                                            echo '<p class= "bottom-left" style="bottom: 400px; font-size: 30pt; background-color: rgba( 39, 142, 14 , 0.6); color: black">$.'.$t['diskon'].'% Off</p>';
                                                                            echo '<p class= "bottom-left" style="bottom: 210px; background-color: #278e0e;">$.'.$t['harga_diskon'].'</p>'; 
                                                                            echo '<p class= "bottom-left"><strike>$.'.$t['harga'].'</strike></p>'; 
                                                                        }
                                                                        else
                                                                        {
                                                                            echo '<div style= "background-color: black;"><p class= "bottom-left">$.'.$t['harga'].'</p></div>';
                                                                        }
                                                                    ?>
                                                                    <div class="caption" style="height: 150px; ">
                                                                        <h3><?= $t['nama'] ?></h3>
                                                                    </div> 
                                                                    <a href="<?= site_url('Home/unbuy/'.$t['id_transaksi']) ?>" class="btn btn-danger btn-xs btn-rounded" onclick="return confirm('Cancel buy <?=  $t['nama'] ?> ?');">Cancel buy</a>
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </form>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-12">
                                <button name="batal_keluar_tombol" class="btn btn-success btn-default pull-left" aria-hidden="true" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span>&emsp;Close &emsp;</button>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- cart --> <!-- cart --> <!-- cart --> <!-- cart --> <!-- cart --> <!-- cart --> <!-- cart --> <!-- cart -->


   

    



    <!-- Footer -->
    <section id="footer" style="background-color: #383838; margin-top: 200px">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left" style="margin-top: 30px">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <ul class="list-unstyled quick-links">
                        <li><a href="<?= site_url('Home/') ?>" title="Home"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <ul class="list-unstyled quick-links">
                        <li><a href="<?= site_url('Home/shop') ?>" title="Shop"><i class="fa fa-angle-double-right"></i>Shop</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <ul class="list-unstyled quick-links">
                        <li><a href="<?= site_url('Home/about') ?>" title="About"><i class="fa fa-angle-double-right"></i>About</a></li>
                    </ul>
                </div>
            </div>	
            <hr style="border-color: white;">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p style="color: white">Namava pestore &copy All right Reversed</p>
                </div>
                <hr>
            </div>	
        </div>
    </section>
    <!-- ./Footer -->
</html>


<style>
    .bottom-left {
        position: absolute;
        bottom: 180px;
        left: 30px;
        color: white;
        padding-top: 5px;
        padding-bottom: 5px;
        padding-left: 10px;
        padding-right: 10px;
        background-color: #383838;
    }

    .pointer {cursor: pointer;}

    .btn-get-started {
        font-family: Raleway-SemiBold;
        font-size: 25pt;
        color: rgba(58, 133, 191, 0.75);
        letter-spacing: 1px;
        border: 2px solid rgba(58, 133, 191, 0.75);
        border-radius: 40px;
        background: transparent;
        transition: all 0.3s ease 0s;
        padding: 5px;
    }

    .btn-get-started:hover {
        color: #FFF;
        background: rgba(58, 133, 191, 0.75);
        border: 2px solid rgba(58, 133, 191, 0.75);
    }
</style>



