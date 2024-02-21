<?php
session_start();
include 'lib/koneksi.php';

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
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
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>UKK Kevin immanuel || Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Tambah_user.php">ADD User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="Tambah_buku.php">ADD Book
          </a>        
          <li class="nav-item">
          <a class="nav-link " href="Tambah_peminjam.php">ADD Peminjam
          </a>
          <li class="nav-item">
          <a class="nav-link " href="logout.php">Logout
          </a>
        </li>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

        <?php
        include 'lib/koneksi.php';
        $sql = "SELECT * FROM user ORDER BY Userid ";
        $tampil = mysqli_query($conn,$sql);
        echo'<table boder="3" cellpadding="10">
        <thead bgcolor="blue">
        <tr>
            <td>User ID</td>
            <td>Email</td>
            <td>Nama lengkap</td>
            <td>Alamat</td>
            <td align ="center">Action</td>
        </tr>

        </thead>';
        while ($row = mysqli_fetch_assoc($tampil)){
            echo'        
            <tr>
            <td>'.$row['Userid'].'</td>
            <td>'.$row['Email'].'</td>
            <td>'.$row['Namalengkap'].'</td>
            <td>'.$row['Alamat'].'</td>
            <td>
            <button type="button"><a href="Update_user.php?Userid=">Update</a></button>
            <button value="delete">
            <a href="deletuser.php?delete='.$row['Userid'].'">Hapus</a></button></td>
        </tr>';
        }
        echo'</tbody></table>';
        mysqli_free_result($tampil);
        mysqli_close($conn);
        ?>
        <a href="inputuser.php">
        <button type="button">
            Tambah
        </button></a>

    </body>
</html>
<!--    <tr>
            <td>'.$row[''].'</td>
            <td>'.$row[''].'</td>
            <td>'.$row[''].'</td>
        </tr>-->