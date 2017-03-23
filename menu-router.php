<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "food";
$success=false;
$total = 0;
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
	foreach ($_POST as $key => $value)
	{
		if(preg_match("/[0-9]+_name/",$key)){
			$key = strtok($key, '_');
			$sql = "UPDATE items SET name = '$value' WHERE id = $key;";
			$con->query($sql);
		}
		if(preg_match("/[0-9]+_price/",$key)){
			$key = strtok($key, '_');
			$sql = "UPDATE items SET price = $value WHERE id = $key;";
			$con->query($sql);
		}
		if(preg_match("/[0-9]+_hide/",$key)){
			if($_POST[$key] == 1){
			$key = strtok($key, '_');
			$sql = "UPDATE items SET deleted = 0 WHERE id = $key;";
			$con->query($sql);
			} else{
			$key = strtok($key, '_');
			$sql = "UPDATE items SET deleted = 1 WHERE id = $key;";
			$con->query($sql);			
			}
		}
	}
header("location:admin-page.php");
?>