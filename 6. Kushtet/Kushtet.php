<html>

<head>
</head>

<body>
    <?php
        //Shembulli 1
			//Te tregohet nese 5 eshte me i vogel se 10 permes kushteve
			$x = 1;
			
			if($x < 10)
			{
				echo "$x eshte me i voges se 10";
			}
			else
			{
				echo "$x eshte me i madh se 10";
			}
		?>
    <br>
    <?php
            //Shembulli 2
			$y = 16;
			
			if($y <= 10)
			{
				echo "$y eshte me i vogel se 10";
			}
			else if($y >= 20)
			{
				echo "$y eshte me i madh ose i barabart me 20";
			}
			else
			{
				echo "$y eshte ne mes te 10 dhe 20";
			}
		?>


    <br>
    <?php
			$a = 50; $b= 70;  $c =60;
			
			if($a > $b && $a > $c){
				echo "A eshte me e madhe";
			}
			else if($b > $a && $b > $c){
				echo "B eshte me e madhe";
			}
			else{
				echo "C eshte me e madhe";
			}

			?>
    <br>
    <?php
			$a = 100; $b= 130;  $c =180;
			
			if($a > $b){
				if($a > $c){
					echo "A eshte me e madhe";
				}
				else{
					echo "C eshte me e madhe";

				}
			}
			else{
				if($b > $c){
					echo "B eshte me e madhe";
				}
				else{
					echo "C eshte me e madhe";
				}
			}
			
		?>
    <?php
			//Shembulli 3
			$piket = 50;
    
			if ($piket < 49){
				echo "5";
				}
			elseif($piket >= 50 and $piket < 60) { 
				echo "6";
				}
			elseif($piket >= 60 && $piket < 70) { 
				echo "7";
				}
			elseif($piket >= 70 && $piket < 80) { 
				echo "8";
				}
			elseif($piket >= 80 && $piket < 90)	{
				echo "9";
			}
			elseif($piket >= 90 && $piket <= 100){
				echo "10";
			}
			else{
				echo "Abstenim!";
				}

		?>
    <br>
    <?php
            //Shembulli 4
			$y = 11;
			
			if($y % 2 == 0)
			{
				echo "Vlera e variablës është qift";
			}
			else
			{
				echo "Vlera e variablës është tek";
			}
		?>
    <br>
    <?php 
            //Shembulli 5
			$z = 2;
			
			switch($z)
			{
				case 1:
					echo 'Janar';
				break;
				case 2:
					echo 'Shkurt';
				break;
				case 3:
					echo 'Mars';
				break;
				case 4:
					echo 'Prill';
				break;
				case 5:
					echo 'Maj';
				break;
				case 6:
					echo 'Qershor';
				break;
				case 7:
					echo 'Korrik';
				break;
				case 8:
					echo 'Gushte';
				break;
				case 9:
					echo 'Shtator';
				break;
				case 10:
					echo 'Tetor';
				break;
				
				case 11:
					echo 'Nentor';
				break;
				
				case 12:
					echo 'Dhjetor';
				break;
				
				default:
					echo 'Ky muaj nuk egziston!';
			}
		?>
    <br>
    <?php
            //Shembulli 6
			$ditet = 'E Hene';
			
			switch($ditet)
			{
				case 'E Hene':
					echo 'E Hene eshte dita e pare e javes';
				break;
				
				case 'E Marte':
					echo 'E Marte eshte dita e dyte e javes';
				break;
				
				case 'E Merkure':
					echo 'E Merkure eshte dita e tret e javes';
				break;
				
				case 'E Enjte':
					echo 'E Enjte eshte dita e katert e javes';
				break;
				
				case 'E Premte':
					echo 'E Premte eshte dita e peste e javes';
				break;
				
				case 'E Shtune':
					echo 'E Shtune eshte dita e gjashte e javes';
				break;
				
				case 'E Diel':
					echo 'E Diel eshte dita e shtate e javes';
				break;
				
				default:
					echo 'Kjo dite nuk egziston';
			}
		?>
    <br>




    <?php
        /*
			$row_styles = array('even','odd');
			$style_index = 0;
			$meal = array('breakfast' => 'Walnut Bun',
						'lunch' => 'Cashew Nuts and White Mushrooms',
						'snack' => 'Dried Mulberries',
						'dinner' => 'Eggplant with Chili Sauce');
					print "<table>\n";
					foreach ($meal as $key => $value) {
					print '<tr class="' . $row_styles[$style_index] . '">';
					print "<td>$key</td><td>$value</td></tr>\n";
					// This switches $style_index between 0 and 1
					$style_index = 1 - $style_index;
					}
					print '</table>';
        */
		?>
    <br>
    <?php

		//prompt function
	/*	function prompt($prompt_msg){
			echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

			$answer = "<script type='text/javascript'> document.write(answer); </script>";
			return($answer);
			}

			//program
			$prompt_msg = "Please type your name.";
			$name = prompt($prompt_msg);

			$output_msg = "Hello there ".$name."!";
			echo($output_msg);
	*/
?>
</body>

</html>