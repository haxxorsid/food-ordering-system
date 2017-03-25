<?php
include 'connect.php';
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];

$sql = "INSERT INTO users (name, username, password, contact) VALUES ('$name', '$username', '$password', $phone);";
$con->query($sql);

header("location:login.php");
?>