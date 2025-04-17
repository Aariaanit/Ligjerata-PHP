<?php

include_once('includes/connect.php');

$errors = array();

if (isset($_POST['register'])) {
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

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Register</h3>
                            <?php  if (count($errors) > 0) { ?>
                            <div class="error">
                                <?php foreach ($errors as $error) { ?>
                                <p><?php echo $error ?></p>
                                <?php } ?>
                            </div>
                            <?php  } ?>
                            <form method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control p_input" name="username">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control p_input" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control p_input" name="password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control p_input" name="confirmPassword">
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input"> Remember me </label>
                                    </div>
                                    <a href="#" class="forgot-pass">Forgot password</a>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn"
                                        name="register">Sign Up</button>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-facebook col mr-2">
                                        <i class="mdi mdi-facebook"></i> Facebook </button>
                                    <button class="btn btn-google col">
                                        <i class="mdi mdi-google-plus"></i> Google plus </button>
                                </div>
                                <p class="sign-up text-center">Already have an Account?<a href="login.php">Login</a></p>
                                <p class="terms">By creating an account you are accepting our<a href="#"> Terms &
                                        Conditions</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>