<html>
<head>
	<title>Nota Lunas Listrik</title>
</head>
<body>
	
    
<h4>Nota Lunas Pembayaran Listrik</h4>



<?php
	include "koneksi.php";
	$KodeUser=$_GET['KodeUser'];
	
	$KodeTagihan=$_GET['KodeTagihan'];
	
	
	$sql="select * from tbuser where KodeUser='$KodeUser'";
	$query=mysqli_query($koneksi,$sql);
	$data=mysqli_fetch_array($query);
?>


<table>
	<tr>
    	<td>Nama Pelanggan</td>
        <td>:</td>
        <td><?php echo $data['NamaLengkap']; ?></td>
    </tr>
    <tr>
    	<td>No Meter</td>
        <td>:</td>
        <td><?php echo $data['NoMeter']; ?></td>
    </tr>
</table>
<br/>



<table border="1" width="100%">
	<tr>
    	<th>No</th>
        <th>Tahun</th>
        <th>Bulan</th>
        <th>Pemakaian</th>
        <th>TarifPerKWH</th>
        <th>Beban</th>
        <th>Total Bayar</th>
        <th>Status</th>
    </tr>
    
    <?php
	$sql1="SELECT
  `tbtagihan`.`KodeTarif`, `tbtagihan`.*, `tbtarif`.*
FROM
  `tbtagihan` INNER JOIN
  `tbtarif` ON `tbtagihan`.`KodeTarif` = `tbtarif`.`KodeTarif` ";
  $sql1.="where tbtagihan.KodeTagihan='$KodeTagihan'";
	$query1=mysqli_query($koneksi,$sql1);
	$no=1;
	while ($data1=mysqli_fetch_array($query1))
	{
	
?>
    <tr>
    	<td><?php echo $no; ?></td>
        <td><?php echo $data1['TahunTagih']; ?></td>
        <td><?php echo $data1['BulanTagih']; ?></td>
        <td><?php echo $data1['Pemakaian']; ?></td>
        <td><?php echo "Rp. ".number_format($data1['TarifPerKWH'],0,',','.');?></td>
        <td><?php echo "Rp. ".number_format($data1['Beban'],0,',','.');?></td>
        <td><?php echo "Rp. ".number_format($data1['TotalBayar'],0,',','.');?></td>
        <td><?php echo $data1['Status']; ?></td>
       
    </tr>
    
    <?php
		$no++;
	}
	?>
</table>

<p>
Terima kasih atas pembayaran anda.
<br/>
<br/>
(Admin)
</p>
    
    
</body>
</html>