<?php
	//Session duhet te shenohet ne fillim te file php.
	session_start();
?>
<html>
	<head>
	</head>
	<body>

		<?php
			$_SESSION['emri']='Arianit';
			$_SESSION['mbiemri']='Tershnjaku';
			echo 'Session set';
			echo '<br>';
			print_r($_SESSION); //Na mundeson nxjerrjen e te gjitha sessioneve qe gjendent tek variabla globale $_SESSION.
		?>
		<?php 	
			if (!isset($_SESSION['count'])) 
			{
				$_SESSION['count'] = 1;
			} 
			else 
			{
				$_SESSION['count']++;
			} 
				echo $_SESSION['count']; ?>  
		<?php
			//I fshin te gjitha variablat e session.
			//session_unset(); 
			//E fshin kete session.
			
			session_destroy();
		?>
		<a href='Sessions1.php'>next</a>
</body>
</html>