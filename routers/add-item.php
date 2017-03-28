<?php
include '../includes/connect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$sql = "INSERT INTO items (name, price) VALUES ('$name', $price)";
$con->query($sql);
header("location: ../admin-page.php");
?>