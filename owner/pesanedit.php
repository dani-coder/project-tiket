<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="pemesanan.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA PEMESANAN</h3>
 
	<?php
	include 'pemesanan.php';
	$id = $_GET['id_pemesan'];
	$data = mysqli_query($koneksi,"select * from pemesanan where id='$id_pemesan'");
	while($d = mysqli_fetch_array($pemesanan)){
		?>
		<form method="post" action="pemesanan.php">
			<table>
				<tr>			
					<td>NAMA</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nim" value="<?php echo $d['nim']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>