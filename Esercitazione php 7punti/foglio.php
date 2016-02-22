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

$i=0;
$j=0;
$x=0;

function uno(){
    echo("<h1 align=center> La tabellina del 5 <br><br> </p>");
	echo("<table border=1 align=center> <tr>");
	for($i=1;$i<11;$i++){
		$x=$i*5;
		echo("<td>" . $x . "</td> ");
	}
	echo("</tr>");
	echo("</table>");
}
function due(){
    echo("<h1 align=center> <br>Tabella Pitagorica<br></p>");
	$pitagorica=array(
	              array(1,2,3,4,5,6,7,8,9,10),
				  array(2,null,null,null,null,null,null,null,null,null),
				  array(3,null,null,null,null,null,null,null,null,null),
				  array(4,null,null,null,null,null,null,null,null,null),
				  array(5,null,null,null,null,null,null,null,null,null),
				  array(6,null,null,null,null,null,null,null,null,null),
				  array(7,null,null,null,null,null,null,null,null,null),
				  array(8,null,null,null,null,null,null,null,null,null),
				  array(9,null,null,null,null,null,null,null,null,null),
	              array(10,null,null,null,null,null,null,null,null,null)
	);
	$prova=array(1,2,3,4,5,6,7,8,9,10);
	for ($i=0;$i<10;$i++){
		for($j=0;$j<10;$j++){
			$pitagorica[$i][$j]=($i+1)*($j+1);
			
		}
		
		
	}
	echo("<table border=1 align=center>");
	for($i=0;$i<10;$i++){
		echo("<tr>");
		for($j=0;$j<10;$j++){
			echo("<td>" . $pitagorica[$i][$j] . "</td>");
		}
		echo("</tr>");
	}
	echo("</table>");
	
	
	
}



function quattro(){
    echo("<h3 align=center> <br>Fattoriale da 1 a 9<br></p>");
	echo("<table border=1 align=center><tr>");
	for($x=1;$x<10;$x++){
	    $fattoriale=1;
		for($i=1;$i<=$x;$i++){
			$fattoriale=$fattoriale*$i;
			
		}
		echo("<td>" . $fattoriale . "</td>");
		
	}
	echo("</tr> </table>");
	
	
}
function sei(){
    echo("<h3 align=center> <br>Numeri da 1 a 20 <br>");
	$matrice7=array(
	                array(null,null,null,null),
	                array(null,null,null,null),
	                array(null,null,null,null),
	                array(null,null,null,null),
	                array(null,null,null,null)
					);
	echo("<table border=1 align=center> <br>");
	$x=1;
	for($i=0;$i<5;$i++){
		echo("<tr>");
		for($j=0;$j<4;$j++){
			echo("<td>" . $x . "</td>");
			$x++;
			
		}
		echo("</tr>");
	}
	
	echo("</table> <br>");
	
}
echo("<h2 align=right>Esercitazione in 7 punti Terrone Kevin</p>
      <table border=1 align=center>
      <tr><td><p align=left>1)La tabellina del 5 </p></td></tr>
      <tr><td><p align=left>2)La tavola pitagorica contenuta in una tabella </p></td></tr>
      <tr><td><p align=left>3)La tabellina di un numero ricevuto in input tramite un modulo </p></td></tr>
      <tr><td><p align=left>4)Il fattoriale dei numeri da 1 a 9 </p></td></tr>
      <tr><td><p align=left>5)Il fattoriale di un numero compreso fra 1 e 15</p></td></tr> 
      <tr><td><p align=left>6)I numeri da 1 a 20 disposti in cinque righe e quattro colonne </p></td></tr>
      <tr><td><p align=left>7)Tutti i numeri primi minori dell'input</p></td></tr>
	  <tr><td>");

echo("<form action='foglio.php' method='post' align=center> <h4>Inserisci il numero:</p> 
          <input  type='text' name='risposta' />
		  <input type='submit'>");
switch($_POST[risposta]){
	case 1:uno();
	       break;
    case 2:due();
	       break;
    case 3:header("location:operazione3.php");
	       break;
    case 4:quattro();
	       break;
    case 5:header("location:operazione5.php");
	       break;
    case 6:sei();
	       break;
    case 7:header ("location:operazione7.php");
	       break;
    default: echo("<p>Inserire numero valido fra 1 e 7</p>");
	       break;
	              
}
echo(" </td></tr> </table>");

	


?>