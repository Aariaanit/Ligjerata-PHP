<?php
try {
    include('connect.php');

    if(isset($_GET['delete'])) {
        $delete_id = $_GET['delete'];

        $delete_query = "DELETE FROM upload WHERE id=:delete_id";
        $query = $conn->prepare($delete_query);
        $query->bindParam(':delete_id', $delete_id);

        if($query->execute()) {
            echo "<script>alert('Produkti eshte Fshire')</script>";
            echo "<script>window.open('viewFile.php','_self');</script>";
        }
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
