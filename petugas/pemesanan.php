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
</head>
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
                    <a href="pemesanan.php">
                        <i class="pe-7s-note2"></i>
                        <p>LAPORAN</p>
                    </a>
                </li>
                <ul>
                <li class="active">
                    <a href="pemesanan.php">
                        <i class="pe-7s-note2"></i>
                        <p>Pemesanan</p>
                    </a>
                </li>
                 <li>
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
                    <a class="navbar-brand" href="#">PEMESANAN</a>
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
                        <div class="card">
                            <div class="header">
                                <h4 class="title">DATA LIST PEMESANAN</h4>
                                <a href="pemesananadd.php">
                                <button class="btn btn-info btn-fill z-bottom-0 card-position">TAMBAH 
                                </button></a>
                            </div>
                            <i class="fa fa-print"></i>
                            <a href="pemesanancetak.php" target="_BLANK">PRINT</a>
                            <div class="content table-responsive table-full-width">
                            <form method="get">
                                <label>TANGGAL MULAI</label>
                                <input type="date" name="tanggal1" id="tanggal1">
                                <label>SAMPAI</label>
                                <input type="date" name="tanggal2" id="tanggal2">
                                <input type="submit" value="Cari">
                            </form>
                            <table class="table table-hover table-striped">
                                    <thead>
                                        <th width="3%">No</th>
                                        <th width="5%">ID</th>
                                        <th width="25%">Nama Pengunjung</th>
                                        <th width="15%"><u>Email</u><br>Telp</th>
                                        <th width="15%">Tanggal</th>
                                        <th width="20%">Produk</th>
                                        <th width="10%">Harga</th>
                                        <th width="5%">Jumlah Peserta</th>
                                        <th width="10%">Total</th>
                                        <th width="20%">Tindakan</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    $subtotal = 0;
                                   if(isset($_GET['tanggal1']) && isset($_GET['tanggal2'])){
                                    $tgl1 = $_GET['tanggal1'];
                                    $tgl2 = $_GET['tanggal2'];
                                    $result = mysqli_query($konek,"SELECT tbl_pemesanan.id_pemesanan,
                                    tbl_pengunjung.nama_pengunjung,
                                    tbl_pengunjung.email_pengunjung,
                                    tbl_pengunjung.no_hp_pengunjung,
                                    tbl_pemesanan.tgl_kegiatan,
                                    tbl_pemesanan.item_pemesanan,
                                    tbl_pemesanan.harga_pemesanan,
                                    tbl_pemesanan.qty_peserta_pemesanan,
                                    tbl_pemesanan.total_pemesanan FROM tbl_pengunjung INNER JOIN tbl_pemesanan ON 
                                    tbl_pengunjung.id_pengunjung=tbl_pemesanan.id_pengunjung WHERE tgl_kegiatan BETWEEN '$tgl1' and '$tgl2' ");

                                    }else{
                                    
                                    $result = mysqli_query($konek, "SELECT tbl_pemesanan.id_pemesanan,
                                    tbl_pengunjung.nama_pengunjung,
                                    tbl_pengunjung.email_pengunjung,
                                    tbl_pengunjung.no_hp_pengunjung,
                                    tbl_pemesanan.tgl_kegiatan,
                                    tbl_pemesanan.item_pemesanan,
                                    tbl_pemesanan.harga_pemesanan,
                                    tbl_pemesanan.qty_peserta_pemesanan,
                                    tbl_pemesanan.total_pemesanan FROM tbl_pengunjung INNER JOIN tbl_pemesanan ON 
                                    tbl_pengunjung.id_pengunjung=tbl_pemesanan.id_pengunjung order by tgl_kegiatan desc");
                                    }
                                    while ($ambilpengunjung       = mysqli_fetch_array($result)) {
                                        $id_pemesan               = $ambilpengunjung["id_pemesanan"];
                                        $nama_pengunjung          = $ambilpengunjung["nama_pengunjung"];
                                        $email_pengunjung         = $ambilpengunjung["email_pengunjung"];
                                        $no_hp_pengunjung         = $ambilpengunjung["no_hp_pengunjung"];
                                        $tgl_kegiatan             = $ambilpengunjung["tgl_kegiatan"];
                                        $item_pemesanan           = $ambilpengunjung["item_pemesanan"];
                                        $harga_pemesanan          = $ambilpengunjung["harga_pemesanan"];
                                        $qty_peserta_pemesanan    = $ambilpengunjung["qty_peserta_pemesanan"];
                                        $total_pemesanan          = $ambilpengunjung["total_pemesanan"];
                                        

                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $id_pemesan; ?></td>
                                            <td><?php echo $nama_pengunjung;?></td>
                                            <td><u><?php echo $email_pengunjung;?></u><br>
                                            <?php echo $no_hp_pengunjung;?></td>
                                            <td><?php echo $tgl_kegiatan;?></td>
                                            <td><?php echo $item_pemesanan;?></td>
                                            <td>Rp<?php echo number_format($harga_pemesanan,0,',','.');?></td>
                                            <td><?php echo $qty_peserta_pemesanan;?></td>
                                            <td>Rp<?php echo number_format($total_pemesanan,0,',','.');?></td>

                                            <td>
                                                <div class="col col-md-5">
                                                <a href="pemesananedit.php?id=<?php echo $ambilpengunjung['id_pemesanan']; ?>" class="btn btn-warning btn-sm">
                                                <i class="fa fa-pencil" style="font-size:17px"></i></a><br><br>
                                                <a href="pemesananhapus.php?id=<?php echo $ambilpengunjung['id_pemesanan']; ?>" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash" style="font-size:17px"></i></a>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                       <?php
                                     
                                      $subtotal += $total_pemesanan;
                                }?>
                                 <tr>
                                     <td colspan="8">TOTAL KESELURUHAN</td>
                                     <td><b>Rp<?php echo number_format($subtotal,0,',','.');?></b></td>
                                    </tr>
                                    </tbody>
                                </table>

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

</html>
