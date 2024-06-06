<html>

<head>
    <style>
    .empty {
        color: red;
    }
    </style>
</head>

<body>
    <?php
			$empUsername = "";	//Duhet te krijohen qe te mund te ju qasemi dpermes formes.
			$empPassword = "";
			$empEmail = "";
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$username = secure($_POST['Username']);
			$password = secure($_POST['Password']);
			$email = secure($_POST['Email']);
			if(empty($username))
			{
				$empUsername ="Username is required";
			}
			else if (!preg_match("/^[a-zA-ZëË ]*$/",$username)) 
			{
				$empUsername = "Only letters and white space allowed";
			}
			if(empty($password)){
				$empPassword ="Password is required";
			}
			if(empty($email)){
				$empEmail ="Email is required";
			}
			if(empty($username) and empty($password) and empty($email))
			{
				$empUsername ="Username is required";
				$empPassword ="Password is required";
				$empEmail ="Email is required";
				// echo '<script>alert("Required!")</scrixpt>';
			}
			else if($username !="" and $password != "" and $email != "" and preg_match("/^[a-zA-ZëË ]*$/",$username))
			{
				echo '<script>alert("Register Succesfully!")</script>';
			}
		}
		function secure($x) {
			$x = htmlspecialchars($x); //Ky funksion mundeson qe karakteret speciale te i konverton ne karaktere te HTML
			$x = trim($x);	//Ky funksion largon karakteret e panevojshme si (extra space, tab, newline etj), nga te dhenat hyrse te perdoruesit.
			$x = stripslashes($x);	//Ky funksion largon karakterin "\"(backslash).
			return $x;
		}
		?>
    <p><span class="empty">* Required</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Username: <input type="text" name="Username">
        <span class="empty">*<?php echo $empUsername;?></span><br><br>
        Password: <input type="password" name="Password">
        <span class="empty">*<?php echo $empPassword;?></span><br><br>
        Email: <input type="email" name="Email">
        <span class="empty">*<?php echo $empEmail;?></span><br><br>
        <input type="submit" value="Sign Up">
        <input type="reset" value="Cancel">
    </form>



</body>

</html>