<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $judul ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
                    <li><a title="Home" href="<?= site_url('Home/') ?>">&emsp;Home &emsp; </a></li>
                    <li><a title="Shop" href="<?= site_url('Home/shop') ?>">&emsp;Shop&emsp;</a></li>
                    <li class="active"><a title="About" href="<?= site_url('Home/about') ?>">&emsp;About&emsp;</a></li>
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


    <!-- barang --> <!-- barang --> <!-- barang --> <!-- barang --> <!-- barang --> <!-- barang --> <!-- barang --> <!-- barang -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" width="100%">
                <img src="<?= base_url('images/store.jpg'); ?>" width="100%" height="100%">
                <div class="carousel-caption" style="background-color: rgba( 0, 0, 0, 0.8);">
                    <h1 style="padding: 20px;">Namava pestore <br> Vape store</h1>
                    <p style="text-align: justify; padding: 20px">
                        &emsp;&emsp;
                        As one of the leading online retailers since 2015, Vapestore proudly purveys the best in third-party 
                        and own brand e-cigarette technology, e-liquids and accessories. Our ever-expanding collection includes 
                        the most sought-after brands on the market, with such reputable names as Smok, Innokin and Aspire all 
                        in one convenient location. You will also find a huge assortment of e-liquids from popular brands like 
                        Nasty Juice and Dinner Lady, along with our own phenomenally successful lines of Double Drip and 
                        Vapouriz Premium liquids. With flavours ranging from tobacco to menthol, fruits and desserts and 
                        everything in between, there’s something to satisfy all tastes at Vapestore. Our specialist knowledge 
                        and dedication to excellence will help to enhance every aspect of your vaping experience, and each 
                        product has been carefully chosen by vapers, for vapers. We source directly from the manufacturer and 
                        offer unrivalled customer service, allowing you to shop with complete confidence every step of the way.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- barang --> <!-- barang --> <!-- barang --> <!-- barang --> <!-- barang --> <!-- barang --> <!-- barang --> <!-- barang -->









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
                                                    <?php 
                                                        if($t['id_pelanggan'] == $this->session->userdata('username')->id_pelanggan)
                                                        {
                                                            if($t['status_bayar'] == "belum")
                                                            {
                                                                echo '<div class="col-md-12" style="background-color: rgba( 56, 57, 56, 0.1);">';
                                                                    echo '<div class="thumbnail">';
                                                                        echo '<img class="full" src="data:image/jpeg;base64,'.base64_encode( $t['gambar'] ).'"/>';
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
                                                                        echo '
                                                                            <div class="caption" style="height: 150px; ">
                                                                                <h3>'.$t['nama'].'</h3>
                                                                            </div>
                                                                        ';
                                                                    echo '</div>';
                                                                echo '</div>';
                                                            }
                                                        }
                                                        ?>
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
</style>



