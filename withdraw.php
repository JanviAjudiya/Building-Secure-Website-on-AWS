<html>
	<head>
	<title>Money in the Bank</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="newcss.css">
	<style>
		input[type=submit] {
		background-color: #2e86c1;
		color: white;
		font-weight : bold;
		width : 300px;
		height : 35px;
		font-size: 20px; 
		}
		</style>
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
		<h2 style="text-align:center;color:#6A5ACD;">The Withdrawal Page</h2>
		<h3 style="text-align:center;color:#6495ED;"> Hello <?php Print "$user" ?></h3>
		<h3 style="text-align:center;color: #1e90ff;"><u><a href="home.php" >Click Here to go back</a></u></h3>
		<h3 style="text-align:center;color: #1e90ff;"><u><a href="logout.php" >Click Here to Log out</a></u></h3><br/>
		<form action="minus.php" method="POST">
			<h3 style="text-align:center;color:#8A2BE2;">How much would you like to withdraw: <input type="number" name="amount" required="required" /></h3>
			<h3 style="text-align:center;color:#8A2BE2;">Please add remarks  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type="text" name="details"/></h3><br/>
			<h3 style="text-align:center;color:#2E4372;"><input type="submit" class="button" value="Withdraw Money"/></h3>
		</form>
		<h3 style="text-align:center;color:#2E4372;"><p>Please don't withdraw more than you have.</p></h3>


	</div>
	</body>
	
</html>
