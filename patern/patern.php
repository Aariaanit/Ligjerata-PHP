<?php
    $z=1;
    for($x=1;$x<=5;$x++){
        for($y=1;$y<=5;$y++){
            echo $z." ";
            $z++;
        }
        echo "<br> ";
    }
?>

<p>Detyra2</p>

<?php
    
    for($a=1;$a<=5;$a++){
        for($b=0;$b<5;$b++){
          if($a+$b == 5){
            echo $b+$a;
          }
          else{
            echo "_"." ";
          }
            
        }
    

        echo "<br>";
    }
?>