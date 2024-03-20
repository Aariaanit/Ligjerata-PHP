<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title> Insert to WEB</title>
</head>

<body>
    <div>
        <?php               
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=testdb', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if(isset($_GET['id'])){
                $id = $_GET['id'];

                $select = "SELECT * FROM upload WHERE id=:id";
                $stmt = $pdo->prepare($select);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

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
        <?php 
            }
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        ?>
    </div>
</body>

</html>