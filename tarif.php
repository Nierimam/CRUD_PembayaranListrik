<html>
<head>
	<title>Form Input Tarif</title>
</head>
<body>

<h4 align="center">Form Daftar Tarif</h4>
<form name="formtarif" method="post" action="simpantarif.php">
<table align="center">
	<tr>
    	<td>Daya</td>
        <td><input type="text" name="Daya" size="20"/></td>
    </tr>
    <tr>
    	<td>Tarif Per KWH (Rp.)</td>
        <td><input type="text" name="TarifPerKWH" size="20"/></td>
    </tr>
    <tr>
    	<td>Beban (Rp.)</td>
        <td><input type="text" name="Beban"/></td>
    </tr>
    <tr>
    	<td></td>
        <td>
        	<input type="submit" value="Simpan"/>
            <input type="reset" value="Batal"/>
            <a href="tabeltarif.php">Tampil Tabel</a>
            
        </td>
    </tr>
</table>
</form>

<br/>
<a href="halamanutama.php">Kembali</a>



</body>
</html>