    <?php      
		session_start();
        include('connection.php'); 
        $username = $_POST['username'];  
        $password = $_POST['password'];  
     
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
          
            $sql = "SELECT * from users where username = '$username' and password = '$password'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
				  echo "<h1> Login sucessful.</h1>";
				  $_SESSION['user']=$username;
				  header("Location:home.php");
				  $sql1 = "INSERT INTO login (username, password) VALUES ('$username','$password')";
				  mysqli_query($con, $sql1);
            }  
            else{  
                Print '<script>alert("Invalid login, check your username and password");</script>'; 
				Print '<script>window.location.assign("login.php");</script>';				
            } 
			
    ?>  