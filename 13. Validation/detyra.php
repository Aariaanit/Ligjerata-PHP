<html>
	<head>
		<style>
			.empty {color: red;}
		</style>
	</head>
	<body>
		<?php
		
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$number = $_POST['number'];
			
			if($number % 2 == 0)
			{
				echo '<script>alert("Numri eshte qift")</script>';
			}
			else
			{
				echo '<script>alert("Numri eshte tek")</script>';
			}
		}
		?>
		<p><span class="empty">* Required</span></p>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Number: <input type="text" name="number">
		</form>
		

		
	</body>
</html>