<?php
include '../includes/connect.php';
$subject = htmlspecialchars($_POST['subject']);
$description =  htmlspecialchars($_POST['description']);
$type = $_POST['type'];
$user_id = $_POST['id'];
if($type != ''){
	$sql = "INSERT INTO tickets (poster_id, subject, description, type) VALUES ($user_id, '$subject', '$description', '$type')";
	if ($con->query($sql) === TRUE){
		$ticket_id =  $con->insert_id;
		$sql = "INSERT INTO ticket_details (ticket_id, user_id, description) VALUES ($ticket_id, $user_id, '$description')";
		$con->query($sql);
	}
}
header("location: ../tickets.php");
?>