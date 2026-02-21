<?php
	$cookie_name = "User";
	$cookie_value = "Arianit Tershnjaku";
	//setcookie(name, value, expire, path, domain, secure, httponly);
	setcookie($cookie_name, $cookie_value, time() + 10, "/"); // 86400 = 1 dite
	// Ne kete menyre mund te e fshijme nje cookie.
	//setcookie("user", "", time() - 10);

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