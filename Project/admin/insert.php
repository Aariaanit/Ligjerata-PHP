<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <!-- Navbar Brand-->
        <?php
            include("../includes/navbar.php");

        ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
            <?php
                include("../includes/sidebar.php");

            ?>
            </div>
            <div id="layoutSidenav_content">
                 <!--enctype="multipart/form-data"-është një lloj kodimi që lejon që filet të dërgohen përmes një metode POST. Thjesht, pa këtë kodim file nuk mund të dërgohen përmes metodes POST. Nëse dëshironi të lejoni një përdorues të ngarkojë një file përmes një forme, duhet ta përdorni këtë enctype.-->
                <form method="post" action="insert.php" enctype="multipart/form-data">
                    File Name: <input type="text" name="fileName"><br><br>
                    File Upload:<input type="file" name="fileUpload"><br><br>
                    File Description: <textarea name='content' cols='30' rows='15'></textarea><br><br>
                    <input type="submit" name="upload" value="Insert">
                    <input type="reset" name="cancel" value="Cancel">
                </form>
                <?php
                    include('../includes/footer.php');
                ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
       


<?php
    include('connect.php');
    
    if(isset($_POST['upload']))
    {
        $fileName=$_POST['fileName'];
        $fileDescription=$_POST['content'];
        $fileUpload=$_FILES['fileUpload']['name'];
        $fileUpload_tmp=$_FILES['fileUpload']['tmp_name'];
        
        
        
        //$ _FILES ["file"] ["tmp_name"] përmban kopjen aktuale të përmbajtjes së file tuaj në server ndërsa. $ _FILES ["file"] ["name"] përmban emrin e file që keni ngarkuar nga kompjuteri.
        
        if($fileName==''|| $fileUpload=='')
        {
            echo"<script>alert('Any input is Empty');</script>";
        }
        else
        {   
          //Per te mos u ruajtur file i njejt dy ose me shume here.
          $insert="SELECT * FROM upload WHERE fileName='$fileName' OR fileUpload='$fileUpload' LIMIT 1";
            $query=mysqli_query($connect,$insert);
            
            $exist=mysqli_fetch_assoc($query);
            
            if($exist)
            {
                if($exist['fileName']===$fileName || $exist['fileUpload']===$fileUpload)
                {
                    echo"<script>alert('This file already exists!');</script>";
                }
            }
            else
            {
           move_uploaded_file($fileUpload_tmp,"file/$fileUpload");
            
            $uploadFile="INSERT INTO upload(fileName,fileUpload,fileDescription)
        VALUES('$fileName','$fileUpload','$fileDescription');";
            
                if(mysqli_query($connect,$uploadFile))      
                {
                    echo "<script>alert('File is Upload');</script>";
                }
                else{
                    echo "<script>alert('Upload Failed!');</script>"; 
                }
            }
        }
    }
        
        
    
?>