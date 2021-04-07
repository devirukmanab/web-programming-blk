<?php

// ipe data char (karakter)
$jenis_kelamin = 'L';

// tipe data string (teks)
$nama_lengkap = "Petani Kode";

// tipe data integer
$umur = 20;

// tipe data float
$berat = 48.3;

// tipe data float
$tinggi = 182.2;

// tipe data boolean
$menikah = true;


echo "Nama: $nama_lengkap <br>";
echo "Jenis Kelamin: $jenis_kelamin <br>";
echo "Umur: $umur tahun <br>";
echo "Berat badan: $berat kg <br>";
echo "Tinggi badan: $tinggi cm <br>";
echo "Menikah: $menikah <br>";

// untuk integer negatif
$poin = -31;
echo $poin;

// bilangan eksponen
$jarak = 1.2E-6;

echo sprintf('%f', $jarak);
echo "<br>";
echo sprintf('%3f', $jarak);