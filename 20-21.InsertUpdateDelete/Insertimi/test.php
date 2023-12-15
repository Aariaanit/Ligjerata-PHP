<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  .div-table{
    border: solid 1px none;
     width: 100%;
     height: auto;
     display: flex;
     justify-content: center;
 }
 
 .div-table1{
    border: solid 1px none;
     width:50%;
     height: auto;
     display: flex;
     flex-direction: row;
     font-size: 25px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    color: #41a73b;
    border-radius:10px;
    background-color: #abdbc7 ;
 }
 
 .div-row {
   border: solid 1px none;
     width: 100%;
     height: 150px;
     display: flex;
     flex-direction: column;
 }
 
 .div-row1{
   border: solid 1px none;
     width: 100%;
     height: 100%;
     display: flex;
     flex-direction: row;
     text-align:center;
     align-items:center;
 }
 
 .div-row2 {
   border: solid 1px none;
     width: 100%;
     height: auto;
     display: flex;
     flex-direction: column;
     text-align:center;
     align-items:center;
     
 }
 .div-cell {
   border: 1px solid black;
   height: 100%;
   width: 100%;
  border-color:none;
  border-style:none;
 }

 .div-default {
   border: solid 1px none;
     width: 100%;
     height:300px;
     display: flex;
     align-items:center;
     justify-content: center; 
     flex-direction: column;
 }


.p-default{
  font-size: 35px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    color: red;
}


</style>
<link rel="stylesheet" href="linjat.css"> 
</head>
<body>
    





 
 

<form class="divi_kryesor1" action="linjat.php" method="post">
<div class="divi_kryesor2">

<div class="div-nisja">
    <div class="div-p">
    <label class="p" for="city-input">Nga:</label>
    </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
            </div>

            <input type="text" class="form-control" name="start_city" id="city-input" list="city-options" placeholder="Vendi i nisjes...">
            
            <datalist id="city-options">
            <option value="Suharek">
            <option value="Prishtin">
            <option value="Prizren">
            </datalist>

        </div>
</div>


  <br><br>


<div class="div-mberritja">
    <div class="div-p">
    <label class="p" for="city-input">Në:</label>
    </div>
        <div class="input-group">
             <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
             </div>
            
                <input type="text" class="form-control" name="end_city" id="city-input" list="city-options" placeholder="Vendi i arritjes...">
                  
                    <datalist id="city-options">
                    <option value="Suharek">
                    <option value="Prishtin">
                    <option value="Prizren">
                    </datalist>
        </div>

</div>

 
 


<div class="div-data">
    <div class="div-p">
    <label class="p" for="date-input">Data:</label>
    </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-calendar"></i>
                </span>
            </div>
                <div class="div-data-input">
                <input type="date" class="form-control-data" name="date" id="date-input">
                </div>
        </div>

</div>



  


  
<div class="div-kerko">
    <button class="button" type="submit">
        <img  class="search" src="searchh.png">
          <p>Kërko</p>
    </button>
</div>


</div>
</form>

 
 
 






<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $start_city = $_POST['start_city'];
  $end_city = $_POST['end_city'];
  $date = $_POST['date'];

  // Connect to the MySQL database
  $servername = "localhost";
  $username = "root";
  $password = '';
  $dbname = "linjat";

  // Create the connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check the connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Search the bus lines from the database
  $sql = "SELECT id, start_city, end_city, starts, ends, operator, duration, price, data FROM tabelabus WHERE start_city = '$start_city' AND end_city = '$end_city' AND data = '$date'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        ?>
      <div class='div-table'>
        <div class='div-table1'>

            <div class='div-row'> 
                <div class='div-row1'>
                    <div class='div-cell'>
                       <?php echo $row["start_city"]; ?>
                    </div>
                    <div class='div-cell'>
                       <?php echo $row["end_city"]; ?>
                    </div>

            <div class='div-row1'>
                <div class='div-cell'>
                    <?php echo $row["starts"]; ?>
                </div>
                <div class='div-cell'>
                    <?php echo $row["ends"]; ?>
                </div>

            <div class='div-row2'>
                <div class='div-cell'>
                <?php echo $row["operator"]; ?>
                    
                </div>
                <div class='div-cell'>
                    <?php echo $row["duration"]; ?>
                </div>
                <div class='div-cell'>
                    <?php echo $row["price"]; ?>
                </div>
      

        </div>
      </div>
     <br><br><br>
    <?php 
            } 
        } else {
    ?>
    <div class='div-default'>
        <p class='p-default'>Na vjenë keqë por gjatë kërkimeve tuaja nuk u gjetë asnjë linjë! </p>
        <br>
        <p class='p-default'>Ju lutem rishikoni edhe një herë! </p>
    </div>
  <?php 
  }
  // Close the connection
  mysqli_close($conn);
}
?>

</body>
</html>