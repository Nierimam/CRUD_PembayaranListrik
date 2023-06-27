<html>
<head>
	<title>Detail Konfirmasi Bayar</title>
</head>
<body>
<h4 align="center">Form Detail Konfirmasi Pembayaran</h4>

<?php
	include "koneksi.php";
	$KodeTagihan=$_GET['KodeTagihan'];
	
	$sql="SELECT * from tbpembayaran where KodeTagihan='$KodeTagihan'";
	
	$query=mysqli_query($koneksi,$sql);
	$data=mysqli_fetch_array($query);
		 
?>


<form name="detailkonfirmasibayar" method="post" action="simpandetailpembayaran.php">

<table align="center">
	<input type="hidden" name="KodeTagihan" value="<?php echo $data['KodeTagihan']; ?>"
      <tr>
    	<td valign="top">Bukti Pembayaran</td>
        <td>
        
        
        <img src="bukti/<?php echo $data['UploadBukti']; ?>" height="200px" width="200px"/>
        
        
        </td>
    </tr>
    <tr>
    	<td>Nominal</td>
        <td><input type="text" value="<?php echo $data['Nominal']; ?>"/></td>
    </tr>
    
     <tr>
    	<td>Set Status</td>
        <td>
        	<select name="Status">
            	<option value=""></option>
                <option value="Lunas">Lunas</option>
            </select>
        </td>
    </tr>
   
    <tr>
    	<td></td>
        <td>
        	<input type="submit" value="Set"/>
            <input type="reset" value="Batal"/>
            
        </td>
    </tr>
</table>

</form>

</body>
</html>