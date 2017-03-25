<?php
include 'connect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$sql = "INSERT INTO items (name, price) VALUES ('$name', $price)";
if ($con->query($sql) == TRUE){
		header("location:admin-page.php");
}
?>