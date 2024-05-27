<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title> Insert to WEB</title>
    <style>
    .product {
        margin: auto;
        width: 100%;
    }

    .product img {
        width: 300px;
        height: 200px;
    }
    </style>
</head>

<body>
    <div class="product">
        <?php
    try {
        include('connect.php');

        $select = "SELECT * FROM upload ORDER BY RAND() LIMIT 5";
        $query = $conn->query($select);

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $fileId = $row['id'];
            $fileName = $row['fileName'];
            $fileUpload = $row['fileUpload'];
            $description = substr($row['fileDescription'], 0, 100);
    ?>
        <h2>
            <a href="produkti.php?id=<?php echo $fileId ?>">
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