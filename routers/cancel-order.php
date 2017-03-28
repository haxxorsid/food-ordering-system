<?php
include '../includes/connect.php';
include '../includes/wallet.php';
$status = $_POST['status'];
$id = $_POST['id'];
$sql = "UPDATE orders SET status='$status', deleted=1 WHERE id=$id;";
$con->query($sql);
$sql = mysqli_query($con, "SELECT * FROM orders where id=$id");
while($row1 = mysqli_fetch_array($sql)){
$total = $row1['total'];
}
if($_POST['payment_type'] == 'Wallet'){
	$balance = $balance+$total;
	$sql = "UPDATE wallet_details SET balance = $balance WHERE wallet_id = $wallet_id;";
	$con->query($sql);
}
header("location: ../orders.php");
?>