<?php
	session_start();
	if (isset($_SESSION['NamaLengkap']))
	{
?>

<html>
<head>
	<title>Halaman Utama</title>
</head>
<body>

<?php 
	$NamaLengkap=$_SESSION['NamaLengkap'];
	echo "Selamat Datang $NamaLengkap";
?>
<br/>
<ul>
	<li><a href="user.php">1. Data User</a></li>
    <li><a href="tarif.php">2. Data Tarif</a></li>
    
    <li><a href="pemilihantarif.php">3. Pemilihan Tarif</a></li>
    <li><a href="tagihan.php">4. Proses Tagihan</a></li>
    <li>5. Laporan</li>
    <li><a href="logout.php">7. Logout</a></li>
</ul>

</body>
</html>

<?php
	}
	else
	{
		echo "<script>
		alert ('Maaf anda tidak bisa akses halaman ini');
		location.href='index.php';
			
		</script>";	
	}
?>