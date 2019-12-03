<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $judul ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini" style="background-color: gray;">

    <div data-toggle="modal" data-target="#tambah_modal" class="btn float" style="top: 40px;"  title="tambah"><span class="glyphicon glyphicon-plus center"></span></div> 
    <div data-toggle="modal" data-target="#edit_modal" class="btn float" style="top: 120px;" title="ubah"><span class="glyphicon glyphicon-pencil center"></span></div> 
    <div onclick="cetak('div_cetak')"  class="btn float" style="top: 200px;" title="cetak/pdf"><span class="glyphicon glyphicon-print center"></span></div> 
    <script language="javascript">
        function cetak(DivID) {
        var disp_setting="toolbar=yes,location=no,";
        disp_setting+="directories=yes,menubar=yes,";
        disp_setting+="scrollbars=yes,width=650, height=600, left=100, top=25";
          var content_vlue = document.getElementById(DivID).innerHTML;
          var docprint=window.open("","",disp_setting);
          docprint.document.open();
          docprint.document.write('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"');
          docprint.document.write('"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">');
          docprint.document.write('<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">');
          docprint.document.write('<head><title>Cetak nota</title>');
          docprint.document.write('<style type="text/css">body{ margin:0px;');
          docprint.document.write('font-family:verdana,Arial;color:#000;');
          docprint.document.write('font-family:Verdana, Geneva, sans-serif; font-size:12px;}');
          docprint.document.write('a{color:#000;text-decoration:none;} </style>');
          docprint.document.write('</head><body onLoad="self.print()"><center>');
          docprint.document.write(content_vlue);
          docprint.document.write('</center></body></html>');
          docprint.document.close();
          docprint.focus();
        }
    </script>

    <!-- area nota yang ditampilkan -->  <!-- area nota yang ditampilkan -->  <!-- area nota yang ditampilkan -->  <!-- area nota yang ditampilkan -->
    <div class="panel-body">
        <div class="row">
            <div style="background-color: white; margin-right: 40%; margin-left: 40%; padding: 20px">
              <div style="margin-top: 10px"></div>

              <center>
                <div style="margin-top: 10px"></div>
                <?php foreach($toko as $t): ?>
                  <?php echo '<!-- <img width="100" height="100" src="data:image/jpeg;base64,'.base64_encode( $t['gambar'] ).'"/> -->'; ?>
                  <p><?= $t['nama'] ?></p>
                  <p style="margin-top: -10px"><?= $t['alamat'] ?></p>
                <?php endforeach; ?>
              </center>

              <hr style="border-top: 1px dashed black;">

              <?php foreach($transaksi as $tr): ?>
                  <p>Nomor nota: <?= $tr['nomor_nota'] ?></p>
                  <p style="margin-top: -10px"><?= $tr['makan'] ?></p>
                  <p style="margin-top: -10px">Pelanggan: <?= $tr['pelanggan'] ?></p>
                  <p style="margin-top: -10px">Kasir: <?= $tr['kasir'] ?></p>
                  <p style="margin-top: -10px">Tanggal: <?= $tr['tanggal'] ?></p>
              <?php endforeach; ?>
              

              <br>

              <?php foreach($transaksiDetil as $trd): ?>
                  <p><?= $trd['nama_item'] ?></p>
                  <div class="row" style="margin-top: -15px">
                    <div class="col-md-9">
                      <p>&emsp;<?= $trd['jumlah_item']." x ".$trd['harga_item'] ?></p>
                    </div>
                    <div class="col-md-3">
                      <p><?= $trd['subtotal_item'] ?></p>
                    </div>
                  </div>
              <?php endforeach; ?>

              <br>
              <br>

              <div class="row">
                <div class="col-md-5"></div>
                  <div class="col-md-4">
                    <p style="margin-top: -10px">Total</p>
                    <p style="margin-top: -10px">Bayar tunai</p>
                    <p style="margin-top: -10px">Kembali</p>
                  </div>
                  <div class="col-md-3">
                    <p style="margin-top: -10px">: <?= $tr['total'] ?></p>
                    <p style="margin-top: -10px">: <?= $tr['bayar'] ?></p>
                    <p style="margin-top: -10px">: <?= $tr['kembali'] ?></p>
                  </div>
              </div>

              <br>

              <center>
                <p>Terima kasih atas kunjungan Anda</p>
                <p style="margin-top: -10px">powered by nutapos.com</p>
              </center>

              <div style="margin-bottom: 30px"></div>
            </div>
        </div>
    </div> 
    <!-- area nota yang ditampilkan -->  <!-- area nota yang ditampilkan -->  <!-- area nota yang ditampilkan -->  <!-- area nota yang ditampilkan -->




    <!-- area nota yang disembunyikan untuk di print -->  <!-- area nota yang disembunyikan untuk di print -->  <!-- area nota yang disembunyikan untuk di print -->
    <div id="div_cetak" style="display: none; ">
        <div class="panel-body">
            <div class="row">
                <div style="background-color: white; margin-right: 30%; margin-left: 30%; padding: 20px; border:1px solid black;">
                  <div style="margin-top: 10px"></div>

                  <center>
                    <div style="margin-top: 10px"></div>
                    <?php foreach($toko as $t): ?>
                      <?php echo '<!-- <img width="100" height="100" src="data:image/jpeg;base64,'.base64_encode( $t['gambar'] ).'"/> -->'; ?>
                      <p><?= $t['nama'] ?></p>
                      <p style="margin-top: -10px"><?= $t['alamat'] ?></p>
                    <?php endforeach; ?>
                  </center>

                  <hr style="border-top: 1px dashed black;">

                  <?php foreach($transaksi as $tr): ?>
                      <p>Nomor nota: <?= $tr['nomor_nota'] ?></p>
                      <p style="margin-top: -10px"><?= $tr['makan'] ?></p>
                      <p style="margin-top: -10px">Pelanggan: <?= $tr['pelanggan'] ?></p>
                      <p style="margin-top: -10px">Kasir: <?= $tr['kasir'] ?></p>
                      <p style="margin-top: -10px">Tanggal: <?= $tr['tanggal'] ?></p>
                  <?php endforeach; ?>
                  

                  <br>

                  <?php foreach($transaksiDetil as $trd): ?>
                      <p><?= $trd['nama_item'] ?></p>
                      <div class="row" style="margin-top: -15px">
                        <div class="col-md-9">
                          <p>&emsp;<?= $trd['jumlah_item']." x ".$trd['harga_item'] ?></p>
                        </div>
                        <div class="col-md-3">
                          <p><?= $trd['subtotal_item'] ?></p>
                        </div>
                      </div>
                  <?php endforeach; ?>

                  <br>
                  <br>

                  <div class="row">
                    <div class="col-md-5"></div>
                      <div class="col-md-4">
                        <p style="margin-top: -10px">Total</p>
                        <p style="margin-top: -10px">Bayar tunai</p>
                        <p style="margin-top: -10px">Kembali</p>
                      </div>
                      <div class="col-md-3">
                        <p style="margin-top: -10px">: <?= $tr['total'] ?></p>
                        <p style="margin-top: -10px">: <?= $tr['bayar'] ?></p>
                        <p style="margin-top: -10px">: <?= $tr['kembali'] ?></p>
                      </div>
                  </div>

                  <br>

                  <center>
                    <p>Terima kasih atas kunjungan Anda</p>
                    <p style="margin-top: -10px">powered by nutapos.com</p>
                  </center>

                  <div style="margin-bottom: 30px"></div>
                </div>
            </div>
        </div> 
    </div>
    <!-- area nota yang disembunyikan untuk di print -->  <!-- area nota yang disembunyikan untuk di print -->  <!-- area nota yang disembunyikan untuk di print -->



    <!-- menambah item pembelian -->  <!-- menambah item pembelian -->  <!-- menambah item pembelian -->  <!-- menambah item pembelian -->
    <div class="container">
      <div class="modal fade" id="tambah_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah item pembelian</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                  <form action="TransaksiDetil/save" method="post">
                      <div class="form-group">
                          <label><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;&nbsp;Nama item</label>
                          <input type="text" class="form-control" name="namaItem" id="namaItem" placeholder="Masukkan nama item pembelian" autofocus required />
                      </div>
                      <div class="form-group">
                          <label><span class="glyphicon glyphicon-triangle-top"></span>&nbsp;&nbsp;&nbsp;Jumlah item</label>
                          <input type="number" class="form-control" name="jumlahItem" id="jumlahItem" placeholder="Masukkan jumlah item pembelian" autofocus required />
                      </div>
                      <div class="form-group">
                          <label><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;&nbsp;Harga item</label>
                          <input type="number" class="form-control" name="hargaItem" id="hargaItem" placeholder="Masukkan harga item pembelian" autofocus required />
                      </div>
                      <button type="submit"class="btn btn-success btn-block">Tambahkan item pembelian Sekarang</button>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&emsp;Batal&emsp;</button>
              </div>
            </div>
        </div>
      </div>
    </div>
    <!-- menambah item pembelian -->  <!-- menambah item pembelian -->  <!-- menambah item pembelian -->  <!-- menambah item pembelian -->





    <!-- edit informasi toko dan item pembelian -->  <!-- edit informasi toko dan item pembelian -->  <!-- edit informasi toko dan item pembelian -->
    <div class="container">
      <div class="modal fade" id="edit_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit informasi toko dan item pembelian</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                  <form action="Toko/edit" method="post">
                      <div class="form-group">
                          <label><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;&nbsp;Nama toko</label>
                          <input type="text" class="form-control" name="namaToko" id="namaToko" placeholder="Masukkan nama toko" autofocus required />
                      </div>
                      <div class="form-group">
                          <label><span class="glyphicon glyphicon-pushpin"></span>&nbsp;&nbsp;&nbsp;Alamat toko</label>
                          <input type="text" class="form-control" name="alamatToko" id="alamatToko" placeholder="Masukkan alamat toko" autofocus required />
                      </div>
                      <button type="submit"class="btn btn-success btn-block">Edit nama toko sekarang</button>
                  </form>
              </div>
            </div>

            <div class="modal-content">
                <div class="modal-body" style="padding:40px 50px;">
                  <?php foreach($transaksiDetil as $trd): ?>
                      <form action="TransaksiDetil/delete" method="post">
                          <div class="row" style="margin-bottom: 5px">
                            <div class="col-md-9">
                                <?= $trd['jumlah_item'] ?>&emsp; <?= $trd['nama_item'] ?>
                            </div>
                            <div class="col-md-3">
                                <a href="<?= site_url('TransaksiDetil/delete/'.$trd['id_transaksi_detil']) ?>" class="btn btn-danger btn-xs btn-rounded" onclick="return confirm('Hapus <?= $trd['nama_item'] ?>?');">Hapus</a>
                            </div>
                          </div>
                      </form>
                <?php endforeach; ?>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&emsp;Batal&emsp;</button>
              </div>
            </div>
        </div>
      </div>
    </div>
    <!-- edit informasi toko dan item pembelian -->  <!-- edit informasi toko dan item pembelian -->  <!-- edit informasi toko dan item pembelian -->

    


</body>

<style>
    .float{
        font-size: 40px;
        position: fixed;
        width: 60px;
        height: 60px;
        left: 20px;
        background-color: #0C9;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        box-shadow: 2px 2px 3px #999;
    }

    .center {
        font-size: 25px; 
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
  </style>
</html>
