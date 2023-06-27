<?php
	include "koneksi.php"; //buka koneksi
	$KodeTarif="";
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$NamaLengkap=$_POST['NamaLengkap'];
	$Alamat=$_POST['Alamat'];
	$Telp=$_POST['Telp'];
	$Email=$_POST['Email'];
	$Level=$_POST['Level'];
	
	
	$sql="insert into tbuser values('','$Username','$Password','$NamaLengkap','$Alamat','$Telp','$Email','$Level','$KodeTarif')";
	
	$query=mysqli_query($koneksi,$sql);
	if ($query)
	{
		echo "<script>
			alert ('Data sudah disimpan');
			location.href='tabeluser.php'
		</script>";
		
	}
	else
	{
		echo "Data gagal disimpan";	
	}
	
	
	
	
	

?>