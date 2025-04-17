
<!-- Detyre me i nda ne dy file -->
<?php
include('connect.php');

$errors = array();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validation and Sanitization
    $username = htmlspecialchars($username);

    if (empty($username) || empty($password)) {
        array_push($errors, "Both username and password are required for login");
    }

    if (count($errors) == 0) {
        $query = "SELECT * FROM users WHERE username=:username";
        $checkQuery = $conn->prepare($query);
        $checkQuery->bindParam(':username', $username);
        $checkQuery->execute();
        #$checkQuery->query();
        $result = $checkQuery->fetch();

        if ($result && password_verify($password, $result['password'])) {
            // Login successful
            echo "<script>alert('Login successful!')</script>";
            echo "<script>window.open('admin.php','_self')</script>";
        } else {
            array_push($errors, "Invalid username or password");
        }
    }
}

?>