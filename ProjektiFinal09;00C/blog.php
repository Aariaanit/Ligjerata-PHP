<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Blog</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <?php 
         include("includes/styles.php");
      ?>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid header_main">
         <?php 
            include("includes/navbar.php");
         ?>
         </div>
      </div>
      <!-- blog section start --> 
      <div class="about_section layout_padding">
         <div class="container">
            <?php
               try {
                  include('admin/includes/connect.php');

                  $select = "SELECT * FROM upload ORDER BY id desc";
                  $query = $conn->query($select);

                  while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                        $fileId = $row['id'];
                        $fileName = $row['fileName'];
                        $image = $row['image'];
                        $price = $row['price'];
                        $description = substr($row['description'], 0, 100);
               ?>
               <div class="row">
               <div class="col-lg-8 col-sm-12">
                  <div class="about_img"><img src="assets/images/<?php echo $image; ?>"></div>
                  <div class="like_icon"><img src="assets/images/like-icon.png"></div>
                  <p class="post_text"><?php echo $price; ?></p>
                  <h2 class="most_text"><?php echo $fileName; ?></h2>
                  <p class="lorem_text"><?php echo $description; ?></p>
                  <div class="social_icon_main">
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="assets/images/fb-icon.png"></a></li>
                           <li><a href="#"><img src="assets/images/twitter-icon.png"></a></li>
                           <li><a href="#"><img src="assets/images/instagram-icon.png"></a></li>
                        </ul>
                     </div>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="about_main">
                     <h1 class="follow_text">CONNECT & FOLLOW</h1>
                     <div class="follow_icon">
                        <ul>
                           <li><a href="#"><img src="assets/images/fb-icon-1.png"></a></li>
                           <li><a href="#"><img src="assets/images/twitter-icon-1.png"></a></li>
                           <li><a href="#"><img src="assets/images/linkedin-icon-1.png"></a></li>
                           <li><a href="#"><img src="assets/images/instagram-icon-1.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
                  <h2>
                        <a href="produkti.php?id=<?php echo $fileId ?>">
                           <?php echo $fileName; ?>
                        </a>
                  </h2>
                  <img src="../assets/<?php echo $fileUpload; ?>">
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
      </div>
      <!-- blog section end --> 
      <!-- footer section start -->
      <?php 
         include("includes/footer.php");
      ?>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <?php 
         include("includes/stylscripts.php");
      ?>
   </body>
</html>