<?php
    require_once "myClass.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Pembuatan Objek Warna Pesawat
        $pesawatA = new PesawatTerbang("Abu-Abu");

        echo "Warna pesawat di awal adalah: ".$pesawatA->getWarna();
        echo "<br>";

        // Memberikan Nilai
        $pesawatA->setWarna("Merah");

        // Menampilkan Objek dengan nilai
        echo "Warna pesawat A adalah: ".$pesawatA->getWarna();
        echo "<hr>";


        // Pembuatan Objek Warna dan Kecepatan Mobil
        $mobilA = new Mobil("Merah");
        echo "Warna Mobil A adalah: ".$mobilA->getWarna();
        echo "<br>";
        echo "Kecepatan Mobil A adalah: ".$mobilA->getKecepatan();
        $mobilA->tambahKecepatan(20);
        echo "<br>";
        echo "Kecepatan Mobil A adalah: ".$mobilA->getKecepatan();
        $mobilA->tambahKecepatan(30);
        echo "<br>";
        echo "Kecepatan Mobil A adalah: ".$mobilA->getKecepatan();


    ?>    
</body>
</html>
