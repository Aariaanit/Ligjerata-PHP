<?php
	$cookie_name = "User";
	$cookie_value = "Arianit Tershnjaku";
	//setcookie(name, value, expire, path, domain, secure, httponly);
    
	//setcookie($cookie_name, $cookie_value, time() + 5, "/"); // 86400 = 1 dite
	// Ne kete menyre mund te e fshijme nje cookie.
	//setcookie("user", "", time() - 10);
?>
<html>
	<head>
	</head>
	<body>
        <button onclick="x()" >Pranoje</button>
        <?php 
            function x(){
                $cookie_name = "User";
	            $cookie_value = "Arianit Tershnjaku";
                setcookie($cookie_name, $cookie_value, time() + 5, "/");   
            }
            
        ?>
		<?php
			if(!isset($_COOKIE[$cookie_name]))
				{
					echo "Cookie '" . $cookie_name . "' is not set!";
				} 
			else 
				{
				echo "Cookie '" . $cookie_name . "' is set!<br>";
				echo "Value is: " . $_COOKIE[$cookie_name];
				}
		?>

</body>
</html>