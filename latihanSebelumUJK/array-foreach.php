<?php 
// membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

// menampilkan isi array dengan perulangan foreach
foreach ($barang as $item) {
    echo $item."<br>";
}

echo "<hr>";

// menampilkan isi array dengan perulangan while
$i = 0;
while($i < count($barang)) {
    echo $barang[$i]."<br>";
    $i++;
}
?>