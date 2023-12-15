<html>
	<head>
		<style>
			.empty {color: red;}
		</style>
	</head>
	<body>
		<?php
			$empUsername = "";			//Duhet te krijohen var te zbrazeta qe te mund te ju qasemi permes formes.
			$empEmail ="";
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$username =secure($_POST['username']);
				if(empty($username))
				{
					$empUsername ="Username is required";
				}
			//Funksioni preg_match na mundeson qe ta shenojme nje input ne forme te rregullt, apo te na paralajmroje kur kemi perdorur ndonje karakter jovalid.
				else if (!preg_match("/^[a-zA-ZëË ]*$/",$username)) 
				{
					$empUsername = "Only letters and white space allowed";
				}
			$email =secure($_POST['email']);
				if(empty($email))
				{
					$empEmail ="Email is required";
				}
				else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
				{
					$empEmail = "Invalid email format";
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
			Username: <input type="text" name="username">
			<span class="empty">*<?php echo $empUsername;?></span><br><br>
			Email: <input type="email" name="email">
			<span class="empty">*<?php echo $empEmail;?></span><br><br>
			<input type="submit" value="Log in">
			<input type="reset" value="Cancel">
		</form>
		
		<?php
			echo $username;
			echo "<br>";
			echo $email;
		?>
		
		
	</body>
</html>