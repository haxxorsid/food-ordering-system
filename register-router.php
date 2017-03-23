<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "food";
$success=false;
$total = 0;

$con = new mysqli($servername, $server_user, $server_pass, $dbname);
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];

$sql = "INSERT INTO users (name, username, password, contact) VALUES ('$name', '$username', '$password', $phone);";
$con->query($sql);

header("location:login.php");
?>