<body bgcolor="#ccff00"> 
<?php
	      echo("<h4 align=center> <br>Numeri primi minori dell'input <br>");
		  echo("<form action='operazione7.php' method='post'> <p>Inserisci il numero:</p> 
          <input  type='text' name='m' />
		  <input type='submit'>");

function primo($num){
    for($i=2;$i<$num;$i++)
        if(!($num%$i))
            return 0;
    return 1;
}
		$primi = $_POST[m];
 
		for($i=1;$i<=$primi;$i++)
			if(primo($i))
				print "<br>" .$i."<br> ";
				
 
?>

<p><a href="foglio.php">Torna indietro</a></p>
</body>