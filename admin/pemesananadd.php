<?php
session_start();
include "cek_login.php";
?>

<?php




$query = mysqli_query($konek, "SELECT max(id_pengunjung) as kodeTerbesar FROM tbl_pengunjung");
$data = mysqli_fetch_array($query);
$kodepengunjung = $data['kodeTerbesar'];
$urutan = (int) substr($kodepengunjung, 3, 3);
$urutan++;
$huruf = "PGN";
$kodepengunjung = $huruf . sprintf("%03s", $urutan);

$query2 = mysqli_query($konek, "SELECT max(id_pemesanan) as kodeTerbesar2 FROM tbl_pemesanan");
$data2 = mysqli_fetch_array($query2);
$kodepemesanan = $data2['kodeTerbesar2'];
$urutan2 = (int) substr($kodepemesanan, 3, 3);
$urutan2++;
$huruf2 = "PSN";
$kodepemesanan = $huruf2 . sprintf("%03s", $urutan2);
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
                    <form action="pemesananaddproses.php" method="post">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">FORM TAMBAH PESANAN</h4>
                            <div class="content table-responsive table-full-width">
                                    
                            <div class="form-group row">
                                    <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <input type="hidden" name="id_pemesanan" class="form-control" value="<?php echo $kodepemesanan ?>" readonly>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                            <div class="col-md-10">
                                            <label>Nama Pengunjung</label>
                                            <select class="form-control" name="id_pengunjung">
                                            <option value ="">Silahkan pilih</option>  
                                            <?php
                                            $barang3=mysqli_query($konek, "SELECT * FROM tbl_pengunjung");
                                            while($row_brg3= mysqli_fetch_array($barang3)) {
                                              ?>
                                              <option value="<?php echo $row_brg3["id_pengunjung"]?>"><?php echo $row_brg3['nama_pengunjung']?></option>
		                                          <?php } ?>
                                            </select>
                                                </div>
                                       </div> 
                                      </div>

                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                            <div class="col-md-5">
                                                <input type="date" name="tgl_kegiatan" class="form-control">
                                        </div>
                                        </div>
                                    </div>


                                    <?php

                                    $barang=mysqli_query($konek, "SELECT * FROM tbl_wahana");
                                    $jsArray = "var wahana_harga = new Array();\n"; 

                                    ?>
                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                            <div class="col-md-10">
                                            <label>PRODUK WAHANA PER ITEM</label>
                                            <select class="form-control" name="item_pemesanan" id="wahana_nama"  onchange="changeValue(this.value)" >
                                            <option value ="">Silahkan pilih</option>  
                                            <?php
                                                 if(mysqli_num_rows($barang)) {
                                                  ?>
                                              <?php while($row_brg= mysqli_fetch_array($barang)) {
                                              
                                              ?>
                                              <option value="<?php echo $row_brg["wahana_nama"]?>"><?php echo $row_brg['wahana_nama']?> Rp.<?php echo $row_brg['wahana_harga']?></option>
                                              <?php $jsArray .= "wahana_harga['" . $row_brg['wahana_nama'] . "'] = {wahana_harga:'" . addslashes($row_brg['wahana_harga']) . "'};\n"; } ?>
		                                          <?php } ?>
                                            </select>
                                                </div>
                                       </div> 
                                      </div>
                                    
                                    

                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <label>Harga</label>
                                                <input type="text" class="form-control" name="harga_pemesanan" id="wahana_harga" value="0" onkeyup="sum();" readonly="readonly">
                                        </div>
                                        </div>
                                    </div>
                                               
                                   
                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <label>Jumlah Peserta</label>
                                                <input type="number" name="qty_peserta_pemesanan" id="qty_peserta_pemesanan" class="form-control" onkeyup="sum();" placeholder="12345">
                                                <p><small><i>* : Masukkan jumlah angka berdasarkan yang ada inginkan exp 12345</i></small></p>
                                        </div>
                                        </div>
                                    </div>
                                        
                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <label>Total pesanan</label>
                                                <input type="number" name="total_pemesanan" id="total_pemesanan" class="form-control" placeholder="50000" value="<?php echo $total ?>" readonly="readonly">
                                                <p><small><i>* : Total harga paket berdasarkan jumlah peserta</i></small></p>
                                        </div>
                                        </div>
                                    </div>

                                  
                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                            <div class="col-md-10">
                                            <label>Nama Petugas</label>
                                            <select class="form-control" name="nama_user" id="nama_user" >
                                            <option value ="">Silahkan pilih</option>  
                                            <?php
                                            $barang2=mysqli_query($konek, "SELECT * FROM tbl_user");
                                            while($row_brg2= mysqli_fetch_array($barang2)) {
                                              ?>
                                              <option value="<?php echo $row_brg2["user_nama"]?>"><?php echo $row_brg2['user_nama']?> = <?php echo $row_brg2['user_level']?></option>
		                                          <?php } ?>
                                            </select>
                                                </div>
                                       </div> 
                                      </div>
                                    
                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                            <div class="col-md-10">
                                            <a class="btn btn-danger btn-fill z-bottom-0 card-position" href="pemesanan.php">Kembali</a> 
                                            <button type="submit" class="btn btn-info btn-fill z-bottom-0 card-position">Simpan</button>    
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



<script type="text/javascript">
    <?php echo $jsArray; ?>
    function changeValue(id) {
      document.getElementById("wahana_harga").value = wahana_harga[id].wahana_harga;
    };
    </script> <!-- Tampilkan Harga berdasarkan kode barang -->

<!-- TOTAL-->
<script>
    
function sum() {
      var txtFirstNumberValue = document.getElementById('wahana_harga').value;
      var txtSecondNumberValue = document.getElementById('qty_peserta_pemesanan').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('total_pemesanan').value = result;
      }
}
</script>




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
