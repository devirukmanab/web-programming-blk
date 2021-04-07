<?php
// membuat array kosong
$buah = array();
$hobi = [];

// membuat array sekaligus mengisinya
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur", "Jengkol"];

// membuat array dengan mengisi indeks tertentu
$anggota[1] = "Dian";
$anggota[2] = "Mulan";
$anggota[0] = "Yayan";

// menghapus array
unset($makanan[3]);

// menampilkan array secara mentah
echo "<pre>";
print_r($makanan);
echo "</pre>"
?>
