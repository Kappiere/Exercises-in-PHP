<?php 
 $h=0;
 for($i=1;$i<7;$i++){
 $nome[$h]=$_POST[$i]; 
 $i++;
 $cognome[$h]=$_POST[$i];
 $h++;
 }
echo"<p>Gli utenti inseriti sono :";
 for($i=0;$i<3;$i++){
  echo" <br> $nome[$i] $cognome[$i] <br> </p>";}
?> 
<p><a href="main.html">Torna indietro</a></p>