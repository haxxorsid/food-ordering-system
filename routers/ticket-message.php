<?php
include '../includes/connect.php';
include '../includes/wallet.php';
$message = htmlspecialchars($_POST['message']);
$ticket_id = $_POST['ticket_id'];
$role = $_POST['role'];
if($role == 'Administrator'){
	$sql = "UPDATE tickets SET status = 'Answered' WHERE id=$ticket_id;";
	$con->query($sql);
}
else{
	$sql = "UPDATE tickets SET status = 'Open' WHERE id=$ticket_id;";
	$con->query($sql);	
}
if($message != ''){
	$sql = "INSERT INTO ticket_details (ticket_id, user_id, description) VALUES ($ticket_id, $user_id, '$message')";
	$con->query($sql);
}
header("location: ../view-ticket.php?id=".$ticket_id);
?>