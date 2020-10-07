<html>
	<head>
	<title>E-Banking</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="newcss.css">
	</head>
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
		<h2 style="text-align:center;color:#6A5ACD;">The Home Page</h2>
		<h3 style="text-align:center;color:#6495ED;"> Welcome to E-Banking <?php Print "$user" ?></h3>
		<h3 style="text-align:center;color: #1e90ff;"><u><a href="logout.php" >Click Here to Logout</a></u></h3>
		<h3 style="text-align:center;color:#2E4372;"><button type = "button" onclick="location.href='deposit.php'" >Deposit Money</button></h3>
		<h3 style="text-align:center;color:#2E4372;"><button type = "button" onclick="location.href='withdraw.php'" >Withdraw Money</button></h3>
		<h3 style="text-align:center;color:#2E4372;"><button type = "button" onclick="location.href='balance.php'" >Check Balance</button></h3>

	</div>
	</body>
	
</html>
