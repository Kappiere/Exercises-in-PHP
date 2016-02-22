<?php
  $matrice=array(
                      array(4,52,5,7,2,89),
                      array(6,3,7,2,122,4),
                      array(48,2,51,74,28,819),
                      array(56,37,27,52,1232,41),
                      array(48,522,59,70,26,890),
                      array(1,35,78,29,1220,40)
                     );
  $max=0;
  $min=0;
  $imax=0;
  $jmax=0;
  $jmin=0;
  $imin=0;
  for($i=0;$i<6;$i++){
                               for($j=0;$j<6;$j++){
                                                            if($matrice[$i][$j]>$max){
                                                                                 $max=$matrice[$i][$j];
                                                                                 $imax=$i;
                                                                                 $jmax=$j;
                                                                                      }
                                                                            
                                                                     if($min==0){$min=$matrice[$i][$j];
                                                                                          }
       			                if($matrice[$i][$j]<$min){
                                                                                      $min=$matrice[$i][$j];
                                                                                      $imin=$i;
                                                                                      $jmin=$j;
                                                                                      }
                                                            }
                                   }
  echo"<p>Il valore massimo : " . $max . " <br>  gli indici sono i: " . $imax . "  j: " . $jmax . "  <br> Il valore minimo : " . $min . " <br>  gli indici sono i: " . $imin . "  j: " . $jmin . " </p>";     

?>                                                                                
                      