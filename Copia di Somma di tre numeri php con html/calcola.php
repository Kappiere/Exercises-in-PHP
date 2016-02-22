<?php 
$a=$_POST['a']; 
$b=$_POST['b']; 
$c=$_POST['c']; 
$somma=$a + $b + $c; 
$prodotto = $a *$b *$c; 
$media = $somma/3; 
echo" <p>Hai immesso i numeri $a , $b e $c</p> 
<p>La somma dei tre numeri è $somma</p> 
<p>Il prodotto è $prodotto</p> 
<p>Il rapporto è $media</p> ";
?> 
<p><a href="calcola.html">Torna indietro</a></p>