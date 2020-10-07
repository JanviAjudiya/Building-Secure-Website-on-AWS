<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration Page</title>
		<link rel="stylesheet" href="newcss.css">
		<style>
		.content_customer_register{
		height:700px;
		width:100%;
		border:1px solid dodgerblue;
		border-radius:5px;
		background: linear-gradient(to bottom, rgba(254,255,255,1) 0%,rgba(221,241,249,1) 97%,rgba(160,216,239,1) 100%); 
		}
		input[type=submit] {
		background-color: #2E4372;
		color: white;
		font-weight : bold;
		width : 400px;
		height : 40px;
		font-size: 25px; 
		}
		#message {
		display:none;
		color: #000;
		position: relative;
		padding: 20px;
		margin-top: 10px;
		}

		#message p {
		padding: 10px 35px;
		font-size: 18px;
		}


		.valid {
		color: green;
		}

		.valid:before {
		position: relative;
		left: -35px;
		content: "✔";
		}

		.invalid {
		color: #ff6347;
		}

		.invalid:before {
		position: relative;
		left: -35px;
		content: "✖";
		}
		</style>
    </head>
      <?php include 'header2.php' ?>
       <body>
	   <div class="content_customer_register">
		<h2 style="text-align:center;color:#6A5ACD;">The Registration Page</h2>
		<h3 style="text-align:center;color: #1e90ff;"><u><a href="index.php" >Click Here to Go Back</a></u></h3>
		<form action="checkregister.php" method="POST">
			<h3 style="text-align:center;color:#8A2BE2;">Enter Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="username" required="required"/></h3>
			<h3 style="text-align:center;color:#8A2BE2;">Enter Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="password" name="password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 4 or more characters" required="required"/></h3>
			<h3 style="text-align:center;color:#8A2BE2;">Enter confirm password : <input type="password" name="c_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}" required="required"/></h3><br/>
			
			<center><input type = "submit" class="button" id="register" value="Register Me"/></center>
		</form>	
		<center>
			<div id="message">
				<h3>Password must contain the following:</h3>
				<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
				<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
				<p id="number" class="invalid">A <b>number</b></p>
				<p id="length" class="invalid">Minimum <b>4 characters</b></p>
			</div>
		</center>
	</div>
	<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}


myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}


myInput.onkeyup = function() {
  
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  
  if(myInput.value.length >= 4) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
<?php include 'footer.php' ?>
	   </body>
	   </html>