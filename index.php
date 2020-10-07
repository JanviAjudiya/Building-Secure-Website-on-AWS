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
			
		<br/>
		<b>&nbsp;&nbsp;Date :<p id="date" style="color:#DC143C;"></p>
        &nbsp;&nbsp;Time :<p id="time" style="color:#DC143C;"></p></b>
		<script type="text/javascript">
                window.onload = setInterval(clock,1000);

                function clock()
                {
            var d = new Date();
            
            var date = d.getDate();
            
            var month = d.getMonth();
            var montharr =["Jan","Feb","Mar","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
            month=montharr[month];
            
            var year = d.getFullYear();
            
            var day = d.getDay();
            var dayarr =["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
            day=dayarr[day];
            
            var hour =d.getHours();
                var min = d.getMinutes();
            var sec = d.getSeconds();

            document.getElementById("date").innerHTML=day+" "+date+" "+month+" "+year;
            document.getElementById("time").innerHTML=hour+":"+min+":"+sec;
                }
        </script>
		
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
