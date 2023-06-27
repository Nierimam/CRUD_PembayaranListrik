<?php
	include "koneksi.php";
	$KodeTarif=$_GET['KodeTarif'];
	
	$sql="delete from tbtarif where KodeTarif='$KodeTarif'";
	mysqli_query($koneksi,$sql);
	
	echo "<script>
		alert ('Data sudah dihapus');
		location.href='tabeltarif.php';
	</script>";

?>