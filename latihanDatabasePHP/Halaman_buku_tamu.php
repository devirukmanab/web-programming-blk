<!-- Menghubungkan dengan file SQL yang ingi dituju -->
<?php
    require_once "MySQL_connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Buku Tamu</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 style="text-align: center;">Form Input Buku Tamu</h3>
            </div>
            <div class="card-body">
                <form action="Proses_insert_buku_tamu.php" method="POST">
                    <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama anda">
                    </div>

                    <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Masukkan e-mail anda">
                    </div>

                    <div class="form-group">
                    <textarea name="pesan" class="form-control" placeholder="Masukkan pesan anda"></textarea>
                    </div>

                    <div class="form-group">
                    <input type="submit" name="email" class="btn btn-info btn-block" value="Kirm">
                    </div>

                </form> 
            </div>
        </div>
    </div>
</body>
</html>