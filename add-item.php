<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "food";

$con = new mysqli($servername, $server_user, $server_pass, $dbname);

$name = $_POST['name'];
$price = $_POST['price'];
$sql = "INSERT INTO items (name, price) VALUES ('$name', $price)";
if ($con->query($sql) == TRUE){
		header("location:admin-page.php");
}
?>