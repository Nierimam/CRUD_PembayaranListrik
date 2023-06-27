<?php
	include "koneksi.php";
	
	$KodeTagihan=$_POST['KodeTagihan'];
	$Status=$_POST['Status'];
	
	//update tbpembayaran
	$sql="update tbpembayaran set Status='$Status' where KodeTagihan='$KodeTagihan'";
	mysqli_query($koneksi,$sql);
	
	
	//update tbtagihan 
	$sql1="update tbtagihan set Status='$Status' where KodeTagihan='$KodeTagihan'";
	mysqli_query($koneksi,$sql1);
	
	echo "<script>
			alert ('Data sudah diset');
			location.href='tagihan.php';
		</script>";	
?>