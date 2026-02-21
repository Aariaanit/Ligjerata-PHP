
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$a = $_POST['Username'];
		$b = $_POST['Password'];
		if(empty($a) || empty($b))
		{
			echo '<script>alert("Username or Password is empty")</script>';
		}
		else if($a === 'arianit' && $b === '044494134')
		{
			//echo "<script>alert('Welcome!')</script>";
			echo "<script>window.open('admin.php','_self')</script>";
		}
		else
		{
			echo '<script>alert("Username and Password is incorrect!")</script>';
		}
	}
	else
	{
		echo '<script>alert("Metoda nuk eshte POST!")</script>';
	}
?>