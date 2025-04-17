<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Insert</title>
    <style>
        table,
        td,
        th {
            border: 2px solid black;
            border-collapse: collapse;
            width: 500px;
            height: 50px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>File Id</td>
            <td>File Name</td>
            <td>File Upload</td>
            <td>Description</td>
        </tr>
        <?php
        try {
            include('connect.php');

            $select = "SELECT * FROM upload";
            $query = $conn->query($select);

            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $fileId = $row['id'];
                $fileName = $row['fileName'];
                $fileUpload = $row['fileUpload'];
                $description = substr($row['fileDescription'], 0, 100);
                
            ?>
        <tr>
            <td><?php echo $fileId; ?></td>
            <td><?php echo $fileName; ?></td>
            <td><img src="../assets/<?php echo $fileUpload; ?>" width="80" height="60"></td>
            <td><?php echo $description; ?></td>
        </tr>
        <?php
            }
        } 
        catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        ?>

    </table>
</body>

</html>