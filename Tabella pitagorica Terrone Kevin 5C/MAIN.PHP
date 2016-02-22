<HTML>
 <HEAD>
  <TITLE>ESERCIZIO</TITLE>
 </HEAD>
 <BODY>
   <H1>Tavola pitagorica </H1>
   <TABLE BORDER=1 CELLPADDING=5>

   <?PHP
     $LIMITE=10;
     FOR($RIGA=1;$RIGA<=$LIMITE;$RIGA++) {   
                                           ECHO "<TR>";
                                           FOR($COLONNA=1;$COLONNA<=$LIMITE;$COLONNA++) {
                                                                                       $VALORE=$RIGA*$COLONNA;
                                                                                       ECHO "<TD>";
                                                                                       ECHO $VALORE;
                                                                                       ECHO "</TD> \n";
                                                                                                             }
                                           ECHO"</TR> \n";
                                               }
    ?>
  </TABLE>                                                                  
 </BODY>
</HTML>