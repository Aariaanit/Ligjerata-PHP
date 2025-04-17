<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location: login.php');
}
else{

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <?php 
      include('includes/styles.php');
    ?>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php 
        include('includes/sidebar.php');
      ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php 
          include('includes/navbar.php');
        ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Insertimi i Produkteve</h4>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">File Name</label>
                        <input type="text" name="fileName" class="form-control" id="exampleInputName1" placeholder="File Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Price</label>
                        <input type="text" name="price"  class="form-control" id="exampleInputEmail3" placeholder="Price">
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                       
                        <div class="input-group col-xs-12">
                          <input type="file" name="fileUpload" class="form-control file-upload-info" placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea name="description" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <button type="submit" name="upload" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php 
            include('includes/footer.php');
          ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <?php 
      include('includes/scripts.php');
    ?>
    <!-- End custom js for this page -->
  </body>
</html>
<?php
try {
    include('includes/connect.php');

    if (isset($_POST['upload'])) {
        $fileName = $_POST['fileName'];
        $fileDescription = $_POST['description'];
        $fileUpload = $_FILES['fileUpload']['name'];
        $fileUpload_tmp = $_FILES['fileUpload']['tmp_name'];
        $price = $_POST['price'];

        if ($fileName == '' or $fileUpload == '') {
            echo "<script>alert('Any input is Empty');</script>";
        } else {
            // Check if file already exists
            $select = "SELECT * FROM upload WHERE fileName=:fileName OR image=:fileUpload LIMIT 1";
            $query = $conn->prepare($select);
            $query->bindParam(':fileName', $fileName);
            $query->bindParam(':fileUpload', $fileUpload);
            $query->execute();
            $exist = $query->fetch(PDO::FETCH_ASSOC);

            if ($exist) {
                echo "<script>alert('This file already exists!');</script>";
            } else {
                move_uploaded_file($fileUpload_tmp, "assets/$fileUpload");

                $uploadFile = "INSERT INTO upload(fileName, image, price, description)
                               VALUES(:fileName, :fileUpload, :price, :fileDescription)";
                $query = $conn->prepare($uploadFile);
                $query->bindParam(':fileName', $fileName);
                $query->bindParam(':fileUpload', $fileUpload);
                $query->bindParam(':price', $price);
                $query->bindParam(':fileDescription', $fileDescription);

                if ($query->execute()) {
                    echo "<script>alert('File is Upload');</script>";
                }
            }
        }
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
<?php 
  }
?>