<?php
  $star = 3;
  for ($a=$star; $a>0; $a--) {
    for ($i=1; $i<=$a; $i++) {
      echo " &nbsp";
    }
    for ($j=$star; $j>=$a; $j--) {
      echo "*&nbsp&nbsp";
    }
  echo "<br>";
  }

  $piramida = array (
    array ("0","0","1","0","0")
    array ("0","1","0","1","0")
    array ("1","0","1","0","1")
  );

  for ($a=0; $a<count($piramida); $a++) {
    for ($b=0; $b<count($piramida[$a]); $b++) {
      echo $piramida[$a][$b];
    }
    echo "<br>";
  }
?>