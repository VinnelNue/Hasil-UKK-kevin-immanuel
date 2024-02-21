<?php 
include 'lib/koneksi.php';
session_start();
$Userid = $_POST['Userid'];
$Email = $_POST['Email'];
$Namalengkap = $_POST['Namalengkap'];
$Alamat = $_POST['Alamat'];
 
$input    ="INSERT INTO user (Userid,Email,Namalengkap,Alamat) VALUES ('$Userid','$Email','$Namalengkap','$Alamat')";
if (mysqli_query($conn, $input)) {
header("location: Tambah_user.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>