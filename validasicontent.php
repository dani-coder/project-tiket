<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

      <header class="container-fluid text-center">
		<div class="banner-section">
                <img src="cid:logo_minizoo" alt="Logo" style="height: 50px">
                <h2 style="margin-bottom: 0;">MINIZOO JogjaExotarium</h2>
                Terima kasih Anda sudah melakukan Pemesanan, Dimohon untuk melakukan Pembayaran dalam waktu 1x24 jam.
                <div style="clear: both"></div>
             <hr />
		</div>
	</header>

    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">PEMESANAN ANDA</h4>
                            </div>
                              <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th width="5%">Kode Pesanan</th>
                                        <th width="25%">Nama Pengunjung</th>
                                        <th width="15%"><u>Email</u><br>Telp</th>
                                        <th width="10%">Tanggal</th>
                                        <th width="20%">Produk</th>
                                        <th width="10%">Harga</th>
                                        <th width="5%">Jumlah Peserta</th>
                                        <th width="10%">Total</th>
                                    </thead>
                                    <tbody>
                                  
                                        <tr>
                                            <td><?php echo $id_pemesan; ?></td>
                                            <td><?php echo $nama_pengunjung;?></td>
                                            <td><u><?php echo $email_pengunjung;?></u><br>
                                            <?php echo $no_hp_pengunjung;?></td>
                                            <td><?php echo $tgl_kegiatan;?></td>
                                            <td><?php echo $item_pemesanan;?></td>
                                            <td>Rp<?php echo number_format($harga_pemesanan,0,',','.');?></td>
                                            <td><?php echo $qty_peserta_pemesanan;?></td>
                                            <td>Rp<?php echo number_format($total_pemesanan,0,',','.');?></td> 
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                            <div class="header">
                                <h3 class="title">Selahkan Transfer</h3>
                                <h4 class="title">BANK BNI</h4>
                                <P>hanya akan menerima transfer dari Bank BNI <br>
                                Nomor Rekening : 0326.568.211 <br>
                                Atas Nama : Minizoo JogjaExotarium
                                </P><br>

                                <h4 class="title">BANK BCA</h4>
                                <P>hanya akan menerima transfer dari Bank BCA <br>
                                Nomor Rekening : 0926382628 <br>
                                Atas Nama : Minizoo JogjaExotarium
                                </P>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        
        <footer class="main-footer">
		<div class="container footer-top">
      <div class="row">
				<div class="col-xs-12 col-sm-4 contact">
					<H4> Best Regards,</h4>
          <ul>
          <li>Minizoo JogjaExotarium/ </li>
          <li>Education Center/ </li>
          
          <li><a href="tel:087738394686">+62 877-3839-4686</a><br>
							<a href="tel:085775621229"> +62 857-7562-1229</a><br></li>
          <li>Email : jogjaexotarium23@gmail.com</li>
          <li>Jl.Magelang Km. 8 Desa Sendangadi, Kecamatan Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta</li>
          </ul>
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
                var id_pengunjung  = $("#id_pengunjung ").val();
                $.ajax({
                    url: 'validasipengunjung.php',
                    data:"id_pengunjung="+id_pengunjung ,
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