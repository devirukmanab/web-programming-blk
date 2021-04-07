<?php
// membuat fungsi
function perkenalan($nama, $salam="Halo") {
	echo "$salam , <br>";
	echo "Perkenalkan, nama saya $nama <br>";
	echo "Senang berkenalan dengan anda <br>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Willy", "Pagi");

echo "<hr>";

$saya = "Indry";
$ucapanSalam = "Selamat sore";

// memanggilnya lagi tanpa mengisi parameter salam
perkenalan($saya);
?>