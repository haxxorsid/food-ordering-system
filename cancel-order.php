<?php
include 'connect.php';
$status = $_POST['status'];
$id = $_POST['id'];

$sql = "UPDATE orders SET status='$status', deleted=1 WHERE id=$id;";
$con->query($sql);

header("location:orders.php");
?>