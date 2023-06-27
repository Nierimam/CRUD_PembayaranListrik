<html>
<head>
	<title>Form Input Tagihan</title>
</head>
<body>
<h4 align="center">Form Input Tagihan</h4>
<form name="formtagihan" method="post" action="tabeltagih.php">
<table align="center">
	<tr>
    	<td>Pilih Pelanggan</td>
        <td>     
        <select name="KodeUser">
        	<option value=""></option>
        <?php 
			include "koneksi.php";
			$sql="select * from tbuser where Level='Pelanggan' and NoMeter<>''";
			$query=mysqli_query($koneksi,$sql);
			while($data=mysqli_fetch_array($query))
			{
				echo "<option value='$data[KodeUser]'>$data[NamaLengkap]</option>";	
			}
		?>
        
        </select>
        
        </td>
    </tr>
    <tr>
    	<td></td>
        <td>
        	<input type="submit" value="Tampilkan"/>
            <input type="reset" value="Batal"/>
        </td>
    </tr>
</table>
</form>

<br/>
<a href="halamanutama.php">Kembali</a>



</body>
</html>