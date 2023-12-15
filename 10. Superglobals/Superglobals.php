<html>
	<head>
	</head>
	<body>
		<p>$GLOBALS</p>
		<?php
			$a = 10;
			$b = 20;
           //echo $a;
		?>
		<?php
			/*$ GLOBALS është një variabël super globale PHP e cila përdoret për të hyrë në variabla globale nga kudo në skriptin PHP (gjithashtu nga brenda funksioneve ose metodave). PHP ruan të gjitha variablat globale në një grup të quajtur $GLOBALS [indeksi].
            Indeksi mban emrin e variables x.*/
			$x = 75;
			$y = 25;
			//echo $a. "<br>";
			function vlere()
			{	
			//$z = $x + $y; //kjo metod nuk funksionon.
			$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
			}
			vlere();
			echo $z;
		
		?>
		<p>$_SERVER</p>
		<?php
			//$ _SERVER është një variabël super globale PHP, e cila mban informacione në lidhje me headers, 
			//paths dhe vendndodhjet e script-ave.
			//Shembulli më poshtë tregon se si të përdorni disa nga elementët në $ _SERVER:
			
			echo $_SERVER['PHP_SELF']; //tregon vendndodhjen e file qe jemi.
			echo "<br>";
 			echo $_SERVER['SERVER_NAME']; //tregon emrin e serverit ku gjendet file i yne.
			echo "<br>";
			echo $_SERVER['HTTP_HOST']; //tregon hostin ku ndodhet(ne rastin ton e tregon portin)
			echo "<br>";
			echo $_SERVER['HTTP_REFERER']; //tregon linkun se si te qasemi tek file qe gjendemi.
			echo "<br>";
			echo $_SERVER['SCRIPT_NAME']; //Tregon emrin e scriptes qe jemi duke punuar.
			echo "<br>";
			echo $_SERVER['SERVER_SOFTWARE'];//Tregon me qfare server jeni duke punuar.
			echo "<br>";
			echo $_SERVER['SERVER_PROTOCOL'];//Tregon qfare protokolli ka serveri.
			echo "<br>";
			echo $_SERVER['REQUEST_METHOD']; //Kthen metodën e kërkesës së përdorur për të hyrë në faqe(siç është POST)
			
		?>
		<p>$_REQUEST</p>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Name: <input type="text" name="fname">
			<input type="submit">
		</form>
		<?php
			/*PHP $ _REQUEST përdoret për të mbledhur të dhëna pasi të paraqisni një formë HTML.
				Shembulli më poshtë tregon një formë me një fushë hyrëse dhe një buton dorëzimi. 
				Kur një përdorues paraqet të dhënat duke klikuar në "Paraqit", 
				të dhënat e formularit i dërgohen skedarit të specifikuar në atributin e veprimit
				të etiketës <form>. Në këtë shembull, ne i tregojmë këtij skedari vetë për përpunimin e 
				të dhënave të formularit. Nëse dëshironi të përdorni një skedar tjetër PHP për të 
				përpunuar të dhënat e formularit, zëvendësoni atë me emrin e zgjedhjes suaj. 
				Pastaj, mund të përdorim variablin super global $ _REQUEST për të mbledhur vlerën e 
				fushës së hyrjes:*/
			

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				// collect value of input field
				$name = $_REQUEST['fname'];
				if (empty($name)) {
				    echo "Name is empty";
				} 
                else {
			     echo $name;
				}
            }
		?>
        
		<p>$_POST</p>
		<?php
			/*Informacioni i dërguar nga një formë me metodën POST është i padukshëm për të tjerët 
			(të gjithë emrat / vlerat janë ngulitur në trupin e kërkesës HTTP) dhe nuk kanë kufij në 
			sasinë e informacionit që duhet të dërgoni.
			Për më tepër, POST mbështet funksionim të avancuar siç është mbështetja për hyrje binare 
			me shumë pjesë ndërsa ngarkoni skedarët në server.
			Sidoqoftë, për shkak se variablat nuk shfaqen në URL, nuk është e mundur të shënohet faqja.
			Developerat preferojnë POST-in për dërgimin e të dhënave të form.
			
			$ _POST përdoret gjerësisht për të mbledhur të dhëna të formularit pas paraqitjes së një forme 
			HTML me metodën = "post". $ _POST përdoret gjithashtu gjerësisht për të kaluar variablat.
			Shembulli më poshtë tregon një formë me një fushë hyrëse dhe një buton dorëzimi. 
			Kur një përdorues paraqet të dhënat duke klikuar në "Paraqit", të dhënat e formularit i dërgohen 
			skedarit të specifikuar në atributin e veprimit të etiketës <form>. 
			Në këtë shembull, ne tregojmë vetë skedarin për përpunimin e të dhënave të formularit. 
			Nëse dëshironi të përdorni një skedar tjetër PHP për të përpunuar të dhënat e formularit, 
			zëvendësoni atë me emrin e zgjedhjes suaj. 
			Pastaj, mund të përdorim variablin super global $ _POST për të mbledhur vlerën e fushës së hyrjes:*/
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") 
			{
				// collect value of input field
				$name = $_POST['fname'];
				if (empty($name)) 
				{
					echo "Name is empty";
				} 
				else 
				{
					echo $name;
				}
			}	
		
		
		?>
		<p>$_GET</p>
		<?php
			/*Informacioni i dërguar nga një formë me metodën GET është i dukshëm për të gjithë 
			(të gjithë emrat dhe vlerat e variablave shfaqen në URL). 
			GET gjithashtu ka kufizime në sasinë e informacionit për të dërguar. 
			Kufizimi është rreth 2000 karaktere. 
			Sidoqoftë, për shkak se variablat janë shfaqur në URL, është e mundur që të shënoni faqen. 
			Kjo mund të jetë e dobishme në disa raste.
			GET mund të përdoret për dërgimin e të dhënave jo sensitive.
			GET nuk duhet te përdoret për dërgimin e fjalëkalimeve ose informacione të tjera të ndjeshme!*/	
		?>

		<a href="Array.php?subject=PHP&web=W3schools.com">Test $GET</a>
		<a href="test_get.php?subject=PHP&web=W3schools.com "> Provo $ GET </a>
		
		
	</body>
</html>