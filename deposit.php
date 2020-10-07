<html>
	<head>
	<title>Money in the Bank</title>
	<meta charset="UTF-8">
	</head>
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
		<h2 style="text-align:center;color:#6A5ACD;">The Deposit Page</h2>
		<h3 style="text-align:center;color:#6495ED;"> Welcome to E-Banking <?php Print "$user" ?></h3>
		<h3 style="text-align:center;color: #1e90ff;"><u><a href="home.php" >Click Here to go back</a></u></h3>
		<h3 style="text-align:center;color: #1e90ff;"><u><a href="logout.php" >Click Here to Log out</a></u></h3><br/>
		
		<form action="add.php" method="POST">
			<h3 style="text-align:center;color:#8A2BE2;">How much would you like to deposit: <input type="number" name="amount" required="required"/></h3>
			<h3 style="text-align:center;color:#8A2BE2;">Please add remark &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type="text" name="details"/></h3><br/>
			<h3 style="text-align:center;color:#2E4372;"><input type="submit" class="button" value="Deposit Money"/></h3>
		</form>



	</div>
	</body>
	
</html>
