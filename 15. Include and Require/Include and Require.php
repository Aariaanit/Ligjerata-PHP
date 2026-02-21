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
        //require 'form.php'; //Përdorimi i require për të përfshirë skedarin form.php
        include 'form.php'; //Përdorimi i include për të përfshirë skedarin form.php
    ?>
    <?php include 'navbar.php'; ?>
    
    <p><span class="empty">* Required</span></p>
    <form method="post" >
        Username: <input type="text" name="Username">
        <span class="empty">*<?php echo $empUsername;?></span><br><br>
        Password: <input type="password" name="Password">
        <span class="empty">*<?php echo $empPassword;?></span><br><br>
        Email: <input type="email" name="Email">
        <span class="empty">*<?php echo $empEmail;?></span><br><br>
        <input type="submit" value="Sign Up">
        <input type="reset" value="Cancel">
    </form>



</body>

</html>
</html>