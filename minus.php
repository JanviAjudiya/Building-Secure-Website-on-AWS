<?php 
	session_start();
	include('connection.php');
	if($_SESSION['user']){
		$user=$_SESSION['user'];
	}
	else{
		header("location:index.php");
	}
		include('balance.php');
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$amount=mysqli_real_escape_string($con,$_POST['amount']);
		if($amount>$final)
		{
			
			Print '<script>alert("You do not have sufficient Funds.");window.location.assign("balance.php");</script>';
			exit("You have insufficient funds!");
			//header("location: balance.php");
			
		}
		
		$details=mysqli_real_escape_string($con,$_POST['details']);
		mysqli_query($con,"INSERT INTO withdrawal (amount,details,username) VALUES ('$amount','$details','$user')");
		
		Print '<script>alert("Successful Withdrawal Made.");window.location.assign("balance.php");</script>';
		
		
	}
	else
	{
		header("location:home.php");
	}


 ?>
