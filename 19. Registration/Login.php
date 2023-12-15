<html>
	<head>
		<title>Login &amp; Registration</title>
		
        <link rel="stylesheet" href="style.css" media="all">
	</head>

    <body>
        <form method="post" action="Login.php">
            Email: <input type="text" name="Email"><br><br>
            Password: <input type="password" name="Password"><br><br>
            <input type="submit" name="login" value="Log in">
            <input type="reset" name="cancel" value="Cancel">
        </form>
        <a href='Registration1.php'><button>Registration</button></a>
            
        <?php

            session_start(); 
            
            $connect=mysqli_connect('localhost','root','','login');
            mysqli_select_db($connect,'login');
            
            if(isset($_POST['login']))
               {
                $email = mysqli_real_escape_string($connect,$_POST['Email']);
                $password = mysqli_real_escape_string($connect,$_POST['Password']);
                
                if(empty($email)||empty($password))
		              {
                        echo "<script>alert('Email ose Password jane te zbrazeta!')</script>";
		              }
                if($email!='' || $password!='')
                 {
                //Kujdes!!! Kur e ruani passwordin ne SQL me gjatesi me te gjate.
                   $password=md5($password);
                   //echo $password.'<br>';
                    
                   $login = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
                   
                   $con=mysqli_query($connect, $login);
                   
                   if(mysqli_num_rows($con)>0)
                   {
                       $_SESSION['email']=$email;
                       
                       echo "<script>
                       window.open('index.php','_self')
                       </script>";
                   }
                   else
                   {
                       echo "<script>
                       alert('Email ose Password jane gabim!')
                       </script>";
                   }
                }
           }
               
        ?>
    </body>
</html>