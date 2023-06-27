<?php
	include "koneksi.php";
	
	$KodeUser=$_POST['KodeUser'];
	$NoMeter=$_POST['NoMeter'];
	$KodeTarif=$_POST['KodeTarif'];
	
	$sql="update tbuser set KodeTarif='$KodeTarif',NoMeter='$NoMeter' where KodeUser='$KodeUser'";
	mysqli_query($koneksi,$sql);
	echo "<script>
		alert ('Pemilihan Daya Berhasil...');
		location.href='tabeluser.php';
	</script>";
?>