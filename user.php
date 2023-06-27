<html>
<head>
	<title>Halaman Daftar</title>
</head>
<body>

<h4 align="center">Halaman Daftar User/Pelanggan</h4>
<form name="formuser" method="post" action="simpanuser.php">
<table align="center">
	<tr>
    	<td>Username</td>
        <td><input type="text" name="Username" size="20"/></td>
	</tr>
    <tr>
    	<td>Password</td>
        <td><input type="password" name="Password" size="20"/></td>
	</tr>
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
    	<td>Level</td>
        <td>
        	<select name="Level">
            	<option value=""></option>
                <option value="Admin">Admin</option>
                <option value="Pelanggan">Pelanggan</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td></td>
        <td>
        	<input type="submit" value="Simpan"/>
            <input type="reset" value="Batal"/>
            <a href="tabeluser.php">Tampil Data</a>
        </td>
    </tr>
</table>
</form>

<br/>
<a href="halamanutama.php">Kembali</a>


</body>
</html>