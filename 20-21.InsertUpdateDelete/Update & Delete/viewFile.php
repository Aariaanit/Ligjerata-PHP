<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title> Delete &amp; Update File </title>
    <style>
    table,
    td,
    th {
        border: 2px solid black;
        border-collapse: collapse;
    }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>Id File</td>
            <td>File Name</td>
            <td>File Upload</td>
            <td>Description</td>
            <td>Delete File</td>
            <td>Update File</td>
        </tr>
        <?php
        try {
            include('../Insertimi/connect.php');
            
            $select = "SELECT * FROM upload";
            $query = $conn->query($select);
            
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $id = $row['id'];
                $fileName = $row['fileName'];
                $fileUpload = $row['fileUpload'];
                $description = $row['fileDescription'];
        ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $fileName; ?></td>
            <td><img src="../file/<?php echo $fileUpload; ?>" width="80" height="60"></td>
            <td><?php echo $description; ?></td>
            <td><a href="delete.php?delete=<?php echo $id; ?>" onclick="return confirm('A jeni i sigurt!')">Delete</a>
            </td>
            <td><a href="update.php?update=<?php echo $id; ?>">Update</a></td>
        </tr>
        <?php 
            }
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        ?>
    </table>
</body>

</html>