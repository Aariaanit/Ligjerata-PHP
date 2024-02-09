<html>
	<head>
		<title>Login</title>
	</head>

    <body>
        <form method="post" action="">
            Username: <input type="text" name="Username"><br><br>
            Password: <input type="password" name="Password"><br><br>
            <input type="submit" name="login" value="Log in">
            <input type="reset" name="cancel" value="Cancel">
        </form>
        <?php
            $connect=mysqli_connect('localhost','root','','login');
                mysqli_select_db($connect,'login');

                if(isset($_POST['login']))
                {
                    $username=$_POST['Username'];
                    $password=$_POST['Password'];
                        
                    $login = "SELECT * FROM admin_login WHERE username='$username' AND password='$password'";
                        
                    $query=mysqli_query($connect, $login);
                        
                        if(mysqli_num_rows($query)>0)
                        {
                            $_SESSION['username']=$username;
                            
                            echo "<script>
                               window.open('admin.php','_self');
                               </script>";
                            echo "<script>alert('Welcome!');</script>";
                        }
                        else if(empty($username)||empty($password))
                        {
                            echo "<script>alert('Username ose Password jane te zbrazeta!');</script>";
                        }
                        else
                        {
                            echo "<script>
                            alert('Username ose Password jane gabim!');
                            </script>";
                        }
                }     
        ?>
    </body>
</html>