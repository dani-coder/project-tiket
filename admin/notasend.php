<!DOCTYPE html>
<html lang="id">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

                  <meta name="title" content="Fasilitas">
              <meta name="description" content="Gazebo
Tubing
Outbound
Kolam Renang">
              <meta name="keywords" content="website,company,articles,images,kolamrenang,gazebo,tubing,outbound,minizoo,kebunbinatang,jogja,sleman,satwa,hewan,fauna,tumbuhan">
              <!-- share -->
    
<meta property="og:url" content="http://jogjaexotarium.com/fasilitas" />
<meta property="og:type" content="place" />
<meta property="og:title" content="Fasilitas" />
<meta property="og:description" content="Gazebo
Tubing
Outbound
Kolam Renang" />
<meta property="og:image" content="http://jogjaexotarium.com/storage/app/public/img/sections/banner_5fae85221f10f.jpg" />


<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="http://jogjaexotarium.com/fasilitas">
<meta name="twitter:title" content="Fasilitas">
<meta name="twitter:description" content="Gazebo
Tubing
Outbound
Kolam Renang">
<meta name="twitter:image:src" content="http://jogjaexotarium.com/storage/app/public/img/sections/banner_5fae85221f10f.jpg">


<meta itemprop="name" content="Fasilitas">
<meta itemprop="description" content="Gazebo
Tubing
Outbound
Kolam Renang">
<meta itemprop="image" content="http://jogjaexotarium.com/storage/app/public/img/sections/banner_5fae85221f10f.jpg">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="zXOoZ3tTpsndyMk1r4jZoTbh5tBbdlSwaCa9a1rc">
	<title>
          		Fasilitas
 | Jogja Exotarium
    	</title>

	<script type="text/javascript">
		window.Laravel = {"csrfToken":"zXOoZ3tTpsndyMk1r4jZoTbh5tBbdlSwaCa9a1rc"}
	</script>

	<link rel="shortcut icon" href="http://jogjaexotarium.com/storage/app/public/img/favicon20180201095602.ico?v=11" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="http://jogjaexotarium.com/public/css/app.css?1000">

  
                  <link href="//fonts.googleapis.com/css?family=Carter One" rel="stylesheet" type="text/css">
                <link href="//fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" type="text/css">
				<link href="css/style.css" rel="stylesheet" type="text/css"> 
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                <a class="navbar-brand" href="index.php">
		          <img class="img" alt="logo" src="http://jogjaexotarium.com/storage/app/public/img/logo20180201095358.png">
		        </a>
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
		  <li><a class="hover-line " href="galery.php">Galeri</a></li>
          <li><a class="hover-line " href="tentang.php">Tentang Kami</a></li>
          <li><a class="hover-line " href="pemesanan.php">Pemesanan</a></li>
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
        <?php
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;
            // Include librari phpmailer
            include('../phpmailer/Exception.php');
            include('../phpmailer/PHPMailer.php');
            include('../phpmailer/SMTP.php');
            $email_pengirim = 'jnurjumiati@gmail.com'; // Isikan dengan email pengirim
            $nama_pengirim = 'MiniZoo Regards'; // Isikan dengan nama pengirim
            $email_penerima = $_POST['email_pengunjung']; // Ambil email penerima dari inputan form
            $subjek = 'Verifikasi Pembayaran Anda'; 
            // Ambil pesan dari inputan form
            $id_pemesan = $_POST['id_pemesanan'];      
            $nama_pengunjung = $_POST['nama_pengunjung'];  
            $item_pemesanan = $_POST['item_pemesanan'];  
            $tgl_kegiatan = $_POST['tgl_kegiatan'];         
            $harga_pemesanan = $_POST['harga_pemesanan'];  
            $qty_peserta_pemesanan = $_POST['qty_peserta_pemesanan'];    
            $total_pemesanan = $_POST['total_pemesanan'];   
            $bayar_tgl = $_POST['bayar_tgl'];     
                      

            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Username = $email_pengirim; // Email Pengirim
            $mail->Password = 'szzmbkhetxwmbutv'; // Isikan dengan Password email pengirim
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            // $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging
            $mail->setFrom($email_pengirim, $nama_pengirim);
            $mail->addAddress($email_penerima, '');
            $mail->isHTML(true); // Aktifkan jika isi emailnya berupa html
            // Load file validasicontent.php
        ?>
		<header class="container-fluid text-center">
			<div class="banner-section">
			<img alt="banner-header" src="../image/gambar/sukses.jpg" />
			<div class="banner-section-content">
                <?php
                ob_start();
                include "notacontent.php";
                $content = ob_get_contents(); // Ambil isi file validasicontent.php dan masukan ke variabel $content
                ob_end_clean();
                $mail->Subject = $subjek;
                $mail->Body = $content;
                $mail->AddEmbeddedImage('../image/gambar/minizoo.png', 'logo_minizoo', 'minizoo.png'); // Aktifkan jika ingin menampilkan gambar dalam email
                $mail->AddEmbeddedImage('../image/gambar/ticket1.png', 'ticket1_minizoo', 'ticket1.png');
                $mail->AddEmbeddedImage('../image/gambar/ticket2.png', 'ticket2_minizoo', 'ticket2.png');
                if(empty($attachment)){ // Jika tanpa attachment
                    $send = $mail->send();
                    if($send){ // Jika Email berhasil dikirim
                        echo "<h1 data-animate='true' data-effect='flipInX'><b>Email berhasil dikirim</b></h1><br />";
                    }else{ // Jika Email gagal dikirim
                        echo "<h1 data-animate='true' data-effect='flipInX'><b>Email gagal dikirim</b></h1><br />";
                        // echo '<h1>ERROR<br /><small>Error while sending email: '.$mail->getError().'</small></h1>'; // Aktifkan untuk mengetahui error message
                    }
                }
                ?>
			</div>
			</div>
		</header> 


	<!-- MAIN CONTENT -->
	<main id="mainContent" class="container-fluid">
	<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                 <div class="content">
                                 <div class="card-content">
                                
                                 <a href='pembayaran.php' class="btn btn-info btn-fill z-bottom-0 card-position">Kembali</a>
                         
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
			
    </main>


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
	<script type="text/javascript" src="http://jogjaexotarium.com/public/js/app.js"></script>
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
    </body>
</html>

