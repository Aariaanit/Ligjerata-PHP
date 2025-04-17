<?php
session_start();
if (!isset($_SESSION["username"])){
  header("location:login.php");
}
else{

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Page</title>
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
          <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Basic form elements</h4>
                        <p class="card-description"> Basic form elements </p>
                        <?php
                            try {
                                include('includes/connect.php');

                                if(isset($_GET['update'])){
                                    $update_id = $_GET['update'];
                                    $select = "SELECT * FROM upload WHERE id=:id";
                                    $query = $conn->prepare($select);
                                    $query->bindParam(':id', $update_id);
                                    $query->execute();
                                    $row = $query->fetch(PDO::FETCH_ASSOC);
                        ?>
                        <form method="post" action="updateId.php" class="forms-sample" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                          <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" name="fileName" class="form-control" id="exampleInputName1" placeholder="Name" value="<?php echo $row['fileName'];?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail3">Price</label>
                            <input type="text" name="price" value="<?php echo $row['price'];?>" class="form-control" id="exampleInputEmail3" placeholder="Price">
                          </div>
                          <div class="form-group">
                            <label>File upload</label>
                            <div class="input-group col-xs-12">
                              <input type="file" name="fileUpload" class="form-control file-upload-info" placeholder="Upload Image">
                            </div>
                          </div>
                        
                          <div class="form-group">
                            <label for="exampleTextarea1">Textarea</label>
                            <textarea name="fileDescription" class="form-control" id="exampleTextarea1" rows="4"><?php echo $row['description'];?></textarea>
                          </div>
                          <button name="update" type="submit" class="btn btn-primary mr-2">Submit</button>
                          <button class="btn btn-dark">Cancel</button>
                        </form>
                           
                            <?php 
                                }
                            } catch (PDOException $e) {
                                echo 'Connection failed: ' . $e->getMessage();
                            }
                        ?>
                     
                      </div>
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
    <?php
      include('includes/scripts.php');
    ?>
    <!-- End custom js for this page -->
  </body>
</html>

<?php  } ?>