<?php
    include('login1.php');
?>
<html>

<head>
    <title>Login</title>

    <link rel="stylesheet" href="style.css" media="all">
</head>

<body>
    <form method="post" action="Login.php">
        Username: <input type="text" name="Username"><br><br>
        Password: <input type="password" name="Password"><br><br>
        <input type="submit" name="login" value="Log in">
        <input type="reset" name="cancel" value="Cancel">
    </form>
</body>

</html>