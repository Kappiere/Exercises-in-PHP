<?php 
$a=$_POST['a']; 
$b=$_POST['b']; 
$c=$_POST['c']; 
$somma = $a+$b+$c;
$moltiplicazione=$a*$b;
$area = $moltiplicazione/2;
$media = $somma/3; 
echo" <p>Hai immesso i numeri $a , $b e $c</p> 
<p>L'area del triangolo è $area </p>
<p>La media è $media</p> ";
?> 
<p><a href="calcola.html">Torna indietro</a></p>