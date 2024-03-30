<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=testdb', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_GET['delete'])) {
        $delete_id = $_GET['delete'];

        $delete_query = "DELETE FROM upload WHERE id=:delete_id";
        $stmt = $pdo->prepare($delete_query);
        $stmt->bindParam(':delete_id', $delete_id);

        if($stmt->execute()) {
            echo "<script>alert('Produkti eshte Fshire')</script>";
            echo "<script>window.open('viewFile.php','_self');</script>";
        }
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>