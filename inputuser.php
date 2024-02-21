<?php
session_start();
include 'lib/koneksi.php';

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>
    <form action="inputuser_proses.php" method="POST">
        <fieldset>
        <legend>User</legend>
        <p>
            <label>ID user</label>
            <input type="text" name="Userid" placeholder="ID USer" />
        </p>
        <p>
            <label>Email:</label>
            <input type="text" name="Email" placeholder="Email..." />
        </p>
        <p>
            <label>Nama Lengkap:</label>
            <input type="text" name="Namalengkap" placeholder="Nama Lengkap..." />
        </p>
        <p>
            <label>Alamat:</label>
            <input type="text" name="Alamat" placeholder="Alamat..." />
        </p>
        <p>
            <label><input type="checkbox" name="remember" value="remember" /> Remember me</label>
        </p>
        <p>
            <input type="submit" name="submit" value="Insert" />
        </p>
        </fieldset>
    </form>
</body>
</html>