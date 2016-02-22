<?php
 $Stagione=array(
                     array($_POST[temperatura_minima_inverno],$_POST[temperatura_massima_inverno],0),
                     array($_POST[temperatura_minima_primavera],$_POST[temperatura_massima_primavera],0),
                     array($_POST[temperatura_minima_estate],$_POST[temperatura_massima_estate],0),
                     array($_POST[temperatura_minima_autunno],$_POST[temperatura_massima_autunno],0),
					 
 
 
	             );
 $NomeStagione=array("Inverno","Primavera","Estate","Autunno");
 for($i=0;$i<4;$i++){
	               $Stagione[$i][2]=($Stagione[$i][1]+$Stagione[$i][0])/2;
}
$j=0;
 for($i=0;$i<4;$i++){
	 echo($NomeStagione[$i] . " ");
	 for($j=0;$j<3;$j++){
	                  echo($Stagione[$i][$j] . " ");
	 
	 
	 
	 } 
	 echo("<br>");
 }
 
 
	 ?>