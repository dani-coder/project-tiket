<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>
<body>

      <header class="container-fluid text-center">
		<div class="banner-section">
                <img src="cid:logo_minizoo" alt="Logo"  style="float:left;" width="70" height="70">
                <h2 style="margin-bottom: 0;"><u>MINIZOO JogjaExotarium</u></h2>
                <p>Terima kasih sudah melakukan pesanan dan sudah validasi pembayaran, <br>
                berikut Invoice dan E-Tiket Pesanan Anda.</p>
                <div style="clear: both"></div>
             <hr/>
		</div>
	</header><br><br>


    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="cid:logo_minizoo" style="width:50%; max-width:150px;">
                            </td>
                            
                            <td>
                                Invoice #: Minizoo<br>
                                Dibuat pada tanggal : <?php echo date("d-m-Y") ?><br>
                                Dibayar pada tanggal : <?php echo $bayar_tgl; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Minizoo JogjaExotarium Education Park<br>
                                Jl.Magelang Km. 8 Desa Sendangadi, Kec. Mlati,<br>
                                Kab. Sleman, Daerah Istimewa Yogyakarta<br>
                                Kode Pesanan :
                                <?php echo $id_pemesan; ?>
                            </td>
                            
                            <td>
                                Kontak 1 : 0877-3839-4686<br>
                                Kontak 2 : 0857-7562-1229<br>
                                jogjaexotarium23@gmail.com
                            </td>

                            
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Date
                </td>
                
                <td>
                    Check #
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Tanggal Kegiatan
                </td>
                
                <td>
                <?php echo $tgl_kegiatan;?>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Metode Pembayaran
                </td>
                
                <td>
                    Check #
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Transfer
                </td>
                
                <td>
                Rp<?php echo number_format($total_pemesanan,0,',','.');?>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    QTY
                </td>
                
                <td>
                    Check #
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Peserta
                </td>
                
                <td>
                <?php echo $qty_peserta_pemesanan;?>
                </td>
            </tr>
            

            <tr class="heading">
                <td>
                    Item
                </td>
                
                <td>
                    Harga
                </td>
            </tr>
            
    
            <tr class="item">
                <td>
                <?php echo $item_pemesanan;?>
                </td>
                
                <td>
                Rp<?php echo number_format($harga_pemesanan,0,',','.');?>
                </td>
            </tr>

            <tr class="item last">
            <td>    
            
            </td>
            <td>  
            
            </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                  <b> Total: Rp<?php echo number_format($total_pemesanan,0,',','.');?> </b>
                </td>
            </tr>
        </table>
        
    </div><br><br>

        <div style="clear: both"></div>
        <hr/><br><br><br><br>
        <header class="container-fluid text-center">
		<div class="banner-section">
                <img src="cid:ticket1_minizoo" style="width: 700px; height: 200px;">
                
                <img src="cid:ticket2_minizoo" style="width: 700px; height: 200px;">
               
		</div>
	</header>
        

</body>
</html>