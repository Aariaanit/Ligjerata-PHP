<?php
			$empName = "";
			$empLastName = "";
			$empEmail = "";
			$empPassword = "";
			$empConfirmPassword = "";
			$empGender ="";
			$empBirthday ="";
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$name =secure($_POST['name']);
				if(empty($name))
				{
					$empName ="Name is required";
				}
				else if (!preg_match("/^[a-zA-ZëË ]*$/",$name)) 
				{
					$empName = "Only letters and white space allowed";
				}
		
			$lastName =secure($_POST['lastName']);
				if(empty($lastName))
				{
					$empLastName ="LastName is required";
				}
				else if (!preg_match("/^[a-zA-ZëË ]*$/",$lastName)) 
				{
					$empLastName = "Only letters and white space allowed";
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
			$password =secure($_POST['password']);
				if(empty($password))
				{
					$empPassword ="Password is required";
				}
			$confirmPassword =secure($_POST['confirmPassword']);
				if(empty($confirmPassword))
				{
					$empConfirmPassword ="ConfirmPassword is required";
				}
			$gender =secure($_POST['gender']);
				if(empty($gender))
				{
					$empGender ="Gender is required";
				}
			$birthday =secure($_POST['birthday']);
				if(empty($birthday))
				{
					$empBirthday ="Birthday is required";
				}
				
		}
		function secure($x) {
			$x = htmlspecialchars($x); //Ky funksion mundeson qe karakteret speciale te i konverton ne karaktere te HTML
			$x = trim($x);	//Ky funksion largon karakteret e panevojshme si (extra space, tab, newline etj), nga te dhenat hyrse te perdoruesit.
			$x = stripslashes($x);	//Ky funksion largon karakterin "\"(backslash).
			return $x;
		}
		?>