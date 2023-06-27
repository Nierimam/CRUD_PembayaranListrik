<?php
	include "koneksi.php"; //buka koneksi
	
	$Username=$_POST['Email'];
	
	function buatpwd()
	{
		$kata = "ABCDEFGHIJKLMNPQRSTUVWXYZ123456789";
		$password = substr(str_shuffle($kata),0,6);
		return $password;
	}

	$Password=buatpwd();
	
	
	$NamaLengkap=$_POST['NamaLengkap'];
	$Alamat=$_POST['Alamat'];
	$Telp=$_POST['Telp'];
	$Email=$_POST['Email'];
	$Level="Pelanggan";
	$KodeTarif="";
	
	$sql="insert into tbuser values('','$Username','$Password','$NamaLengkap','$Alamat','$Telp','$Email','$Level','$KodeTarif')";
	
	$query=mysqli_query($koneksi,$sql);
	if ($query)
	{
		echo "Data Sudah Disimpan";
		echo "<br/>";
		echo "
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td>$Username</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td>$Password</td>
				</tr>
			</table>
		";	
		echo "<br/>";
		echo "<a href='index.php'>Login</a>";
		
	}
	else
	{
		echo "Data gagal disimpan";	
	}
	
	
	
	
	

?>