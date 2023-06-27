<html>
<head>
	<title>Form Edit Tarif</title>
</head>
<body>

<?php
	include "koneksi.php";
	$KodeTarif=$_GET['KodeTarif'];
	$sql="select * from tbtarif where KodeTarif='$KodeTarif'";
	$query=mysqli_query($koneksi,$sql);
	$data=mysqli_fetch_array($query);
?>


<h4 align="center">Form Edit Daftar Tarif</h4>
<form name="formtarif" method="post" action="edittarif.php">
<table align="center">
	
    <input type="hidden" name="KodeTarif" value="<?php echo $data['KodeTarif']; ?>"/>

	<tr>
    	<td>Daya</td>
        <td><input type="text" name="Daya" size="20" value="<?php echo $data['Daya']; ?>"/></td>
    </tr>
    <tr>
    	<td>Tarif Per KWH (Rp.)</td>
        <td><input type="text" name="TarifPerKWH" size="20" value="<?php echo $data['TarifPerKWH']; ?>"/></td>
    </tr>
    <tr>
    	<td>Beban (Rp.)</td>
        <td><input type="text" name="Beban" value="<?php echo $data['Beban']; ?>"/></td>
    </tr>
    <tr>
    	<td></td>
        <td>
        	<input type="submit" value="Edit"/>
            <input type="reset" value="Batal"/>
            <a href="tabeltarif.php">Tampil Tabel</a>
            
        </td>
    </tr>
</table>
</form>

<br/>
<a href="tabeltarif.php">Kembali</a>



</body>
</html>