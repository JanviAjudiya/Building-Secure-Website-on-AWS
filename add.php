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
		$amount=mysqli_real_escape_string($con,$_POST['amount']);
		$details=mysqli_real_escape_string($con,$_POST['details']);
		mysqli_query($con,"INSERT INTO deposit (amount,details,username) VALUES ('$amount','$details','$user')");
		Print '<script>alert("Successful Deposit Made.");window.location.assign("balance.php");</script>';
	}
	else
	{
		header("location:home.php");
	}

 ?>
