
<?php
include 'lib/koneksi.php';
session_start();
if(isset($_SESSION['username'])){
  header("Location: Dashboard.php");
  exit();
}
if(isset($_POST['submit'])){

}
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>UKK Kevin immanuel || Login</title>
    </head>
    <body>
        <form action="login_check.php" method="POST">
            <table>
                <tr>
                <td><label for="username">Username</label></td>
                    <td><input type="text" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                <td><label for="passwd"> Password</label></td>
                    <td><input type="Password" name="passwd" placeholder="Password"></td>
                </tr>
                <tr><td><td>
                    <td><input type="submit" value="Login"></td>
                </td></td></tr>
            </table>
        </form>
        <h4>Password nya : immanuel </h4>
    </body>
</html>