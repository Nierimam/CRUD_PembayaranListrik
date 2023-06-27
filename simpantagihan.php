<?php
	include "koneksi.php";
	
	
	function buatno()
	{
		$Tahun=date('Y');
		$Bulan=date('m');
		
		$kata = "ABCDEFGHIJKLMNPQRSTUVWXYZ123456789";
		$kode = substr(str_shuffle($kata),0,6);
		
		$KodeAcak=$Tahun.$Bulan.$kode;
		return $KodeAcak;
	}
	
	
	$NoTagihan=buatno();
	
	$KodeUser=$_POST['KodeUser'];
	$KodeTarif=$_POST['KodeTarif'];
	$BulanTagih=$_POST['BulanTagih'];
	$TahunTagih=$_POST['TahunTagih'];
	$Pemakaian=$_POST['Pemakaian'];
	
	
	
	function caritarif($KodeTarif,$Pemakaian)
	{
		include "koneksi.php";
		
		$sql="select TarifPerKWH,Beban from tbtarif where KodeTarif='$KodeTarif'";
		$query=mysqli_query($koneksi,$sql);	
		$data=mysqli_fetch_array($query);
		
		$TarifPerKWH=$data['TarifPerKWH'];
		$Beban=$data['Beban'];
		
		$TotalBayar=($Pemakaian * $TarifPerKWH) + $Beban;
		return $TotalBayar;
		
	}
	
	
	$TotalBayar=caritarif($KodeTarif,$Pemakaian);
	$Status="Belum";
	
	$sql="insert into tbtagihan values('','$NoTagihan','$KodeUser','$KodeTarif','$BulanTagih','$TahunTagih','$Pemakaian','$TotalBayar','$Status');";
	
	$query=mysqli_query($koneksi,$sql);
	if ($query)
	{
		echo "<script>
		alert ('Data tagihan disimpan');
		location.href='tagihan.php';
		</script>";	
	}
	else
	{
		echo "data gagal disimpan";	
	}

?>