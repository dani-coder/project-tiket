<?php
session_start();
include "cek_login.php";
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Mini Zoo Jogja Exotarium</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />




    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    
    <!--     FORM TANGGAL     -->

  
  

<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    Mini Zoo
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="index.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="pelanggan.php">
                        <i class="pe-7s-user"></i>
                        <p>Pelanggan</p>
                    </a>
                </li>
                <li>
                    <a href="produk.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Produk</p>
                    </a>
                </li>
                <li>
                    <a href="jadwal.php">
                        <i class="pe-7s-science"></i>
                        <p>Jadwal</p>
                    </a>
                </li>
                 <li>
                    <a href="pemesanan.php">
                        <i class="pe-7s-note2"></i>
                        <p>LAPORAN</p>
                    </a>
                </li>
                <ul>
                <li>
                    <a href="pemesanan.php">
                        <i class="pe-7s-note2"></i>
                        <p>Pemesanan</p>
                    </a>
                </li>
                <li class="active">
                    <a href="pembayaran.php">
                        <i class="pe-7s-note2"></i>
                        <p>Pembayaran</p>
                    </a>
                    </li>
                </ul>
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">AKUN</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Akun
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>
                                <li class="divider"></li>
                                <li>
                                <p>Halo, anda login sebagai <b><?php echo $_SESSION['user_level']; ?></b>.</p>
                         				<a href="../logout.php">
                               		 <p>Log out</p></a> 
								</li>
                              </ul>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <form action="notasend.php" method="post" enctype="multipart/form-data">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">NOTA E-TIKET</h4>
                            <div class="content table-responsive table-full-width">
                            <?php
                                   $id = $_GET["id"];
                                   $result = mysqli_query($konek, "SELECT * FROM tbl_pengunjung 
                                   INNER JOIN tbl_pemesanan 
                                   ON tbl_pengunjung.id_pengunjung=tbl_pemesanan.id_pengunjung 
                                   INNER JOIN tbl_bayar 
                                   ON tbl_pemesanan.id_pemesanan=tbl_bayar.id_pemesanan WHERE id_bayar= '$id' ");
                                   while ($ambilpengunjung       = mysqli_fetch_array($result)) {
                                   ?>
                                <div class="form-group row">
                                       <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <input type="hidden" name="id_bayar" class="form-control" value="<?php echo $ambilpengunjung['id_bayar']; ?>" readonly>
                                        </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="col-md-10">
                                            <label>Kode Pesanan</label>
                                                <input type="text" name="id_pemesanan" class="form-control" value="<?php echo $ambilpengunjung['id_pemesanan']; ?>" readonly>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                          <div class="col-sm-5">
                                              <div class="col-md-10">
                                              <label>Nama</label>
                                                <input type="text" name="nama_pengunjung" class="form-control" value="<?php echo $ambilpengunjung['nama_pengunjung']; ?>" readonly>
                                              </div>
                                          </div>

                                          <div class="col-sm-5">
                                             <div class="col-md-10">
                                             <label>Item</label>
                                                <input type="text" name="item_pemesanan" class="form-control" value="<?php echo $ambilpengunjung['item_pemesanan']; ?>" readonly>
                                             </div>
                                          </div>
                                    </div>

                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                            <div class="col-md-11">
                                            <label>Email</label>
                                                <input type="text" name="email_pengunjung" class="form-control" placeholder="jogjaexotarium@gmail.com" value="<?php echo $ambilpengunjung['email_pengunjung']; ?>">
                                                <p><small><i>* : Pastikan email pemesan benar dan valid, biar tidak terjadi kesalahan pengiriman</i></small></p>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                          <div class="col-sm-5">
                                              <div class="col-md-10">
                                                 <label>Tanggal Kegiatan</label>
                                                <input type="date" name="tgl_kegiatan" class="form-control" value="<?php echo $ambilpengunjung['tgl_kegiatan']; ?>" readonly>
                                                <input type="hidden" name="bayar_tgl" class="form-control" value="<?php echo $ambilpengunjung['bayar_tgl']; ?>" readonly>
                                              </div>
                                          </div>

                                          <div class="col-sm-5">
                                             <div class="col-md-10">
                                                <label>Harga</label>
                                                <input type="number" name="harga_pemesanan" class="form-control" placeholder="12345" value="<?php echo $ambilpengunjung['harga_pemesanan']; ?>" readonly>
                                             </div>
                                          </div>
                                    </div>         


                                    <div class="form-group row">
                                          <div class="col-sm-5">
                                              <div class="col-md-10">
                                              <label>QTY</label>
                                                <input type="number" name="qty_peserta_pemesanan" class="form-control" value="<?php echo $ambilpengunjung['qty_peserta_pemesanan']; ?>" readonly>
                                              </div>
                                          </div>

                                          <div class="col-sm-5">
                                             <div class="col-md-10">
                                             <label>Total</label>
                                                <input type="number" name="total_pemesanan" class="form-control" value="<?php echo $ambilpengunjung['total_pemesanan']; ?>" readonly>
                                             </div>
                                          </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <div class="col-sm-10">
                                            <label>Foto Bukti Pembayaran</label>
                                            <div class="col-sm-10">
                                            <img src="../image/<?php echo $ambilpengunjung["bayar_gambar"];?>" style="width: 120px;"><br>
                                              <small><I>format file : PNG/ JPG/ JPEG </I></small><small><I>size file :max 2 MB </I></small>
                                              </div>
                                            </div>
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <div class="col-sm-10">
                                            <label>E-Tiket</label>
                                            <div class="col-sm-10">
                                            <img src="../image/gambar/ticket1.png" style="width: 700px; height: 200px;"><br>
                                            <img src="../image/gambar/ticket2.png" style="width: 700px; height: 200px;">
                                              <small><I>format file : PNG/ JPG/ JPEG </I></small><small><I>size file :max 5 MB </I></small>
                                              </div>
                                            </div>
                                    </div>
                                    </div>
                                    
                                    
                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                            <div class="col-md-10">
                                            <a class="btn btn-danger btn-fill z-bottom-0 card-position" href="pembayaran.php">Kembali</a> 
                                            <button type="submit" class="btn btn-info btn-fill z-bottom-0 card-position">Kirim</button>    
                                        </div>
                                        </div>
                                    </div>
                                    <?php
                                   }
                                    ?>
                                    <div class="clearfix"></div>
                                 
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-left">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a>Mini Zoo</a>, Jogja Exotarium
                </p>
            </div>
        </footer>


    </div>
</div>





</body>
 

        <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>


  

    
</head>

</html>

