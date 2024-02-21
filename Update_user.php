<?php
session_start();
include 'lib/koneksi.php';

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();}

if(isset($_SESSION['Userid'])){
$Userid = $_POST['Userid'];
$Email = $_POST['Email'];
$Namalengkap = $_POST['Namalengkap'];
$Alamat = $_POST['Alamat'];

$query = "UPDATE user SET Userid = '$Userid', Email = '$Email', Namalengkap = '$Namalengkap', Alamat ='$Alamat' ";

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
</head>
<body><div class="container" style="margin-top: 80px">
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">Update</div>
            <div class="card-body">


            <form action="prosesupdateuser.php" method="POST">
        <fieldset>
        <legend>User</legend>
        <p>
            <label>ID user</label>
            <input type="text" name="Userid" value="<?php echo $row['Userid'];?>" readonly/>
        </p>
        <p>
            <label>Email:</label>
            <input type="text" name="Email" value="<?php echo $row['Email'];?>" />
        </p>
        <p>
            <label>Nama Lengkap:</label>
            <input type="text" name="Namalengkap" value="<?php echo $row['Namalengkap'];?>" />
        </p>
        <p>
            <label>Alamat:</label>
            <input type="text" name="Alamat" value="<?php echo $row['Alamat'];?>" />
        </p>
        <p>
            <label><input type="checkbox" name="remember" value="remember" /> Remember me</label>
        </p>
        <p>
            <input type="submit" name="submit" value="" />
        </p>
        </fieldset>
    </form>
            </div>
        </div>

    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
</body>
</html>