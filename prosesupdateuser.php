<?php
session_start();
include 'lib/koneksi.php';

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
$Userid = $_POST['Userid'];
$Email = $_POST['Email'];
$Namalengkap = $_POST['Namalengkap'];
$Alamat = $_POST['Alamat'];

$query = "UPDATE user SET Userid = '$Userid', Email = '$Email', Namalengkap = '$Namalengkap', Alamat ='$Alamat' ";

if($conn->query($query)) {
    header("location: Tambah_data.php");
} else {
    echo "Data Gagal Diupate!";
}

?>