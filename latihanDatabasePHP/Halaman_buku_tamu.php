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

    <!-- Datatables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

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
                        <input type="text" name="id" class="form-control" readonly required>
                    </div>

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
                        <input type="submit" class="btn btn-info btn-block" value="Update">
                    </div>
                </form>


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
                                        <!-- Button Delete and Edit -->
                                        <div class="btn-group">
                                            <a href="Proses_delete_buku_tamu.php?idTamu=<?= $row['id_tamu']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus ini?')">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>

                                            <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> <i class="fa fa-edit" aria-hidden="true"></i></button>

                                            <a href="Halaman_edit_buku_tamu.php?idTamu=<?= $row['id_tamu']; ?>" class="btn btn-dark btn-sm disabled">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
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
            </div>
        </div>

        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
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

    <!-- Javascript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

    <!-- Jquery Datatables -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <!-- Javascript untuk menambahkan tabel -->
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                pageLength: 5,
            });
            $('#exampleModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('New message to ' + recipient)
                modal.find('.modal-body input').val(recipient)
            })
        });
    </script>
</body>

</html>
