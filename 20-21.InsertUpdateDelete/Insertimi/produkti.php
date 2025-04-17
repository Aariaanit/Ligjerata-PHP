<!DOCTYPE html>
<html>

<head>
    <title> Insert to WEB</title>
</head>

<body>
    <div>
        <?php               
        try {
            include('connect.php');
            
            if(isset($_GET['id'])){
                $id = $_GET['id'];

                $select = "SELECT * FROM upload WHERE id=:id";
                $query = $conn->prepare($select);
                $query->bindParam(':id', $id);
                $query->execute();
                $row = $query->fetch(PDO::FETCH_ASSOC);

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
        <img src="../assets/<?php echo $fileUpload; ?>">
        <p>
            <?php echo $description; ?>
        </p>
        <?php 
            }
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        ?>
    </div>
</body>

</html>