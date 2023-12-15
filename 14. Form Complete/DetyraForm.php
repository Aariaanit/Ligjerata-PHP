
 <?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$a = $_POST['Username'];
		$b = $_POST['Password'];
		if(empty($a)||empty($b))
		{
			echo 'Username or Password is empty';
		}
		else if($a === 'arianit' || $b === 'tershnjaku')
		{
			echo 'Correct! <br> You are welcome!';
		}
		else
		{
			echo 'Username or Password is incorrect!';
		}
	}
?>