<?php 
    $buah = ["Apel", "Anggur", "Leci", "Semangka", "Jeruk"];

    // var_dump($_POST); //mengecek debugging
    // print_r($_POST); //mengecek array atau debugging

    // mengambil data
    if(isset($_POST["data"])) { //isset menampilkan isi echo setelah dipencet buttonnya
        $namaBuah = $_POST["namaBuah"];
        $hargaBuah = $_POST["hargaBuah"];
        $alamatPembeli = $_POST["alamatPembeli"];
        $statusDiskon = $_POST["statusDiskon"];
        $jenisBuah = $_POST["jenisBuah"];
    
        echo "$namaBuah membeli $jenisBuah seharga $hargaBuah, dikirim ke alamat $alamatPembeli, dengan status pembelian $statusDiskon";
    }
?>