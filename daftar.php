<html>
<head>
	<title>Halaman Daftar</title>
</head>
<body>

<h4 align="center">Halaman Daftar Pelanggan</h4>
<form name="formdaftar" method="post" action="simpandaftar.php">
<table align="center">
	<tr>
    	<td>Nama Lengkap</td>
        <td><input type="text" name="NamaLengkap" size="40"/></td>
    </tr>
    <tr>
    	<td>Alamat</td>
        <td><input type="text" name="Alamat" size="40"/></td>
    </tr>
    <tr>
    	<td>Telp</td>
        <td><input type="text" name="Telp"/></td>
    </tr>
     <tr>
    	<td>Email</td>
        <td><input type="text" name="Email"/></td>
    </tr>
    <tr>
    	<td></td>
        <td>
        	<input type="submit" value="Daftar"/>
            <input type="reset" value="Batal"/>
            <a href="index.php">Login</a>
        </td>
    </tr>
</table>
</form>



</body>
</html>