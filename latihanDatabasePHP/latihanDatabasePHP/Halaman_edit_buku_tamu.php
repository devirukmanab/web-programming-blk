<!-- Menghubungkan dengan file SQL yang ingin dituju -->
<?php
    require_once "MySQL_connection.php";

    // Menampilkan Data dari MyPHPAdmin
    $id = $_GET['idTamu'];
    $sql = "SELECT * FROM tb_tamu WHERE id_tamu='$id'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        $nama = $row['nama_tamu'];
        $email = $row['email_tamu'];
        $pesan = $row['pesan_tamu'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Buku Tamu</title>
</head>
<body>
    <!-- Formulir untuk kirim ke database MYPHPAdmin -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 style="text-align: center;">Form Input Buku Tamu</h3>
            </div>
            <div class="card-body">
                <form action="Proses_update_buku_tamu.php" method="POST">
                <div class="form-group">
                    <input type="text" name="id" class="form-control" readonly value="<?=$_GET['idTamu'];?>" required>
                    </div>

                    <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama anda" required value="<?=$nama?>">
                    </div>

                    <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Masukkan e-mail anda" required value="<?=$email?>">
                    </div>

                    <div class="form-group">
                    <textarea name="pesan" class="form-control" placeholder="Masukkan pesan dan kesan anda" required value="<?=$pesan?>"></textarea>
                    </div>

                    <div class="form-group">
                    <input type="submit" class="btn btn-info btn-block" value="Update">
                    </div>
                </form> 

                <div class="card-fooer">
                    <a href="Halaman_buku_tamu.php" class="btn btn-primary btn-sm" label="Back">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>