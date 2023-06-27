<?php
	include "koneksi.php"; //buka koneksi
	
	$Daya=$_POST['Daya'];
	$TarifPerKWH=$_POST['TarifPerKWH'];
	$Beban=$_POST['Beban'];

	
	$sql="insert into tbtarif values('','$Daya','$TarifPerKWH','$Beban')";
	
	$query=mysqli_query($koneksi,$sql);
	if ($query)
	{
		
		echo "<script>
			alert ('Data sudah disimpan');
			location.href='tabeltarif.php';
		</script>";
		
	}
	else
	{
		echo "<script>
			alert ('Data gagal disimpan');
		</script>";
	}
	
	
	
	
	

?>