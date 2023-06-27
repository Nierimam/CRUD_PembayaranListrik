<?php
	session_start();
	if (isset($_SESSION['NamaLengkap']))
	{
?>
<h4>Data Tabel Tarif</h4>
<table width="100%" align="center" border="1">
	<tr>
    	<th>No</th>
        <th>Daya</th>
        <th>Tarif/Kwh</th>
        <th>Beban</th>
        <th>Aksi</th>
    </tr>
    
    <?php
		include "koneksi.php";
		$sql="select * from tbtarif";
		$query=mysqli_query($koneksi,$sql);
		$no=1;
		while ($data=mysqli_fetch_array($query))
		{
	?>
    
    <tr>
    	<td><?php echo $no; ?></td>
        <td><?php echo $data['Daya']; ?> Watt</td>
        <td><?php echo "Rp.".$data['TarifPerKWH']; ?></td>
        <td><?php echo "Rp.".$data['Beban']; ?></td>
        <td><a href="tarifedit.php?<?php echo "KodeTarif=".$data['KodeTarif']; ?>">Edit</a> | <a href="hapustarif.php?<?php echo "KodeTarif=".$data['KodeTarif']; ?>"><font color="#FF0000">Hapus</font></a></td>
    </tr>
    
    <?php
			$no++;
		}
	?>
    
    
    
</table>

<br/>
<a href="tarif.php">Kembali</a>

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