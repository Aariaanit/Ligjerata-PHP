<?php

session_start();

include_once('includes/connect.php');

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
        $result = $checkQuery->fetch();

        if ($result && password_verify($password, $result['password'])) {
            // Login successful
            if($result['role']=== 1) {
                $_SESSION['username']=$username;
            
                echo "<script>alert('Login successful!')</script>";
                echo "<script>window.open('index.php','_self')</script>";
            }
            else{
                echo "<script>alert('Login successful!')</script>";
                echo "<script>window.open('../index.php','_self')</script>";
            }
        } else {
            array_push($errors, "Invalid username or password");
        }
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
                            <h3 class="card-title text-left mb-3">Login</h3>
                            <form method="post">
                                <div class="form-group">
                                    <label>Username *</label>
                                    <input type="text" class="form-control p_input" name="username">
                                </div>
                                <div class="form-group">
                                    <label>Password *</label>
                                    <input type="text" class="form-control p_input" name="password">
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
                                        name="login">Login</button>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-facebook mr-2 col">
                                        <i class="mdi mdi-facebook"></i> Facebook </button>
                                    <button class="btn btn-google col">
                                        <i class="mdi mdi-google-plus"></i> Google plus </button>
                                </div>
                                <p class="sign-up">Don't have an Account?<a href="register.php"> Sign Up</a></p>
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