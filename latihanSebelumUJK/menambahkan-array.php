<?php 
// membuat array
$hobi = [
    "Membaca",
    "Menulis",
    "Makan"
];

// menambahkan isi pada indeks ke-3
$hobi[2] = "Coding";

// menambahkan isi pada indeks terakhir
$hobi[] =   "Menggambar";

// mencetak array dengan perulangan
foreach ($hobi as $hobiku) {
    echo $hobiku;
}


$user = [];
?>