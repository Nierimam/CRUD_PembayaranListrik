<?php
	session_start();
	session_destroy();
	
	echo "<script>
		alert ('Keluar Sistem....!');
		location.href='index.php';
	</script>";
?>