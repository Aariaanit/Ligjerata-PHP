<?php  
    $server = "localhost";  
    $user = "root";  //default user name is root  
    $pass = "";     //default password is blank  
    $dbname = "shkolla";
    $connect = mysqli_connect($server, $user, $pass, $dbname);  
    if(!$connect)  
        die("Connection failed".mysqli_connect_error());  
    else      
        //echo "Successfully connected with database";  
        $query	= "CREATE DATABASE Shkolla";  
        if (mysqli_query($connect, $query)) {  
            echo "Database created successfully with the name Shkolla123";  
        } else {  
            echo "Error creating database: " . mysqli_error($connect);  
        }  
        mysqli_close($connect);
?>