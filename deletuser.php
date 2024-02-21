<?
include 'lib/konekis.php';
session_start();
if(isset($_GET['delete'])){
    $sql = "DELET FROM Userid WHERE Userid='". $_post["Userid"]."'";
    if(mysqli_query($conn, $sql)){
        header('Location: Tambah_user.php');
    }else{
        echo"Error Deleting Record: ". mysqli_error($conn) ;
    }
    }
    mysqli_close($conn);
?>