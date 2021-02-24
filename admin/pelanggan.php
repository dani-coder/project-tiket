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
                <li class="active">
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
                    <a class="navbar-brand" href="pelanggan.php">PELANGGAN</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                           <a>
                                <form action="pelanggan.php" method="get">
                                
                                <i class="fa fa-search"></i>
                                <input type="text" name="cari" placeholder="isi nama" >
                                <input type="submit" value="Cari">
                                </form>
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
                                <li><a href="user_akun.php">Profile</a></li>
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
                        <div class="card">
                            <div class="header">
                                <h4 class="title">LIST DATA PENGUNJUNG</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                             <?php 
                                if(isset($_GET['cari'])){
                                    $cari = $_GET['cari'];
                                    echo "<b>Hasil pencarian nama : ".$cari."</b>";
                                }
                                ?>
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th width="3%">No.</th>
                                        <th width="5%">ID</th>
                                        <th width="30%">Nama Pengunjung</th>
                                        <th width="30%">Email</th>
                                        <th width="15%">Nomor Handphone</th>
                                        <th width="20%">Alamat</th>
                                        <th width="10%">Tindakan</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if(isset($_GET['cari'])){
                                        $cari = $_GET['cari'];
                                        $result =mysqli_query($konek, "SELECT * from tbl_pengunjung where nama_pengunjung like '%".$cari."%'");	
                                        }else{
                                        $result = mysqli_query($konek, "SELECT*FROM tbl_pengunjung");
                                        }
                                        $no = 1;
                                        while ($ambilpengunjung = mysqli_fetch_array($result)) {
                                                $id_pengunjung      = $ambilpengunjung["id_pengunjung"];
                                                $nama_pengunjung    = $ambilpengunjung["nama_pengunjung"];
                                                $email_pengunjung   = $ambilpengunjung["email_pengunjung"];
                                                $no_hp_pengunjung   = $ambilpengunjung["no_hp_pengunjung"];
                                                $alamat_pengunjung  = $ambilpengunjung["alamat_pengunjung"];
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $id_pengunjung; ?></td>
                                            <td><?php echo $nama_pengunjung;?></td>
                                            <td><?php echo $email_pengunjung;?></td>
                                            <td><?php echo $no_hp_pengunjung;?></td>
                                            <td><?php echo $alamat_pengunjung;?></td>
                                            <td>
                                            
                                                <div class="form-group row">
                                                <div class="col col-md-5">
                                                <a href="pelangganhapus.php?id=<?php echo $ambilpengunjung['id_pengunjung']; ?>"><span class="card_detail_kategori">
                                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash" style="font-size:17px"></i></button></span></a>
                                                </div>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                       <?php
                                }?>
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
