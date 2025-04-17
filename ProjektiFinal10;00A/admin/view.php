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
          <div class="content-wrapper">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bordered table</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> Nr. </th>
                            <th> First name </th>
                            <th> Images </th>
                            <th> Amount </th>
                            <th> Description </th>
                            <th>Delete</th>
                            <th>Update</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            try {
                                include('includes/connect.php');
                                
                                $select = "SELECT * FROM upload";
                                $query = $conn->query($select);
                                $x = 0;
                                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                    $id = $row['id'];
                                    $fileName = $row['fileName'];
                                    $image = $row['fileUpload'];
                                    $price = $row['price'];
                                    $description = $row['description'];
                                    $x++;
                            ?>
                            <tr>
                                <td><?php echo $x; ?></td>
                                <td><?php echo $fileName; ?></td>
                                <td><img src="assets/images/<?php echo $image; ?>" width="80" height="60"></td>
                                <td><?php echo $price; ?></td>
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
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          </div>
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