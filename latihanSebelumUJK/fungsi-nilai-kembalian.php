<?php
// membuat fungsi
function hitungUmur($thnLahir, $thnSekarang){
  $umur = $thnSekarang - $thnLahir;
  return $umur;
}

echo "Umur saya adalah ". hitungUmur(1994, 2015) ." tahun";