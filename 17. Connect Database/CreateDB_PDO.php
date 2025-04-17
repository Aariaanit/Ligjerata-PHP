<?php
$servername = "localhost";
$username = "root";
$password = "";
try{
    $conn= new PDO("mysql:host=$servername",$username,$password);
    $sql = "CREATE DATABASE testdb";
    $conn->exec($sql);
    echo "Database is created";
}catch(Exception $e){
    echo "Database not created: " . $e->getMessage();
}

?>