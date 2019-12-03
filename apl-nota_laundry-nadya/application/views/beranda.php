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
<body class="hold-transition skin-blue sidebar-mini">

    <!-- area nota yang ditampilkan -->  <!-- area nota yang ditampilkan -->  <!-- area nota yang ditampilkan -->  <!-- area nota yang ditampilkan -->
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6" style="padding: 20px; ">
                <h2 style="text-align: center; margin-bottom: 30px; text-align: center">Tambah dan edit</h2>
                <div style="border:1px solid black; padding: 20px; margin-bottom: 50px">
                    <h4><strong>Tambah laundry</strong></h4>
                    <form action="TransaksiDetil/save" method="post">
                        <div class="form-group">
                            <label>Jenis Laundry</label> 
                            <select class="form-control" name="jenisLaundry" id="jenisLaundry">
                                <?php foreach($jenisLaundry as $jl): ?>
                                    <option selected="selected" value="<?= $jl['id_jenis_laundry'] ?>"><?= $jl['nama']." - Rp. ".$jl['harga'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Laundry</label>
                            <input type="number" class="form-control" name="jumlahLaundry" id="jumlahLaundry" placeholder="Masukkan jumlah laundry" autofocus required />
                        </div>
                        <button type="submit"class="btn btn-success btn-block">Tambahkan Barang Laundry</button>
                    </form>
                </div> 
                <div style="border:1px solid black; padding: 20px; margin-bottom: 50px">
                    <h4><strong>Edit Laundry</strong></h4>
                    <?php foreach($transaksiDetil as $trd): ?>
                        <form action="TransaksiDetil/delete" method="post">
                            <div class="row" style="margin-bottom: 5px">
                              <div class="col-md-9">
                                  <?= $trd['jumlah_laundry'] ?>&emsp; <?= $trd['nama'] ?>
                              </div>
                              <div class="col-md-3">
                                  <a href="<?= site_url('TransaksiDetil/delete/'.$trd['id_transaksi_detil']) ?>" class="btn btn-danger btn-circle" onclick="return confirm('Hapus <?= $trd['nama'] ?>?');">H</a>
                              </div>
                            </div>
                        </form>
                    <?php endforeach; ?>
                </div>
                <div style="border:1px solid black; padding: 20px; margin-bottom: 50px">
                    <h4><strong>Edit Informasi Toko</strong></h4>
                    <form action="Toko/edit" method="post">
                        <?php foreach($toko as $t): ?>
                            <div class="form-group">
                                <label>Nama toko</label>
                                <input type="text" class="form-control" name="namaToko" id="namaToko" placeholder="Masukkan nama toko" value="<?= $t['nama'] ?>" autofocus required />
                            </div>
                            <div class="form-group">
                                <label>Alamat toko</label>
                                <input type="text" class="form-control" name="alamatToko" id="alamatToko" placeholder="Masukkan alamat toko" value="<?= $t['alamat'] ?>" autofocus required />
                            </div>
                            <div class="form-group">
                                <label>Telp/Hp toko (hanya angka dan spasi)</label>
                                <input type="text" class="form-control" name="telpToko" id="telpToko" pattern="[0-9\s]+" placeholder="Masukkan telp/hp toko" value="<?= $t['telp'] ?>" autofocus required />
                            </div>
                        <?php endforeach; ?>
                        <button type="submit"class="btn btn-success btn-block">Edit Informasi Toko</button>
                  </form>
                </div>
            </div>
            <div class="vl"></div>
            <div class="col-md-6" style="padding: 20px; margin-rigth: 0; ">
                <h2 style="text-align: center; margin-bottom: 30px">Tampil nota</h2>
                <div style="border:1px solid black; padding: 20px">
                    <div class="row">
                        <div class="col-md-6">
                            <?php foreach($toko as $t): ?>
                                <p style="font-size: 20pt;"><?= $t['nama'] ?></p>
                                <p><?= $t['alamat'] ?></p>
                                <p><?= $t['telp'] ?></p>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                              <div class="col-md-4">
                                  <p>No. Faktur</p>
                                  <p>Nama</p>
                                  <p>Telp./Hp</p>
                                  <p>Tgl. Terima</p>
                                  <p>Tgl. Selesai</p>
                              </div> 
                              <div class="col-md-7">
                                <?php foreach($transaksi as $tr): ?>
                                    <p>: <?= $tr['nomor_nota'] ?></p>
                                    <p>: <?= $tr['pelanggan'] ?></p>
                                    <p>: <?= $tr['telp'] ?></p>
                                    <p>: <?= $tr['tanggal_terima'] ?></p>
                                    <p>: <?= $tr['tanggal_selesai'] ?></p>
                                <?php endforeach; ?>
                              </div>
                          </div>
                        </div>
                    </div>

                    <div>       
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Jenis laundry</th>
                              <th>Harga</th>
                              <th>Jumlah</th>
                              <th>Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach($transaksiDetil as $trd): ?>
                                <tr>
                                  <td><?= $trd['nama'] ?></td>
                                  <td>Rp. <?= $trd['harga'] ?></td>
                                  <td><?= $trd['jumlah_laundry'] ?></td>
                                  <td>Rp. <?= $trd['subtotal'] ?></td>
                                </tr> 
                            <?php endforeach; ?>
                          </tbody>
                        </table>
                        <table class="table table-bordered">
                          <tbody>
                            <tr>
                              <td>Total Pakaian</td>
                              <td><?= $totalPakaian ?> pcs</td>
                            </tr>
                            <tr>
                              <td>Harga Total</td>
                              <td>Rp. <?= $totalHarga ?></td>
                            </tr>
                          </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h5><strong>PERHATIAN</strong></h5>
                            <ol>
                                <li>Pengambilan barang dibayar tunai.</li>
                                <li>kalau terjadi kehilangan/kerusakan kami hanya mengganti tidak lebih dari 2x ongkos cuciannya.</li>
                                <li>Hak clain yang kami terima tidak lebih dari 24 jam dari pengambilan.</li>
                            </ol>
                            <h5><strong>KAMI TIDAK BERTANGGUNG JAWAB</strong></h5>
                            <ol start="4">
                                <li>Susut/luntur karena sifat bahannya.</li>
                                <li>Cucian yang tidak diambil dalam tempo 1 bulan hilang/rusak.</li>
                                <li>Bila terjadi kebakaran.</li>
                            </ol>
                        </div>
                        <div class="col-md-6 bottomdiv">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Tanda Terima</strong></p>
                                    <br>
                                    <br>
                                    <p>....................</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Hormat kami</strong></p>
                                    <br>
                                    <br>
                                    <p>....................</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><hr><br>
                <div>
                    <?= $output->output ?>
                </div>
            </div>
        </div>
    </div> 
    <!-- area nota yang ditampilkan -->  <!-- area nota yang ditampilkan -->  <!-- area nota yang ditampilkan -->  <!-- area nota yang ditampilkan -->


    


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

    .vl {
        border-left: 2px solid black;
        height: 100%;
        position: fixed;
        left: 50%;
        margin-left: -3px;
        top: 0;
    }

    .pull-bottom {
        display: table-cell;
        height: auto;
        border: 1px solid black;
        float: none;
    }

    .bottomdiv {
        bottom: -180px;
    }

    .btn-circle {
        width: 30px;
        height: 30px;
        padding: 6px 0px;
        border-radius: 15px;
        text-align: center;
        font-size: 12px;
        line-height: 1.42857;
    }
  </style>
</html>
