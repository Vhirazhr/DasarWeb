<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "3399") {
    $_SESSION["username"] = $username;
    $_SESSION["status"] = 'login';
    
    header("Location: homeSession.php"); 
    exit();  
} else {
    echo "Gagal login"; 
}
?>
