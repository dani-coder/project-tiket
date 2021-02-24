<?php
session_start();
include "cek_login.php";
?>

<?php
$query = mysqli_query($konek, "SELECT max(id_outbond) as kodeTerbesar FROM tbl_outbond");
$data = mysqli_fetch_array($query);
$kodeoutbond = $data['kodeTerbesar'];

$urutan = (int) substr($kodeoutbond, 3, 3);

$urutan++;

$huruf = "OTB";
$kodeoutbond = $huruf . sprintf("%03s", $urutan);
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
                        <p>Pemesanan</p>
                    </a>
                </li>
                <li>
                    <a href="produk.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Produk Wahana</p>
                    </a>
                </li>
                <li>
                <li class="active">
                    <a href="produk2.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Produk Outbound</p>
                    </a>
                </li>
                <li>
                <li>
                    <a href="produk3.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Produk Fieldtrip</p>
                    </a>
                </li>
                <li>
                <li>
                    <a href="jadwal.php">
                        <i class="pe-7s-science"></i>
                        <p>Jadwal</p>
                    </a>
                </li>
               <li>
                    <a href="pembayaran.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Pembayaran</p>
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
                    <a class="navbar-brand" href="#">PRODUK OUTBOND</a>
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
                    <form action="produkeditproses2.php" method="post" name="form1">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">FORM EDIT PRODUK OUTBOND</h4>
                            <div class="content table-responsive table-full-width">
                                <?php
                                 $outbond_id = $_GET["id"];
                                $result = mysqli_query($konek, "SELECT*FROM tbl_outbond where id_outbond = '$outbond_id' ");
                                while ($ambiloutbond = mysqli_fetch_array($result)) {
                                    $id_outbond = $ambiloutbond['id_outbond'];
                                    $outbond_nama = $ambiloutbond['outbond_nama'];
                                    $outbond_harga = $ambiloutbond['outbond_harga'];
                                ?>
                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <input type="text" name="id_outbond" class="form-control" value="<?php echo $id_outbond ?>" readonly>
                                        </div>
                                        </div>
                                    </div>
                                    

                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <label>Nama Outbond</label>
                                                <input type="text" name="outbond_nama" class="form-control" placeholder="" value=" <?php echo $outbond_nama ?>">     
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <label>Harga</label>
                                                <input type="number" name="outbond_harga" class="form-control" placeholder="Rp." value="<?php echo $outbond_harga ?>">
                                                <p><small><i>* : Masukan inputan hanya angka exp (50000)</i></small></p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                            <div class="col-md-10">
                                            <a class="btn btn-danger btn-fill z-bottom-0 card-position" href="produk2.php">Kembali</a> 
                                            <button type="submit" class="btn btn-info btn-fill z-bottom-0 card-position">Save</button>   
                                        </div>
                                        </div>
                                    </div>

                                <?php }
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

</html>
