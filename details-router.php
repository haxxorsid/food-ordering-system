<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "food";
$success=false;
$total = 0;
$user_id = $_SESSION['user_id'];

$con = new mysqli($servername, $server_user, $server_pass, $dbname);
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "UPDATE users SET name = '$name', username = '$username', password='$password', contact=$phone, email='$email', address='$address' WHERE id = $user_id;";
$con->query($sql);

header("location:details.php");
?>