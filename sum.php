<?php 
session_start();
	include('connection.php');
	if($_SESSION['user']){
		$user=$_SESSION['user'];
	}
	else{
		header("location:index.php");
	}
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
	$result = mysqli_query($con, "SELECT SUM(amount) AS total FROM deposit where username='$user'"); 
		$row = mysqli_fetch_assoc($result); 
		$sum = $row['total'];
	}
	else
	{
		header("location:home.php");
	}
	
?>