<?php 
 
 $Scuola=array(
			array("Giorno"=>'Lunedi',"1"=>'Sistemi',"2"=>'Inglese',"3"=>'Ed.Fisica',"4"=>'Informatica',"5"=>'Lab.Informatica',"6"=>'Libero'),
			array("Giorno"=>'Martedi',"1"=>'Italiano',"2"=>'Lab.Sistemi',"3"=>'Matematica',"4"=>'Matematica',"5"=>'Ed.Fisica',"6"=>'Libero'),
			array("Giorno"=>'Mercoledi',"1"=>'Inglese',"2"=>'Lab.Informatica',"3"=>'Lab.Informatica',"4"=>'Matematica',"5"=>'Italiano',"6"=>'Lab.Tipsit'),
			array("Giorno"=>'Giovedi',"1"=>'Italiano',"2"=>'Italiano',"3"=>'Inglese',"4"=>'Lab.Tipsit',"5"=>'Lab.Tipsit',"6"=>'Libero'),
			array("Giorno"=>'Venerdi',"1"=>'Italiano',"2"=>'Storia',"3"=>'Lab.Informatica',"4"=>'Lab.Sistemi',"5"=>'Gestione',"6"=>'Sistemi'),
			array("Giorno"=>'Sabato',"1"=>'Tipsit',"2"=>'Religione',"3"=>'Informatica',"4"=>'Lab.Gestione',"5"=>'Lab.Tipsit',"6"=>'Libero'),
			array("Giorno"=>'Domenica',"1"=>'Libero',"2"=>'Libero',"3"=>'Libero',"4"=>'Libero',"5"=>'Libero',"6"=>'Libero')
			);
 
 for($i=0;$i<7;$i++){
	 
     if($_POST[giorno]==$Scuola[$i][Giorno]){
		 echo($Scuola[$i][Giorno] . "<br>  ");
		 for($j=1;$j<7;$j++){
			 
			 echo($Scuola[$i][$j] . "<br> ");
		 }
	   $x++;  
	 }
	 
 }
 
 
?> 
<p><a href="Main.html">Torna indietro</a></p>
 