<!DOCTYPE html>
<html>

<head>
    <title>Insert to WEB</title>
</head>

<body>
    <div>
        <table border="1">
            <tr>
                <th>Id File</th>
                <th>File Name</th>
                <th>File Upload</th>
                <th>Description</th>
                <th>Delete File</th>
                <th>Update File</th>
            </tr>
            <?php               
                try {
                    include('connect.php');
                    
                    if (isset($_GET['search'])) {
                        $search = '%'.$_GET['value'].'%';

                        $select = "SELECT * FROM upload WHERE fileName LIKE :search";
                        $query = $conn->prepare($select);
                        $query->bindParam(':search', $search, PDO::PARAM_STR);
                        $query->execute();

                        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                            $id = $row['id'];
                            $fileName = $row['fileName'];
                            $fileUpload = $row['fileUpload'];
                            $description = $row['fileDescription'];
            ?>
            <tr>
                <td><?php echo htmlspecialchars($id); ?></td>
                <td><?php echo htmlspecialchars($fileName); ?></td>
                <td><img src="../assets/<?php echo htmlspecialchars($fileUpload); ?>" width="80" height="60"></td>
                <td><?php echo htmlspecialchars($description); ?></td>
                <td><a href="delete.php?delete=<?php echo htmlspecialchars($id); ?>"
                        onclick="return confirm('A jeni i sigurt!')">Delete</a></td>
                <td><a href="update.php?update=<?php echo htmlspecialchars($id); ?>">Update</a></td>
            </tr>
            <?php 
                        }
                    }
                } catch (PDOException $e) {
                    echo 'Connection failed: ' . $e->getMessage();
                }
            ?>
        </table>
    </div>
</body>

</html>
