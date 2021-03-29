<?php
include "MySQL_connection.php";

// Start Session
session_start();

// Mengecek apakah database sudah masuk atau belum
// var_dump($userData = "SELECT * FROM tb_login WHERE username = '$username' OR email = '$username' AND password ='$password'");

$username = $_POST['username'];
$password = $_POST['pass'];

$userData = "SELECT * FROM tb_login WHERE username = '$username' OR email = '$username' AND password_user ='$password'";

$result = $conn->query($userData);

if($result->num_rows > 0) {
    $_SESSION['login'] = 1;
    $_SESSION['login_message'] = "You made it!";
    header("location:Halaman_buku_tamu.php");
} else {
    $_SESSION['login'] = 0;
    $_SESSION['login_message'] = "Failed to log in";
    header("location:login.php");
}
?>