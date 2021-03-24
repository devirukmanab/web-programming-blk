<?php
    require_once "rumuslingkaran.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .card {
            width: 750px;
            border: 1px solid #ccc;
            padding: 40px;
            margin: auto;
            margin-top: 15%;
            box-shadow: 5px 5px 5px #9A9A9A;
        }
       
       .card h2 {
           text-align: center;
           padding-bottom: 30px;
           text-transform: uppercase;
       }

       #input {
           width: 250px;
       }

       .btn {
           cursor: pointer;
       }
    </style>   
</head>
<body>
    <?php
    // Pembuatan Objek Set Jari-jari Lingkaran
    $rumusLingkaran = new lingkaran(10);
    
    // Menampilkan Objek dengan nilai
    // echo "Keliling Lingkaran adalah: ".$rumusLingkaran->getKeliling();
    // echo "<br>";
    // echo "Luas Lingkaran adalah: ".$rumusLingkaran->getLuas();
    ?> 
    
        <div class="card">
        <h2>Form Menghitung Luas Lingkaran</h2>
            <!-- Input dan Button Luas Lingkaran -->
            <form name="formLingkaran" action="" method="POST">
            <div class="input-group mb-3">
                <input type="number" class="form-control" name="r" required min="0" placeholder="Masukkan nilai" aria-label="Masukkan nilai" aria-describedby="button-addon2">

            <div class="input-group-append">
                    <button class="btn btn-primary" name="hitungLuasLingkaran" value="Hitung Luas" type="submit" id="button-addon2">Hitung Luas</button>
                    <button class="btn btn-dark" name="hitungKelilingLingkaran" value="Hitung Keliling" type="submit" id="button-addon2">Hitung Keliling</button>
                    <button class="btn btn-outline-secondary"type="reset" id="button-addon2">Reset</button>
                </div>
            </div>    
            
                <?php
                    if(isset($_POST['hitungLuasLingkaran'])) {
                        echo "<div id='pesanLingkaran'>Luas Lingkaran dengan jari-jari ".$_POST['r']." adalah: ".($_POST['r']);
                    } echo "<br>";
                    if(isset($_POST['hitungKelilingLingkaran'])) {
                        echo "Keliling Lingkaran dengan jari-jari ".$_POST['r']." adalah: ".keliling_lingkaran($_POST['r']);
                    }
                ?>
            </form>
        </div>            
</body>
</html>