<?php

function hitung_pohon($tinggi_awal, $tahun){
  $musim_semi = $tinggi_awal + 1 * $tahun;
  $musim_panas = $musim_semi * 3 * $tahun;
  $musim_gugur = $musim_panas - 1.5 * $tahun;
  $musim_dingin = $musim_gugur * 15 / 100 * $tahun;
  $akhir_musim_dingin = $musim_dingin / 2 * $tahun;
  echo $akhir_musim_dingin;
}

hitung_pohon("2", "2");

?>