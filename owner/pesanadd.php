<html>
<head>
    <title>Add Pesan</title>
</head>

<body>
    <a href="pemesanan.php">Go to Home</a>
    <br/><br/>

    <form action="prosesadd.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Instansi/Lembaga</td>
                <td><input type="text" name="nama_instansi"></td>
            </tr>
            <tr> 
                <td>Nomor Hp</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr> 
                <td>Alamat Instansi</td>
                <td><input type="text" name="alamat_instansi"></td>
            </tr>
            <tr> 
                <td>Tanggal Kegiatan</td>
                <td><input type="date" name="tgl_kegiatan" id="datep"></td>
            </tr>
            <tr> 
                <td>ID Pemesanan Pilprod</td>
                <td><input type="text" name="pmsn_id_pilprod"></td>
            </tr> 
            <tr>
                <td>Pilih Paket</td>
                <td>
                    <select name="pilih_paket">Pilih Fieldtrip
                        <option value="-">-</option>
                        <option value="Fieldtrip A (Paud & TK)">Fieldtrip A (Paud & TK)</option>
                        <option value="Fieldtrip B (SD & SMP)">Fieldtrip B (SD & SMP)</option>
                        <option value="Fieldtrip C (SMA, Mahasiswa & Dewasa)">Fieldtrip C (SMA, Mahasiswa & Dewasa)</option>
                        <option value="Outbound A (Paud & TK)">Outbound A (Paud & TK)</option>
                        <option value="Outbound B (SD & SMP">Outbound B (SD & SMP</option>
                        <option value="Outbound C (SMA, Mahasiswa & Dewasa">Outbound C (SMA, Mahasiswa & Dewasa</option>
                        <option value="Wahana Tunggang Kuda">Wahana Tunggang Kuda</option>
                        <option value="Wahana Wahana Air">Wahana Wahana Air</option>
                        <option value="Wahana 1">Wahana 1</option>
                        <option value="Wahana 2">Wahana 2</option>
                        <option value="Wahana 3">Wahana 3</option>
                        <option value="Wahana 4">Wahana 4</option>
                        <option value="Wahana 5">Wahana 5</option>
                        <option value="Wahana 6">Wahana 6</option>
                        <option value="Wahana 7">Wahana 7</option>
                        <option value="Wahana 8">Wahana 8</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah Peserta</td>
                <td><input type="text" name="jml_peserta"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="Submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>