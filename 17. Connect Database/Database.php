<?php  
    $server = "localhost";
    $username = "root";  //default user name is root  
    $password = "";     //default password is blank   
    $connect = mysqli_connect($server, $username, $password);  
    if(!$connect)  
        die("Connection failed".mysqli_connect_error());  
    else      
        echo "Successfully connected with database";
        
    //echo "Hello!!!";
    mysqli_close($connect); 
?>