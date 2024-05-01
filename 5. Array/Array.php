<html>

<head>
</head>

<body>
    <h2>Arrays</h2>
    <?php 
		//Indexed Arrays -jane array me indeksa numerik
		//Krijimi i nje Array
			$x = array("Shkolla","Digjitale","Prizren");
        
			//Menyra se si mund te ju qasemi elementeve te Array, permes Index.
			echo $x[0]."<br>".$x[1]."<br>".$x[2];
        	echo $x;
            echo "<br>";
            var_dump($x);
			echo "<br>";
			print_r($x);
		?>
    <br>
    <?php
			//Count(), kjo metod na mundeson te gjejme gjatesin e array.
			$x = array("Shkolla","Digjitale","Prizren");
			
			echo count($x);
		?>
    <br>
    <?php
		//Associative Arrays - jane array me emra te qelsave
		//I pari eshte qelesi ndersa e dyta vlera,p.sh "id" eshte qelesi, ndersa "1" eshte vlera
			$z = array( "id"=>1, "username"=>"Arianit", "password"=>"044494134");	

			echo $z["username"];
			echo '<br>';
			echo "Username eshte " . $z['username'];
		?>
    <h2>Sorting Arrays</h2>
    <h3>sort()</h3>
    <?php 
		//Array mund te renditen ne menyre alfabetike ose numerike nga fillimi apo nga fundi.
			//sort(), kjo metod na mundeson qe ta renditim elementet e nje Array, nga numeri me i vogel.
			$x = array(3,54,12,2,3,4,9,8,5);
			sort($x);
			print_r($x);
            echo "<br>";

			// echo $x[0]."<br>";
			// echo $x[1]."<br>";
			// echo $x[2]."<br>";
			// echo $x[3]."<br>";
			// echo $x[4]."<br>";
			// echo $x[5]."<br>";
			// echo $x[6]."<br>";
			// echo $x[7]."<br>";
			// echo $x[8]."<br>";
			// echo "<br>";
            
			//per ti nxjerr vetem si vlera nga array e perdorim for loop.
			$y = count($x); //vlera 9
			for ($z = 0; $z < $y; $z++)
			{
				echo $x[$z];
				echo "<br>";
			}
		?>
    <br>
    <?php
		//Per renditjen e tekstit
			//$text = array("Shkolla","Digjitale","Prizren");
			$text = array("Shkolla","Digjitale","Prizren", "arianit");
            
            sort($text);
			
            $x = count($text);
        
			for($y=0; $y<$x; $y++)
			{
				echo $text[$y];
				echo "<br>";
			}
		?>

    <h3>rsort()</h3>
    <?php
			$x = array(2,43,65,4,7,2,12,3,9,8);
			rsort($x);
			// sort($x);

			$y = count($x);
        
			for($z=0;$z<$y;$z++)
			{
				echo $x[$z];
				echo "<br>";
			}
            
        //Vazhdim...
		?>


    <h3>asort()</h3>
    <?php
		//Associative Arrays - mund te renditen edhe nga fillimi edhe nga fundi.
		//asort()-mundeson renditjen e elementeve ne baze te vleres.
			
            $mosha = array("Arianit"=>"26", "Florian"=>"27", "Roni"=>"26");
        
			asort($mosha);
        
			foreach($mosha as $x => $x_value)
			{
				echo $x ." - ". $x_value;
				echo "<br>";
			}
		?>


    <h3>ksort()</h3>
    <?php
		//ksort()-mundeson renditjen e ementeve ne baze te qelesit. 
			$mosha = array("Arianit"=>"26", "Florian"=>"27", "Roni"=>"26");
			ksort($mosha);
        
			$mosha1 = array("Arianit"=>"26", "Florian"=>"27", "Roni"=>"26");
        
			foreach($mosha as $x => $x_value)
			{
				echo $x ." ". $x_value;
				echo "<br>";
			}
		?>
    <h3>arsort()</h3>
    <?php
		//Associative Arrays - mund te renditen edhe nga fillimi edhe nga fundi.
		//arsort()-mundeson renditjen e ementeve ne baze te vleres nga fundi ne fillim.
			$mosha = array("Arianit"=>"26", "Florian"=>"27", "Roni"=>"26");
			arsort($mosha);
			foreach($mosha as $x => $x_value)
			{
				echo $x ." ". $x_value;
				echo "<br>";
			}
		?>
    <h3>krsort()</h3>
    <?php
		//Associative Arrays - mund te renditen edhe nga fillimi edhe nga fundi.
		//krsort()-mundeson renditjen e ementeve ne baze te qelesit nga fundi ne fillim. 
			$mosha = array("Arianit"=>"26", "Florian"=>"27", "Roni"=>"26");
			krsort($mosha);
			foreach($mosha as $x => $x_value)
			{
				echo $x ." ". $x_value;
				echo "<br>";
			}
		?>
    <h3>Multidimensional Array</h3>
    <?php  
            //Multidimensional Array
            //Array multidimensional ne PHP njihet gjithashtu si grup i array. 
            //Kjo ju lejon të ruani të dhëna tabelore në një grup. 
            //Array multidimensional ne PHP mund të paraqitet në formën e matricës e cila përfaqësohet nga kolona dhe rresht.
            
            $arr = array(  
                    array(4,"Prizren",20000,"Kalaja"),  //row 1 4 -00
                    array(1,"Prishtine",10000,"Newborn"),//row 2
                    array(7,"Gjakove",50000,"Qarshia")   //row 3
                    );  
					$c = count($arr); //3
					$d = count($arr)+1; //4
					//$arr[$row][$col];
  
            for ($row = 0; $row < $c; $row++) {  
                for ($col = 0; $col < $d; $col++) {  
                    echo $arr[$row][$col]."  ";  
                }  
                echo "<br>";  
            }  
        ?>

    <h3>pop()</h3>
    <?php
		//pop()fshin nje elementet nga fundi i array.
			$text = array("Shkolla","Digjitale","Prizren");
			//print_r($text);
			array_pop($text);
			print_r($text);
		?>
    <h3>push()</h3>
    <?php
		//push()shton nje elementet nga fundi i array.
			$text = array("Shkolla","Digjitale","Prizren");
			array_push($text,"Prishtine");
			print_r($text);
		?>
    <h3>shift()</h3>
    <?php
		//shift()fshin nje elementet nga fillmi i array.
			$text = array("Shkolla","Digjitale","Prizren");
			array_shift($text);
			print_r($text);
		?>
    <h3>unshft()</h3>
    <?php
		//unshift()shton nje elementet ne fillim te array.
			$text = array("Shkolla","Digjitale","Prizren");
			array_unshift($text,"Prishtine");
			print_r($text);
		?>
    <h3>splice()</h3>
    <?php
		//splice()na mundeson qe njekosisht te shtojem dhe te fshijme elementet brenda array.
			$text = array("Shkolla","Digjitale","Prizren");
			array_splice($text, 2, 2, "Prishtine");
			print_r($text);
		?>
    <br>
    <?php
				//echo "<script>document.write('Prizren');</script>";
				//Detyra 4
				// $x = array(3,54,12,2,3,4,9,8,5);
				// sort($x);
				
				// echo "<br>";
				
				// $y = count($x)-1; //vlera 9
				// for ($z = $y; $z >= 0; $z--)
				// {
				// 	echo $x[$z];
				// 	echo "<br>";
				// }
			?>


</body>

</html>