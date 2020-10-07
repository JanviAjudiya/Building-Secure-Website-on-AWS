<html>
	<head>
	<title>Money in the Bank</title>
	<meta charset="UTF-8">
	</head>
	<link rel="stylesheet" href="newcss.css">
	<?php
		session_start();
		if($_SESSION['user'])
		{}
		else
		{
			header("location:index.php");
		}
		$user=$_SESSION['user'];
		?>
		<?php include 'header1.php' ?>
	<body>

	<div class="content_customer">
		<h2 style="text-align:center;color:#6A5ACD;">The Balance Page</h2>
		<h3 style="text-align:center;color:#6495ED;"> Hello <?php Print "$user" ?></h3>
		<h3 style="text-align:center;color: #1e90ff;"><u><a href="home.php" >Click Here to Go Back</a></u></h3>
		<h3 style="text-align:center;color: #1e90ff;"><u><a href="logout.php" >Click Here to Log out</a></u></h3><br/>
		<?php
		include('connection.php');
		if($_SESSION['user']){
		$user=$_SESSION['user'];
	}
	else{
		header("location:index.php");
	}
	    $result = mysqli_query($con, "SELECT SUM(amount) AS total FROM deposit where username='$user'"); 
		$row = mysqli_fetch_assoc($result); 
		$sum = $row['total'];
		
		$sql = mysqli_query($con, "SELECT SUM(amount) AS abc FROM withdrawal where username='$user'"); 
		$minus = mysqli_fetch_assoc($sql); 
		$mybal = $minus['abc'];
		
		$final = $sum - $mybal;
		
			Print "<h2>";
			Print "<center>";
			Print "<font color='#ff474a'>";
			Print "Your Balance is : " . $final;
			Print "</font>";
			Print "</center>";
			Print "</h2>";
		?>
	</div>
	</body>
	
</html>
