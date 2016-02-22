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
function inserimento(){
	     echo("
	      </tr>
          <td>" . $_POST[cognome] . "</td> 
          <td>" . $_POST[nome] . "</td> 
          <td>" . $_POST[data] . "</td> 
          <td>" . $_POST[luogo_nascita] . "</td> 
          <td>" . $_POST[sesso] . "</td> 
          <td>" . $_POST[via] . "</td> 
          <td>" . $_POST[numero] . "</td> 
          <td>" . $_POST[cap] . "</td> 
          <td>" . $_POST[citta] . "</td> 
          <td>" . $_POST[provincia] . "</td> 
	     ");
		 }
function tabella(){
	echo("<table border=1 align=center> <tr>
	      <td>Cognome</td>
	      <td>Nome</td>
	      <td>Data di nascita</td>
	      <td>Luogo di Nascita</td>
	      <td>Sesso</td>
	      <td>Via</td>
	      <td>Numero Civico</td>
	      <td>C.A.P.</td>
	      <td>Citta</td>
	      <td>Provincia</td> </tr>");
	      inserimento();
	
	     echo("</tr></table>");
    }      		  
	



tabella();



?>
</body>