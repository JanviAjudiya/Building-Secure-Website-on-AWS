    <?php      
        $host = "aws database url";  
        $user = "database username";  
        $password = '';  
        $db_name = "atm";  
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
    ?>  
