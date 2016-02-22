<?php
 $film=array("Triller","Dramma","Action","Horror");
 
 $Genere=array("Triller"=>'Silenzio degli innocenti', "Dramma"=>'Nato al mondo',"Action"=>'Terminator',"Horror"=>'Ostel');
 
 foreach ($film as $nome)
 {
	 echo($nome."</br>");
 }
 
 foreach ($Genere as $info=>$valore)
 {
	 //$info="Triller";
	 //$valore="Silenzio degli innocenti";
	 echo("$info:$valore</br> \n");
 }
 
 while($element=each($Genere))
 {
	 echo($element["key"]);
     echo "-";
	 echo $element["value"];
	 echo "</br>";
 }	 
	 reset($Genere);
	 while(list($nome,$valore)=each($Genere))
		 echo"$nome-$valore<br>";
	 ?>