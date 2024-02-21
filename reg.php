<?php
include 'lib/koneksi.php';
session_start();
if(isset($_SESSION['username'])){
  header("Location: Dashboard.php");
  exit();
}
if(isset($_POST["register"]))  
{  
     if(empty($_POST["username"]) && empty($_POST["password"]))  
     {  
          echo '<script>alert("Both Fields are required")</script>';  
     }  
     else  
     {  
          $username = mysqli_real_escape_string($connect, $_POST["Username"]);  
          $passwd = mysqli_real_escape_string($connect, $_POST["Password"]);  
          $passwd = md5($passwd);  
          $query = "INSERT INTO login_petugas (username, passwd) VALUES('$Username', '$Password')";  
         
          if(mysqli_query($connect, $query))  
          {  
               echo '<script>alert("Registration Done")</script>';  
          }  
     }  
} 
?> 
<!DOCTYPE html>
<html>
  <head>
    <title>Registration || UKK </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container" style="width:500px;">
  <h3 align="center">Register</h3>
  <form action="post" method="reg_proses.php">
  <label>Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="register" value="Register" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="login.php">Login</a></p>  
               
  </form>
  </div>
  </body>
</html>