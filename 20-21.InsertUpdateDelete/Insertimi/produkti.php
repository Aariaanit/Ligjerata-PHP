<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Insert to WEB</title>
    </head>
    <body>
    <div>
        <?php               
        $connect=mysqli_connect("localhost","root","","login");
        mysqli_select_db($connect,"login");

        if(isset($_GET['id'])){

            $id = $_GET['id'];

            $select = "SELECT * FROM upload WHERE id='$id'";
	
            $query = mysqli_query($connect, $select);

            $row=mysqli_fetch_array($query);
	
	        $fileId = $row['id'];
            $fileName = $row['fileName'];
            $fileUpload = $row['fileUpload'];
            $description = $row['fileDescription'];
        ?>
        <h2>
            <a href="insert.php">
                <?php echo $fileName; ?>
            </a>
        </h2>
        <img src="../file/<?php echo $fileUpload; ?>">
        <p>
            <?php echo $description; ?>
        </p>
        <?php } ?>
        </div>
    </body>
</html>