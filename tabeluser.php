<?php
	session_start();
	if (isset($_SESSION['NamaLengkap']))
	{
?>
<h4>Data Tabel User</h4>
<table width="100%" align="center" border="1">
	<tr>
    	<th>No</th>
        <th>No Meter</th>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th>Level</th>
        <th>Daya</th>
        <th>Aksi</th>
    </tr>
    
    <?php
		include "koneksi.php";
		$sql="select * from tbuser where Level<>'Admin'";
		$query=mysqli_query($koneksi,$sql);
		$no=1;
		while ($data=mysqli_fetch_array($query))
		{
	?>
    
    <tr>
    	<td><?php echo $no; ?></td>
        <td><?php echo $data['NoMeter']; ?></td>
        <td><?php echo $data['NamaLengkap']; ?></td>
        <td><?php echo $data['Alamat']; ?></td>
        <td><?php echo $data['Telp']; ?></td>
        <td><?php echo $data['Level']; ?></td>
        <td>
		
		<?php 
		
		
		$KodeTarif=$data['KodeTarif']; 
		$sql1="select Daya from tbtarif where KodeTarif='$KodeTarif'";
		$query1=mysqli_query($koneksi,$sql1);
		$data1=mysqli_fetch_array($query1);
		
		echo $data1['Daya'];
		
		
		?>
        
        
        </td>
        
        <td><a href="">Edit</a> | <a href=""><font color="#FF0000">Hapus</font></a></td>
    </tr>
    
    <?php
			$no++;
		}
	?>
    
    
    
</table>

<br/>
<a href="user.php">Kembali</a>

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