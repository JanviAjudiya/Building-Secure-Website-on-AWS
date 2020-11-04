<!DOCTYPE html>

<html>
    <head>  
        <meta charset="UTF-8">
        <title>Online Banking System</title>
        <link rel="stylesheet" href="newcss.css">
    </head>
    <body>
        <div class="wrapper">
        <div class="header">
            <img src="header.jpg" height="100%" width="100%"/>
            </div>
            <div class="navbar">
			<ul>
            <li><a href="index.php">Home </a></li>
            <li><a href="features.php">Features </a></li>
            <li id="last"><a href="contact.php">Contact Us</a></li>
			<li><a href="login.php">Log in </a></li>
			<li><a href="register.php">Register </a></li>
			<li><a href="register.php">Log out </a></li>
            </ul>
            </div>
		<div class="image">
            <img src="home.jpg" height="100%" width="100%"/>
            <div class="text">
                
                <a href="safeonlinebanking.php"><h3>Click to read safe online banking tips</h3></a>
    <a href="t&c.php"><h3>Terms and conditions</h3></a>
    <a href="faq.php"><h3>FAQ'S</h3></a>
    
    
  </div>
            </div>
            
            <div class="left_panel">
			
		<?php date_default_timezone_set('Asia/Kolkata');?>
		<b><p style="color:#f65d84;">Date :</p><p style="color:#DC143C;"><?php Print date("jS F Y"); ?></p>
		<p style="color:#f65d84;">Day :</p><p style="color:#DC143C;"><?php Print date("l"); ?></p>
        <p style="color:#f65d84;">Time :</p><p style="color:#DC143C;"><?php include 'time.php'?></p></b>
		
                <p>Our internet banking portal provides personal banking services that gives you complete control over all your banking demands online.</p>
                <h3>Features</h3>
                <ul>
                    <li>Registration for online banking</li>
                    <li>Login for online banking</li>
                    <li>Deposit money</li>
                    <li>Withdrawal of money</li>
                    <li>Check Balance</li>
                </ul>
            </div>
            
            <div class="right_panel">
                
                    <h3>PERSONAL BANKING</h3>
                    <ul>
                        <li>Personal Banking application provides features to administer and manage non personal accounts online.</li>
                        <li>Phishing is a fraudulent attempt, usually made through email, phone calls, SMS etc seeking your personal and confidential information.</li>
                        <li>Online Bank or any of its representative never sends you email/SMS or calls you over phone to get your personal information, password or one time SMS (high security) password.</li>
                        <li>Any such e-mail/SMS or phone call is an attempt to fraudulently withdraw money from your account through Internet Banking. Never respond to such email/SMS or phone call. Please report immediately on reportif you receive any such email/SMS or Phone call. Please lock your user access immediately.
</li>
                    </ul>
                </div>
                    <?php include 'footer.php' ?>
</html>
