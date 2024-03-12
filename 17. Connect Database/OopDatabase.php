<?php
$server = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($server, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{

echo "Connected successfully";
// Create database
  $sql = "CREATE DATABASE test123";
  if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }
}
$conn->close();
?>