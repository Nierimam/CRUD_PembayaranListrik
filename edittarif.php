<?php
	include "koneksi.php"; //buka koneksi
	
	$KodeTarif=$_POST['KodeTarif'];
	$Daya=$_POST['Daya'];
	$TarifPerKWH=$_POST['TarifPerKWH'];
	$Beban=$_POST['Beban'];

	
	$sql="update tbtarif set Daya='$Daya',TarifPerKWH='$TarifPerKWH',Beban='$Beban' where KodeTarif='$KodeTarif'";
	
	$query=mysqli_query($koneksi,$sql);
	if ($query)
	{
		
		echo "<script>
			alert ('Data sudah diedit');
			location.href='tabeltarif.php';
		</script>";
		
	}
	else
	{
		echo "<script>
			alert ('Data gagal diedit');
		</script>";
	}
	
	
	
	
	

?>