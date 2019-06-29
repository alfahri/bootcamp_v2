<?php

function piramida_terbalik($isi){
  for ($i=1; $i<=$isi; $i++){
    echo "<center>";
    for ($d=$i; $d<=$isi; $d++) {
      echo "*";
    }
    echo "<br />";
  }
}

piramida_terbalik("9");

?>