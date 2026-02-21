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
			else if (strlen($password) < 8) {
				$empPassword = "Password must be at least 8 characters long";
			}
			if(empty($email)){
				$empEmail ="Email is required";
			}
			else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$empEmail = "Invalid email format";
			}
			if(empty($username) and empty($password) and empty($email))
			{
				$empUsername ="Username is required";
				$empPassword ="Password is required";
				$empEmail ="Email is\" required";
				// echo '<script>alert("Required!")</scrixpt>';
			}
			else if($username !="" and $password != "" and $email != "" and preg_match("/^[a-zA-ZëË ]*$/",$username) and filter_var($email, FILTER_VALIDATE_EMAIL))
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