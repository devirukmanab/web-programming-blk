<!-- Menghubungkan dengan file SQL yang ingi dituju -->
<?php
require_once "MySQL_connection.php";

// Start Session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Datatables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Buku Tamu</title>

    <style>
        * {
            font-family: 'Roboto';
        }

        /* Put Background Image behind */
        body {
            background-image: url("image.jpg");
            background-position: center;
            min-height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .card {
            margin-top: 65px;
            font-family: 'Poppins';
        }
    </style>
</head>

<body>
    <!-- Formulir untuk kirim ke database MYPHPAdmin -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                <!-- PHP Login -->
                <?php if (isset($_SESSION['login'])) : ?>
                    <?php

                    if ($_SESSION['login'] == 1) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $_SESSION['login_message']; ?>
                        </div>
                    <?php } ?>

                <?php endif; ?>

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
                        <textarea name="pesan" class="form-control" placeholder="Masukkan pesan dan kesan anda" required></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-info btn-block" value="Kirim">
                    </div>
                </form>
                <hr>

                <?php
                if (isset($_SESSION['update_status'])) {
                    // if($_SESSION['update_status'] == 1){
                ?>
                    <!-- Alert Untuk Gagal dan Berhasil-->
                    <div class="alert <?php if ($_SESSION['update_status'] == 1) {
                                            echo "alert-success";
                                        } else {
                                            echo "alert-danger";
                                        } ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['update_message']; ?>
                        <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                <?php }
                unset($_SESSION['update_status']);
                ?>

                <h2 class="text-success">Data Buku Tamu</h2>

                <!-- Membuat Tabel dengan menampilkan isi data -->
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Pesan/Komentar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tb_tamu ORDER BY id_tamu ASC";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $no = 1;
                            while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $row['id_tamu']; ?></td>
                                    <td><?= $row['nama_tamu']; ?></td>
                                    <td><?= $row['email_tamu']; ?></td>
                                    <td><?= $row['pesan_tamu']; ?></td>
                                    <td align="center">
                                        <!-- Untuk Proses Delete/Edit & Button Delete and Edit -->
                                        <div class="btn-group">
                                            <a href="Proses_delete_buku_tamu.php?idTamu=<?= $row['id_tamu']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus ini?')">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>

                                            <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModal" data-id="<?= $row['id_tamu']; ?>" data-nama="<?= $row['nama_tamu']; ?>" data-email="<?= $row['email_tamu']; ?>" data-pesan="<?= $row['pesan_tamu']; ?>"> <i class="fa fa-edit" aria-hidden="true"></i></button>
                                        </div>
                                    </td>
                                </tr>
                        <?php
                                $no++;
                            }
                        }
                        ?>
                    </tbody>
                </table>

                <!-- Log Out -->
                <a href="login.php" class="btn btn-outline-dark btn-sm fa fa-sign-out"></a>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Untuk ke Proses Update -->
                    <div class="modal-body">
                        <form action="Proses_update_buku_tamu.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="id" class="form-control edit-id" readonly required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="nama" class="form-control edit-nama" placeholder="Masukkan nama anda" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control edit-email" placeholder="Masukkan e-mail anda" required>
                            </div>

                            <div class="form-group">
                                <textarea name="pesan" class="form-control edit-pesan" placeholder="Masukkan pesan dan kesan anda" required></textarea>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-info btn-block" value="Update">
                            </div>

                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Javascript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


    <!-- JQUERY Datatables -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <!-- Javascript untuk menambahkan tabel -->
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                pageLength: 5,
            });
            // Javascript untuk memunculkan modal Edit
            $('#exampleModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id') // Extract info from data-* attributes
                var nama = button.data('nama')
                var email = button.data('email')
                var pesan = button.data('pesan')
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-body .edit-id').val(id)
                modal.find('.modal-body .edit-nama').val(nama)
                modal.find('.modal-body .edit-email').val(email)
                modal.find('.modal-body .edit-pesan').val(pesan)
            })
            $('.alert').delay(500).fadeOut(2000);
        });
    </script>
</body>

</html>
