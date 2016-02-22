<body bgcolor="#ccff00"> 
<?php
	echo("<h3 align=center> <br>Fattoriale preselezionato <br>");
	echo("<form action='operazione5.php' method='post'> <p>Inserisci un numero da 1 a 15:</p> 
          <input  type='text' name='m' />
		  <input type='submit'>		  ");
		if($_POST[m]<1 || $_POST[m]>15){
		echo("<br>Errore , riprova!");
	}
	else{
		$fattoriale=1;
		for($i=1;$i<=$_POST[m];$i++){
			$fattoriale=$fattoriale*$i;
			
		}
		echo("<br> Fattoriale : " . $fattoriale);
	}
	
?>
<p><a href="foglio.php">Torna indietro</a></p>
</body>