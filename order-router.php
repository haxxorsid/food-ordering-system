<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "food";
$success=false;
$total = 0;
$con = new mysqli($servername, $server_user, $server_pass, $dbname);

$customer_id = $_SESSION['user_id'];
$sql = "INSERT INTO orders (customer_id) VALUES ($customer_id)";
if ($con->query($sql) === TRUE){
	$order_id =  $con->insert_id;
	foreach ($_POST as $key => $value)
	{
		if($key == 'action'){
			break;
		}
		$result = mysqli_query($con, "SELECT * FROM items WHERE id = $key");
		while($row = mysqli_fetch_array($result))
		{
			$price = $row['price'];
		}
			$price = $value*$price;
		$sql = "INSERT INTO order_details (order_id, item_id, quantity, price) VALUES ($order_id, $key, $value, $price)";
		if ($con->query($sql) === TRUE){
		$total = $total + $value*price;
		}
	}
		header("location:orders.php");
}
?>