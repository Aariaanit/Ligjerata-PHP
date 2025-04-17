<?php  
    $server = "localhost";  
    $user = "root";  //default user name is root  
    $pass = "";     //default password is blank  
    // $dbname = "shkolla1";
    $connect = mysqli_connect($server, $user, $pass);  
    if(!$connect)  
        die("Connection failed".mysqli_connect_error());  
    else      
        echo "Successfully connected with database";  
        $query	= "CREATE DATABASE prizren";  
        if (mysqli_query($connect, $query)) {  
            echo "Database created successfully with the name Prizren";  
        } else {  
            echo "Error creating database: " . mysqli_error($connect);  
        }  
        mysqli_close($connect);
?>