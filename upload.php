<?php
    session_start();
  include "koneksi.php";
?>
<?php
$query = mysqli_query($konek, "SELECT max(id_bayar) as kodeTerbesar FROM tbl_bayar");
$data = mysqli_fetch_array($query);
$kodebayar = $data['kodeTerbesar'];

$urutan = (int) substr($kodebayar, 3, 3);

$urutan++;

$huruf = "BYR";
$kodebayar = $huruf . sprintf("%03s", $urutan);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Mini Zoo">
    <meta name="description" content="Edukasi Satwa
Edukasi Peternakan
Edukasi Perikanan
Edukasi Sayuran">
              <meta name="keywords" content="website,company,articles,images,kebunbinatang,minizoo,jogjaexotarium,sleman,satwa,tanaman,outbound">
              <!-- share -->
    
<meta property="og:url" content="http://jogjaexotarium.com/mini-zoo" />
<meta property="og:type" content="place" />
<meta property="og:title" content="Mini Zoo" />
<meta itemprop="image" content="http://jogjaexotarium.com/storage/app/public/img/sections/banner_5a7180d300089.jpg">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="NrtIwt5TI7Gj2USMFOHkxuOS1o7JufY5pWx2271V">
  <title>Mini Zoo| Jogja Exotarium</title>

  <!-- Java Sript -->
  <script type="text/javascript">
    window.Laravel = {"csrfToken":"NrtIwt5TI7Gj2USMFOHkxuOS1o7JufY5pWx2271V"}
  </script>
  <link rel="shortcut icon" href="http://jogjaexotarium.com/storage/app/public/img/favicon20180201095602.ico?v=11" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="http://jogjaexotarium.com/public/css/app.css?1000">
  <link href="//fonts.googleapis.com/css?family=Carter One" rel="stylesheet" type="text/css">
  <link href="//fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" type="text/css">

  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="http://jogjaexotarium.com/public/js/app.js"></script>

  <!-- framework bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- datepicker bootstrap -->
  <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker.min.css">
  <script src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js"></script>

  

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse"      aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
          <img class="img" alt="logo" src="http://jogjaexotarium.com/storage/app/public/img/logo20180201095358.png"></a>


      </div>


      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbarCollapse">

        <!--<form class="navbar-form navbar-right hidden-xs" method="get" action="">
          <div class="form-group">
            <input type="text" name="q" class="form-control" placeholder="Search" required="">
          </div>
          <button type="submit" class="btn btn-default">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </form>-->
        

        <ul class="nav navbar-nav navbar-right">
        <li><a class="hover-line " href="index.php">Mini Zoo</a></li>
          <li><a class="hover-line " href="fasilitas.php">Fasilitas</a></li>
          <li><a class="hover-line " href="tentang.php">Tentang Kami</a></li>
          <li><a class="hover-line " href="pemesanan.php">Pemesanan</a></li>
          <li><a class="hover-line " href="kontak.php">Kontak</a></li>
          <li><a class="hover-line " href="login.php">Login</a></li>
        </ul>

        <!--<form class="navbar-form navbar-right visible-xs" method="get" action="">
          <div class="form-group">
            <input type="text" name="q" class="form-control" placeholder="Search" required="">
          </div>
          <button type="submit" class="btn btn-default">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </form>-->
      </div>
    </div>
      </nav>

      <header class="container-fluid text-center">
				<div class="banner-section">
			<img alt="banner-header" src="http://jogjaexotarium.com/storage/app/public/img/home/carousel_5a7a71fb5d6bd.jpg" />
			<div class="banner-section-content">
				<h1 data-animate="true" data-effect="flipInX">
					PEMESANAN
				</h1>
			</div>
		</div>
	</header>

    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                    <form action="uploadproses.php" method="post" enctype="multipart/form-data">
                        <div class="card">
                            <div class="header">
                                <h2 class="text-center"><b>FORM PEMESANAN</b></h2>
                                 <div class="content">
                                 <div class="card-content">
                                   
                                 <div class="form-group row">
                                    <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <input type="hidden" name="id_bayar" class="form-control" value="<?php echo $kodebayar ?>" readonly>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                    <label class="col-sm-2 col-form-label">Validasi Kode Pembayaran</label>
                                            <div class="col-sm-5">                        
                                                <input type="text" class="form-control" onkeyup="isi_otomatis()" name="id_pemesanan" id="id_pemesanan" placeholder=" PSN001">
                                                <b><small>Silahkan masukkan kode Pembayaran anda </small></b>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                      <label class="col-sm-2 col-form-label">Upload Bukti Pembayaran<br><small><I>size file :max 2 MB </I></small></label>
                                            <div class="col-sm-5">
                                              <input type="File" name="bayar_gambar" class="input-sm form-control" placeholder=" PNG/ JPG/ JPEG ">
                                              <input type="hidden" class="input-sm form-control" name="bayar_tgl"  value="<?php echo date("Y-m-d") ?>" placeholder=" Tanggal Bayar">
                                              <small><I>format file : PNG/ JPG/ JPEG </I></small>
                                            </div>
                                    </div>
                                    </div>
               
                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                    <label class="col-sm-2 col-form-label">Total Tagihan</label>
                                            <div class="col-sm-5">
                                                <input type="number" name="bayar_total" id="total_pemesanan" class="form-control" placeholder="0" Readonly>
                                                <p><small><i>* : Total tagihan yang dibayarkan</i></small></p>
                                        </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                            <div class="col-sm-5">
                                            <button type="reset" class="btn btn-danger btn-fill z-bottom-0 card-position">hapus</button> 
                                            <button type="submit" class="btn btn-info btn-fill z-bottom-0 card-position">Simpan</button>    
                                        </div>
                                        </div>
                                    </div>
                                  
                                 <div class="form-group row">
                                    <div class="col-sm-20">
                                            <div class="col-md-30">
                                            <a href="validasi.php" class="button button1">KEMBALI</a>
                                            <a href="byrsukses.php" class="button button2">SELANJUTANYA</a>
                                        </div>
                                        </div>
                                    </div>
                                        
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="main-footer">
		<div class="container footer-top">
			<div class="row">
				<div class="col-xs-12 col-sm-4 navigation">
					<h4>Navigasi</h4>
					<ul class="nav navbar-nav navbar-right">
          <li><a class="hover-line " href="index.php">Mini Zoo</a></li>
          <li><a class="hover-line " href="fasilitas.php">Fasilitas</a></li>
          <li><a class="hover-line " href="tentang.php">Tentang Kami</a></li>
          <li><a class="hover-line " href="pemesanan.php">Pemesanan</a></li>
          <li><a class="hover-line " href="kontak.php">Kontak</a></li>
        </ul>
				</div>
				<div class="col-xs-12 col-sm-4 contact">
					<h4>Kontak</h4>
					<ul>
						<li>Jogja Exotarium</li>
						<li>Jl.Magelang Km. 8 Desa Sendangadi, Kecamatan Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta</li>
												<li>
              																							<a href="tel:087738394686">0877-3839-4686</a><br>
																							<a href="tel:085775621229"> 0857-7562-1229</a><br>
													</li>
																		<li><a href="mailto:jogjaexotarium23@gmail.com">jogjaexotarium23@gmail.com</a></li>
											</ul>
				</div>
				<div class="col-xs-12 col-sm-4 social-media">
															<h4>Media Sosial</h4>
					          <div class="col-xs-12">
										<a href="https://web.facebook.com/JogjaExotarium/" class="facebook" target="_blank">
						<i class="fa fa-facebook-official" aria-hidden="true"></i>
					</a>
															<a href="http://www.instagram.com/jogjaexotarium" class="instagram" target="_blank">
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</a>
										                              					<a href="https://plus.google.com/u/0/114693953893147122319" class="googleplus" target="_blank">
						<i class="fa fa-google-plus-official" aria-hidden="true"></i>
					</a>
					         <a href="https://api.whatsapp.com/send?phone=62877-3839-4686&amp" class="whatsapp" target="_blank">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
              </a>
                                            </div>
				</div>
			</div>
		</div>
		<div class="container-fluid footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 bottom-left">
						&copy; Jogja Exotarium 2021 - All rights reserved
					</div>
					
				</div>
			</div>
		</div>
    </footer>
    
    <script>

    $(document).ready(function(){
      $.get( 'http://jogjaexotarium.com/cart/check', function( data ) {
        if(data == 0){
          $("#show_cart span.label").hide();
        }else{
          $("#show_cart span.label").show().html(data);
        }
      });
    });

    $('#modal_cart').on('shown.bs.modal', function () {
      $("#cart_content").load("http://jogjaexotarium.com/cart");
    });

    $('#modal_cart').on('hidden.bs.modal', function () {
      $("#cart_content").html('<h3><i class="fa fa-spinner fa-spin fa-lg" aria-hidden="true"></i></h3>');
    });
  </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
            function isi_otomatis(){
                var id_pemesanan  = $("#id_pemesanan").val();
                $.ajax({
                    url: 'uploadpesanan.php',
                    data:"id_pemesanan="+id_pemesanan,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama_pengunjung').val(obj.nama_pengunjung);
                    $('#email_pengunjung').val(obj.email_pengunjung);
                    $('#no_hp_pengunjung').val(obj.no_hp_pengunjung);
                    $('#alamat_pengunjung').val(obj.alamat_pengunjung);

                    $('#id_pemesanan').val(obj.id_pemesanan);
                    $('#item_pemesanan').val(obj.item_pemesanan);
                    $('#tgl_kegiatan').val(obj.tgl_kegiatan);
                    $('#harga_pemesanan').val(obj.harga_pemesanan);
                    $('#qty_peserta_pemesanan').val(obj.qty_peserta_pemesanan);
                    $('#total_pemesanan').val(obj.total_pemesanan);
                });
            }
        </script>
</body>
</html>