<html>

<head>
    <style>
    .empty {
        color: red;
    }
    </style>
</head>

<body>
    <?php	
				//require ('form2.php');
				include('form.php');
				
				//echo 'forma e pare';
				include('navbar.php');
		?>

    <p><span class="empty">* Required</span></p>
    <form method="post" action="">
        Username: <input type="text" name="Username">
        <span class="empty">*<?php echo $empUsername;?></span><br><br>
        Password: <input type="password" name="Password">
        <span class="empty">*<?php echo $empPassword;?></span><br><br>
        <input type="submit" value="Log in">
        <input type="reset" value="Cancel">
    </form>



</body>

</html>