<body bgcolor="#ccff00">
<style>
table {
    border-collapse: collapse;
}

table, td, tr {
    border: 1px solid black;
	text-align: center;
}
</style>
<?php
	
    echo("<h2 align=center> <br>Tabellina Preselezionata<br></p>");
	echo("<form action='operazione3.php' method='post'> Inserisci un numero da 1 a 10:</p> 
          <input  type='text' name='nn' />
		  <input type='submit'>		  ");
	
	echo("<br><table border=1 align=center> <tr>");	  
	if($_POST[nn]<1 || $_POST[nn]>10){
		echo("Errore , riprova!");
	}
	else{
		
		
	echo("<br>");	
	for($i=1;$i<11;$i++){
		$x=$i*$_POST[nn];
		echo("<td>" . $x . "</td> ");
	}
	echo("</tr>");
	echo("</table>");
		
		
	}	  
		  
?>
<p><a href="foglio.php">Torna indietro</a></p>
</body>