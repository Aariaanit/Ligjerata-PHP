<html>
	<head>
	</head>
	<body>
		<?php   //XML 
		
        // print dhe echo na mundesojne shfaqjen e rezultatit
		
        print "<h1>Shkolla Digjitale</h1>"
        //echo "<h1>Shkolla Digjitale</h1>"
		

        ?>
		
        <?php
		
        // echo duhet te shenohet brenda thonjezave, mirepo mund te shenohet edhe brenda kllapave
		
            echo "<h2>Shkolla Digjitale</h2>";
		    echo "<br>";
            echo "Prizren "."Kosovo";
			
    
            print "<h4>Shkolla \"Digjitale\"</h4><br>";
	
        ?>
        
        <?php
        
        // Nese vlerat number i shenojme brenda thonjezave na praqet ashtu si jane
        
			echo "5+6<br>";
        
        // Nese nuk shenohet brenda thonjezave atehere vlerat mbledhen
		
            echo "5"+"6";
			echo "<br>";
		//Variablat shenohen me shenjen e dollarit "$"
			//var name = 'Arianit';
            $first_name = "Arianit";
            $Name = "Arianiti";
		
		//Rezultati mund te paraqitet ne dy menyrat e ndryshme
			//document.write("my name is:"+name)
            echo "My name is: $first_name <br>";
			
		//Nese rezultatin e shenojme me thonjeza te njefishta atehere rezultati paraqitet ashtu siq eshte i shenuar	
			
            echo 'My name is:',$first_name,'!','<br>';
			
        
        
			$x = 3;
			$y = 5;
		
        //Nese e shenojme pa thonjeza rezultati na mblidhet		
		
            echo $x + $y."<br>";
			
			echo "$x + $y <br>";
        
            echo $x . $y;
            echo "<br>";
          
            //ECHO $x . $y;  //
	
		?> 
	</body>
<html>