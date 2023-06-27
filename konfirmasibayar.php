<html>
<head>
	<title>Konfirmasi Pembarayan</title>
</head>
<body>
<h4 align="center">Form Konfirmasi Pembayaran</h4>


<?php
	include "koneksi.php";
	$KodeTagihan=$_GET['KodeTagihan'];
	
	$sql="SELECT
		  `tbtagihan`.`KodeUser`, `tbuser`.`NoMeter`, `tbtagihan`.*
		FROM
		  `tbuser` INNER JOIN
		  `tbtagihan` ON `tbtagihan`.`KodeUser` = `tbuser`.`KodeUser` where tbtagihan.KodeTagihan='$KodeTagihan' ";
    
   // echo $sql;
    
	$query=mysqli_query($koneksi,$sql);
	$data=mysqli_fetch_array($query);
		 
?>


<form name="konfirmasibayar" method="post" action="simpankonfirmasibayar.php">

<table align="center">
	<input type="hidden" name="KodeTagihan" value="<?php echo $data['KodeTagihan']; ?>"/>
	<tr>
    	<td>No Meter</td>
        <td><input type="text" name="NoMeter" size="20" value="<?php echo $data['NoMeter']; ?>"/></td>
	</tr>
    <tr>
    	<td>Bulan/Tahun Tagih</td>
        <td><input type="text" size="20" value="<?php
	echo $data['BulanTagih']."/".$data['TahunTagih'];	
		
		
?>" /></td>
	</tr>
    <tr>
    	<td>Jenis Pembayaran</td>
        <td>
        <select name="JenisPembayaran">
        	<option value=""></option>
            <option value="Transfer">Transfer</option>
            <option value="Manual">Manual</option>
        </select>
        
        </td>
	</tr>
    <tr>
    	<td>No Rek.</td>
        <td><input type="text" name="NoRek" size="40"/></td>
    </tr>
    <tr>
    	<td>Atas Nama</td>
        <td><input type="text" name="AtasNama" size="40"/></td>
    </tr>
    <tr>
    	<td> Tgl Transfer</td>
        <td><input type="date" name="TglTransfer"/></td>
    </tr>
     <tr>
    	<td>Nominal</td>
        <td><input type="text" name="Nominal" value="<?php echo $data['TotalBayar']; ?>" /></td>
    </tr>
    <tr>
    	<td>Upload Bukti</td>
        <td>
        	<input type="file" name="UploadBukti"/>
        </td>
    </tr>
    <tr>
    	<td></td>
        <td>
        	<input type="submit" value="Kirim"/>
            <input type="reset" value="Batal"/>
            
        </td>
    </tr>
</table>

</form>

</body>
</html>