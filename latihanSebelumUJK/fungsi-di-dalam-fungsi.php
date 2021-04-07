<?php
// membuat fungsi di dalam fungsi
function perkenalan($nama, $salam="Ohayou") {
	echo $salam.", ";
	echo "Perkenalkan, nama saya ".$nama."<br>";
	// memanggil fungsi lain
	echo "Saya berusia ".hitungUmur(1994, 2015)." tahun <br>";
}

// memanggil fungsi perkenalan
perkenalan("Nam Do San");
?>
?>