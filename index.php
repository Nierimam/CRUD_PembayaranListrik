<html>

<head>
    <title>Halaman Login</title>
</head>

<body>

    <h4 align="center">Halaman Login</h4>
    <form name="formlogin" method="post" action="proseslogin.php">
        <table align="center">
            <tr>
                <td>Username</td>
                <td><input type="text" name="Username" /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="Password" /></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Login" />
                    <input type="reset" value="Batal" />
                    <a href="daftar.php">Daftar</a>
                </td>
            </tr>
        </table>
    </form>



</body>

</html>