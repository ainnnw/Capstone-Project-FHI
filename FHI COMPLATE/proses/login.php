<?php 
session_start();
include '../koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
echo $username;
$query = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_array($query);
            $_SESSION['username'] = $data['username'];
            header("Location: ../dashbord/dashboard.php");
    }    else {
    $_SESSION['login_gagal'] = "Username dan password salah" ;
    header("Location: ../page/loginpage.php");
    }
 
?>