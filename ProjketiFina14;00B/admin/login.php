<?php
session_start();
include('includes/connect.php');

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
            if($result['role']== 1){
              $_SESSION['username']=$username;
              $_SESSION['role']=1;
              if(isset($_SESSION['username'])==$username && isset($_SESSION['role'])==1){
                
                echo "<script>alert('Login successful!')</script>";
                echo "<script>window.open('index.php','_self')</script>";
              }
                
            }
            else{
                $_SESSION['username']=$username;
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
    <title>Admin Panel</title>
    <!-- plugins:css -->
    <?php
        include('includes/styles.php');
    ?>
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
                    <input type="text" name="username" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="password" name="password" class="form-control p_input">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="login" class="btn btn-primary btn-block enter-btn">Login</button>
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
    <?php
        include('includes/scripts.php');
    ?>
    <!-- endinject -->
  </body>
</html>