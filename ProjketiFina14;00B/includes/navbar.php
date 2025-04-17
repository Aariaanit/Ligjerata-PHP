<nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="index.html"><img src="assets/images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="features.php">Features</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" 
                        href="<?php echo isset($_SESSION['username']) ? 'admin/logout.php' : 'admin/login.php'; ?>">
                           <?php echo isset($_SESSION['username']) ? 'Logout' : 'Login'; ?>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#"><img src="assets/images/serach-icon.png"></a>
                     </li>
                  </ul>
               </div>
            </nav>