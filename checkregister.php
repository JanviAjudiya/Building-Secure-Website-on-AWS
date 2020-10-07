<?php
	if(isset($_POST))
	{
		include('connection.php'); 
		$username = mysqli_real_escape_string($con,$_POST['username']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
		$c_password = mysqli_real_escape_string($con,$_POST['c_password']);
		$bool=true;

	
		$query=mysqli_query($con,"SELECT * FROM users");	
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$table_user=$row['username'];
			if($username==$table_user)
			{
				$bool=false;
				Print '<script>alert("Username has already been taken!");</script>';
				Print '<script>window.location.assign("register.php");</script>';
			}
		}
		if($bool)
		{
			if ($_POST["password"] === $_POST["c_password"])
			{
			mysqli_query($con,"INSERT INTO users (username,password,c_password) VALUES ('$username','$password','$c_password')");
			Print '<script>alert("Successfully Registered! ");</script>';
			Print '<script>window.location.assign("login.php");</script>';
			}
			else {
			Print '<script>alert("Please enter password which you typed above");</script>';
			Print '<script>window.location.assign("register.php");</script>';
			}
		}
	}
?>