<?php

include_once('config.php');

$errors = array();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $email = $_POST['email'];

    if (empty($username)) {
        array_push($errors, "Username is required");
    } elseif (!preg_match("/^[a-zA-ZëË ]*$/", $username)) {
        array_push($errors, "Only letters and white space allowed");
    }

    if (empty($email)) {
        array_push($errors, "Email is required");
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Invalid email format");
    }

    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if($password != $confirmPassword){
        array_push($errors, "Password nuk eshte i njejt");
    }

    // Check if username or email already exists
    $query = "SELECT * FROM users WHERE username=:username OR email=:email";
    $checkQuery = $conn->prepare($query);
    $checkQuery->bindParam(':username', $username);
    $checkQuery->bindParam(':email', $email);
    $checkQuery->execute();
    $result = $checkQuery->fetchAll();

    foreach ($result as $row) {
        if ($row['username'] == $username) {
            array_push($errors, "Username already exists");
        }
        if ($row['email'] == $email) {
            array_push($errors, "Email already exists");
        }
    }

    if (count($errors) == 0) {
        // Hash the password before storing it
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";
        $sqlQuery = $conn->prepare($sql);

        $sqlQuery->bindParam(':username', $username);
        $sqlQuery->bindParam(':password', $hashedPassword);
        $sqlQuery->bindParam(':email', $email);

        $sqlQuery->execute();

        echo "<script>alert('Register succesfully!')</script>";
    }
}
?>