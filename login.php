<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Login Page</title>
        <link rel="stylesheet" href="newcss.css">
		<style>
		input[type=submit] {
		background-color: #21618c;
		color: white;
		font-weight : bold;
		width : 300px;
		height : 35px;
		font-size: 20px; 
		}
		</style>
    </head>
      <?php include 'header-login.php' ?>
       <body>
	   <div class="content_customer">
		<h2 style="text-align:center;color:#6A5ACD;">The Login Page</h2>
		<h3 style="text-align:center;color: #1e90ff;"><u><a href="index.php" >Click Here to Go Back</a></u></h3>
		<br/>
		<form action="checklogin.php" method="POST">
			<h3 style="text-align:center;color:#8A2BE2;">Enter Username : <input type="text" name="username" required="required"/></h3>
			<h3 style="text-align:center;color:#8A2BE2;">Enter Password : <input type="password" name="password" required="required"/></h3>
			<center><input type = "submit" class="button" value="Log in"/></center>
		<br/>
			</form>	
	</div>
	<?php include 'footer.php' ?>
	   </body>
	   </html>
  
            