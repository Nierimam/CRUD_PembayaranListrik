<?php
	session_start();
	include "koneksi.php";
	
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	
	$sql="select * from tbuser where Username='$Username' and Password='$Password'";
	$query=mysqli_query($koneksi,$sql);
	$row=mysqli_num_rows($query);
	if ($row>0)
	{
		
		$data=mysqli_fetch_array($query);
		$KodeUser=$data['KodeUser'];
		$NamaLengkap=$data['NamaLengkap'];

		$_SESSION['KodeUser']=$KodeUser;
		$_SESSION['NamaLengkap']=$NamaLengkap;
		
		echo "<script>
			alert ('Login berhasil');
			location.href='halamanutama.php';
		</script>";	
		
	
	}
	else
	{
		echo "<script>
			alert ('Login gagal');
			location.href='index.php';
		</script>";	
	}

?>