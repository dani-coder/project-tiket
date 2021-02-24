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

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    Mini Zoo
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
               
                <li>
                    <a href="pemesanan.php">
                        <i class="pe-7s-note2"></i>
                        <p>LAPORAN</p>
                    </a>
                </li>
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
                </div>
                <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" >
                            <i class="fa fa-calendar"></i>
                            <?php
                                $tanggal= mktime(date("m"),date("d"),date("Y"));
                                echo "Tanggal & Pukul, <b>".date("d-M-Y", $tanggal)."</b> ";
                                date_default_timezone_set('Asia/Jakarta');
                                $jam=date("H:i:s");
                                echo "| <b>". $jam." |"."</b>";
                                $a = date ("H");
                                if (($a>=6) && ($a<=11)){
                                echo "<b> Selamat Pagi !!</b>";
                                }
                                else if(($a>11) && ($a<=15))
                                {
                                echo " Selamat Pagi !!";}
                                else if (($a>15) && ($a<=18)){
                                echo " Selamat Siang !!";}
                                else { echo " <b> Selamat Malam </b>";}
                            ?> 
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
                        
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-15">
                        <div class="card">

                            <div class="header">
                                    <p class="category">
                                    Minizoo JogjaExotariom (Sleman Education Center)</p>
                                <hr>
                            </div> 

                            <div class="content" >
                            <div>
                            <img class="img" alt="logo" src="../image/gambar/minizoo.png" style="float:left;" width="210" height="210" />
                            </div>
                                <span class="card-title white-text">
                                    <H2>Selamat datang di Dashboard Minizoo</H2>
                                    <H3>Anda login sebagai <b><?php echo $_SESSION['user_level']; ?></b></H3>
                                    <H3>Anda mempunyai HAK akses laporan pemesanan dan pembayaran.</H3>
                                    </span>
                                        
                                    
                            <hr>
                            <div class="footer">
                                    <p class="category">
                                    Jl. Magelang No.Km.8, RW.12, Mulungan Kulon, Sendangadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55285</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                //menghitung jumlah surat masuk
                $count1 = mysqli_num_rows(mysqli_query($konek, "SELECT * FROM tbl_pemesanan"));

                //menghitung jumlah surat masuk
                $count2 = mysqli_num_rows(mysqli_query($konek, "SELECT * FROM tbl_pengunjung"));

                //menghitung jumlah surat masuk
                $count3 = mysqli_num_rows(mysqli_query($konek, "SELECT * FROM tbl_bayar"));

                //menghitung jumlah pengguna
                $count4 = mysqli_num_rows(mysqli_query($konek, "SELECT * FROM tbl_user"));
            ?>

             <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="content">
                            <span class="card-title white-text"> Jumlah Pesanan</span>
                            <?php echo '<h5 class="white-text link">'.$count1.' Pesanan</h5>'; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="content">
                            <span class="card-title white-text"> Jumlah Pengunjung</span>
                            <?php echo '<h5 class="white-text link">'.$count2.' Pengunjung</h5>'; ?>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="content">
                            <span class="card-title white-text"> Jumlah Pembayaran</span>
                            <?php echo '<h5 class="white-text link">'.$count3.' Bayar</h5>'; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="content">
                            <span class="card-title white-text"> Jumlah Pengguna</span>
                            <?php echo '<h5 class="white-text link">'.$count4.' Pengguna</h5>'; ?>
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

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Selamat datang <b>Di halaman Owner</b> Semoga hari mu menyenangkan."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
