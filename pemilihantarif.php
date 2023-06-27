<html>
<head>
	<title>Form Pemilihan Tarif</title>
</head>
<body>

<h4 align="center">Form Daftar Tarif</h4>
<form name="formpilihtarif" method="post" action="simpanpemilihantarif.php">
<table align="center">
	<tr>
    	<td>Pilih Pelanggan</td>
        <td>
        
        <select name="KodeUser">
        	<option value=""></option>
        <?php 
			include "koneksi.php";
			$sql="select * from tbuser where Level='Pelanggan'";
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
    	<td>Masukkan No Meter</td>
        <td><input type="text" name="NoMeter"/></td>
    </tr>
    <tr>
    	<td>Pilih Daya</td>
        <td>
        
         <select name="KodeTarif">
        	<option value=""></option>
        <?php 
			include "koneksi.php";
			$sql="select * from tbtarif";
			$query=mysqli_query($koneksi,$sql);
			while($data=mysqli_fetch_array($query))
			{
				echo "<option value='$data[KodeTarif]'>$data[Daya]</option>";	
			}
		?>
        
        </select>
        Watt/
        <a href="">Detail</a>
        
        </td>
    </tr>
    
    <tr>
    	<td></td>
        <td>
        	<input type="submit" value="Simpan"/>
            <input type="reset" value="Batal"/>
            
        </td>
    </tr>
</table>
</form>

<br/>
<a href="halamanutama.php">Kembali</a>



</body>
</html>