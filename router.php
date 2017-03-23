<?php
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "food";
$success=false;
$con = new mysqli($servername, $server_user, $server_pass, $dbname);

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='Administrator' AND not deleted;");
while($row = mysqli_fetch_array($result))
{
	$success = true;
	$user_id = $row['id'];
	$name = $row['name'];
	$role= $row['role'];
	$address= $row['address'];
	$contact= $row['contact'];
	$email= $row['email'];
	$user_name = $row['username'];
}
if($success == true)
{	
	session_start();
	$_SESSION['admin_sid']=session_id();
	$_SESSION['user_id'] = $user_id;
	$_SESSION['role'] = $role;
	$_SESSION['name'] = $name;
	$_SESSION['address'] = $address;
	$_SESSION['email'] = $email;
	$_SESSION['contact'] = $contact;
	$_SESSION['username'] = $user_name;
	

	header("location:admin-page.php");
}
else
{
	$result = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='Customer' AND not deleted;");
	while($row = mysqli_fetch_array($result))
	{
	$success = true;
	$user_id = $row['id'];
	$name = $row['name'];
	$role= $row['role'];
	$address= $row['address'];
	$contact= $row['contact'];
	$email= $row['email'];	
	$user_name = $row['username'];	
	}
	if($success == true)
	{
		session_start();
		$_SESSION['customer_sid']=session_id();
		$_SESSION['user_id'] = $user_id;
		$_SESSION['role'] = $role;
		$_SESSION['name'] = $name;
		$_SESSION['address'] = $address;
		$_SESSION['email'] = $email;
		$_SESSION['contact'] = $contact;
		$_SESSION['username'] = $user_name;		
		header("location:index.php");
	}
	else
	{
		header("location:login.php");
	}
}
?>