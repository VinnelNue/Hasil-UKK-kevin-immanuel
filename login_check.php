<?php
session_start();
include 'lib/koneksi.php';

$username = $_POST['username'];
$passwd = md5($_POST['passwd']);

$login = mysqli_query($conn, "SELECT * FROM login_petugas WHERE username='$username' AND passwd='$passwd'"); 
$cek = mysqli_num_rows($login);

if($cek > 0 ){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location: Dashboard.php");
} else{
    header("Location : login.php?pesan=gagal");
}
?> 