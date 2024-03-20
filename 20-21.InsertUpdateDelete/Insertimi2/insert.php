<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Insert to WEB</title>
    </head>
    <body>
    <div style="margin: auto; width:100%">
        <?php               
        $connect=mysqli_connect("localhost","root","","login");
        mysqli_select_db($connect,"login");
        
        //$select = "SELECT * FROM upload";
        //$select = "SELECT * FROM upload order by id DESC;";
        $select = "SELECT * FROM upload order by rand() LIMIT 5";

        $query = mysqli_query($connect, $select);

        while($row=mysqli_fetch_array($query))
        {
	
	       $fileId = $row['id'];
            $fileName = $row['fileName'];
            $fileUpload = $row['fileUpload'];
            $description = substr($row['fileDescription'],0,100);
        ?>
        <h2>
            <a href="<?php echo 'produkti.php?id='.$fileId; ?>">
                <?php echo $fileName; ?>
            </a>
        </h2>
        <img src="../file/<?php echo $fileUpload; ?>" style="width:300px; height:200px">
        <p>
            <?php echo $description; ?>
        </p>
        <?php } ?>
    </div>
    </body>
</html>