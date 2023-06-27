<?php
	include "koneksi.php";
	
	$NoMeter=$_POST['NoMeter'];
	$JenisPembayaran=$_POST['JenisPembayaran'];
	$NoRek=$_POST['NoRek'];
	$AtasNama=$_POST['AtasNama'];
	$TglTransfer=$_POST['TglTransfer'];
	$Nominal=$_POST['Nominal'];
	$Status="Terkirim";
	$KodeTagihan=$_POST['KodeTagihan'];
	$UploadBukti=$_POST['UploadBukti'];
	
	$sql="insert into tbpembayaran values('','$NoMeter','$JenisPembayaran','$NoRek','$AtasNama','$TglTransfer','$Nominal','$Status','$KodeTagihan','$UploadBukti')";
	
	$query=mysqli_query($koneksi,$sql);
	if ($query)
	{
		echo "<script>
			alert ('Data sudah terkirim');
			location.href='tagihan.php';
		</script>";	
	}
	else
	{
		echo "data gagal terkirim";	
	}
?>