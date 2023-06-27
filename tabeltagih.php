<h4>Daftar Tagihan Pelanggan</h4>
<br/>
<?php
	include "koneksi.php";
	$KodeUser=$_POST['KodeUser'];
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
        <th>Aksi</th>
    </tr>
    
    <?php
	$sql1="SELECT
  `tbtagihan`.`KodeTarif`, `tbtagihan`.*, `tbtarif`.*
FROM
  `tbtagihan` INNER JOIN
  `tbtarif` ON `tbtagihan`.`KodeTarif` = `tbtarif`.`KodeTarif` ";
  $sql1.="where tbtagihan.KodeUser='$KodeUser'";
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
        <td>
        
        <?php
			if ($data1['Status']=="Lunas")
			{
		?>
        
        <a href="cetak_lunas.php?<?php echo "KodeUser=".$data1['KodeUser'];?>&<?php echo "KodeTagihan=".$data1['KodeTagihan'];  ?>">Cetak</a>
        
        <?php
			}
			else
			{
		?>
        
        	<a href="cetak_belumbayar.php?<?php echo "KodeUser=".$data1['KodeUser'];?>&<?php echo "KodeTagihan=".$data1['KodeTagihan'];  ?>">Cetak</a> | <a href="konfirmasibayar.php?<?php echo "KodeTagihan=".$data1['KodeTagihan'];  ?>">Konfirmasi</a> | <a href="detailkonfirmasibayar.php?<?php echo "KodeTagihan=".$data1['KodeTagihan'];  ?>">Detail</a>
            
        <?php 
			}
		?>
        
        
        
        </td>
        
    </tr>
    
    <?php
		$no++;
	}
	?>
</table>

<hr/>

<form name="formtagih" method="post" action="simpantagihan.php">
<table>
	<input type="hidden" name="KodeUser" value="<?php echo $KodeUser; ?>"/>
    
    <input type="hidden" name="KodeTarif" value="<?php echo $data['KodeTarif']; ?>"/>
    
	<tr>
    	<td>Bulan Tagih</td>
        <td>:</td>
        <td>
        	<select name="BulanTagih">
            	<option value="">==PILIH BULAN==</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">Nopember</option>
                <option value="12">Desember</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td>Tahun Tagih</td>
        <td>:</td>
        <td><input type="text" name="TahunTagih" value="<?php echo date('Y'); ?>" size="5"/></td>
    </tr>
    <tr>
    	<td>Jumlah Pemakaian</td>
        <td>:</td>
        <td><input type="text" name="Pemakaian" size="5"/></td>
    </tr>
    <tr>
    	<td></td>
        <td></td>
        <td>
        	<input type="submit" value="Simpan"/>
            <input type="reset" value="Batal"/>
        </td>
    </tr>
</table>
</form>
