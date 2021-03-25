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
                <form action="Proses_insert_buku_tamu.php" method="POST">
                    <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama anda" required>
                    </div>

                    <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Masukkan e-mail anda" required>
                    </div>

                    <div class="form-group">
                    <textarea name="pesan" class="form-control" placeholder="Masukkan pesan dan kesan anda"></textarea>
                    </div>

                    <div class="form-group">
                    <input type="submit" class="btn btn-info btn-block" value="Update">
                    </div>
                </form> 
    
                <!-- Membuat Tabel dengan menampilkan isi data -->
                <table class="table table-bordered">
                    <thead>
                        <tr align="center">
                            <th>No</th> <th>ID</th> <th>Nama</th> <th>Email</th> <th>Pesan/Komentar</th> <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tb_tamu ORDER BY id_tamu ASC";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0) {
                            $no = 1;
                            while($row = $result->fetch_assoc()){?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$row['id_tamu'];?></td>
                                <td><?=$row['nama_tamu'];?></td>
                                <td><?=$row['email_tamu'];?></td>
                                <td><?=$row['pesan_tamu'];?></td>
                                <td align="center">
                                    <!-- Button Delete and Edit -->
                                    <a href="Proses_delete_buku_tamu.php?idTamu=<?=$row['id_tamu'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus ini?')">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                    <a href="Halaman_edit_buku_tamu.php?idTamu=<?=$row['id_tamu'];?>" class="btn btn-dark btn-sm">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                </td>    
                            </tr>
                        <?php
                                $no++;
                            }
                        }
                        ?>     
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
