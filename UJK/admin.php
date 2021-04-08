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

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="responsive.css">

    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>UJK - Farmasi</title>

    <style>
        * {
            font-family: 'Roboto';
        }

        /* Put Background Image behind */
        body {
            background-image: url("pharmacy.jpg");
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

        .card-header {
            background-color: white;
        }
    </style>
</head>

<body>
    <!-- Formulir untuk kirim ke database MYPHPAdmin -->
    <div class="container">
        <div class="card">
            <h2 style="text-align: center;">Form Data Obat</h2>
            <hr>
            <div class="card-header">
                <!-- Data Tabel Obat -->
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

                <h2 class="text-success">Tabel Obat</h2>

                <!-- Membuat Tabel dengan menampilkan isi data -->
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr align="center">
                            <th>ID Obat</th>
                            <th>Kategori</th>
                            <th>Nama Buku</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Farmasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tabel_obat ORDER BY id_obat ASC";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $no = 1;
                            while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $row['id_obat']; ?></td>
                                    <td><?= $row['kategori']; ?></td>
                                    <td><?= $row['nama_buku']; ?></td>
                                    <td><?= $row['harga']; ?></td>
                                    <td><?= $row['stok']; ?></td>
                                    <td><?= $row['farmasi']; ?></td>
                                    <td align="center">

                                        <!-- Button Untuk Proses Delete -->
                                        <div class="btn-group">
                                            <a href="proses-delete.php?idObat=<?= $row['id_obat']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus ini?')">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>

                                            <!-- Button Untuk Proses Update -->
                                            <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModal" data-id="<?= $row['id_obat']; ?>" data-kategori="<?= $row['kategori']; ?>" data-buku="<?= $row['nama_buku']; ?>" data-harga="<?= $row['harga']; ?>" data-stok="<?= $row['stok']; ?>" data-stok="<?= $row['farmasi']; ?>"> <i class="fa fa-edit" aria-hidden="true"></i></button>

                                        </div>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>

                <!-- Button Pindah ke User -->
                <a href="pegawai-stok.php" class="btn btn-outline-dark btn-sm fa fa-user"></a>

                <!-- Memunculkan Modal Insert -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Tabel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>


                            <!-- Untuk ke Proses Insert -->
                            <div class="modal-body">
                                <form action="proses-insert.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="id" class="form-control" placeholder="Masukkan ID Obat" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="kategori" class="form-control" placeholder="Masukkan Kategori Obat" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="nama_buku" class="form-control" placeholder="Masukkan Nama Buku" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="harga" class="form-control" placeholder="Masukkan Jumlah Harga" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="stok" class="form-control" placeholder="Masukkan Jumlah Stok" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="nama_farmasi" class="form-control" placeholder="Masukkan Nama Farmasi" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-info btn-block" value="Kirim">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <!-- Button Untuk Proses Insert/Add -->
                <button type="button" style="float:right" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-id="<?= $row['id_obat']; ?>" data-kategori="<?= $row['kategori']; ?>" data-buku="<?= $row['nama_buku']; ?>" data-harga="<?= $row['harga']; ?>" data-stok="<?= $row['stok']; ?>" data-stok="<?= $row['farmasi']; ?>"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Tabel Obat</button>
            </div>
        </div>



        <!-- Data Tabel Farmasi  -->
        <div class="card">
            <div class="card-header">
                <h2 class="text-success">Tabel Farmasi</h2>

                <!-- Membuat Tabel dengan menampilkan isi data -->
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr align="center">
                            <th>ID Farmasi</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Telepon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tabel_farmasi ORDER BY id_farmasi ASC";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $no = 1;
                            while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $row['id_farmasi']; ?></td>
                                    <td><?= $row['nama_farmasi']; ?></td>
                                    <td><?= $row['alamat_farmasi']; ?></td>
                                    <td><?= $row['kota_farmasi']; ?></td>
                                    <td><?= $row['telepon']; ?></td>
                                    <td align="center">

                                        <!-- Button Untuk Proses Delete -->
                                        <div class="btn-group">
                                            <a href="proses-delete.php?idFarmasi=<?= $row['id_farmasi']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus ini?')">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>

                                            <!-- Button Untuk Proses Update -->
                                            <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModal" data-id="<?= $row['id_farmasi']; ?>" data-nama="<?= $row['nama_farmasi']; ?>" data-alamat="<?= $row['alamat_farmasi']; ?>" data-kota="<?= $row['kota_farmasi']; ?>" data-telepon="<?= $row['telepon']; ?>"> <i class="fa fa-edit" aria-hidden="true"></i></button>
                                        </div>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <!-- Button Pindah User -->
                <a href="pegawai-stok.php" class="btn btn-outline-dark btn-sm fa fa-user"></a>



                <!-- Button Untuk Proses Insert/Add -->
                <button type="button" style="float:right" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-id="<?= $row['id_farmasi']; ?>" data-nama="<?= $row['nama_farmasi']; ?>" data-alamat="<?= $row['alamat_farmasi']; ?>" data-kota="<?= $row['kota_farmasi']; ?>" data-telepon="<?= $row['telepon']; ?>"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Tabel Farmasi</button>

                <!-- Memunculkan Modal Update -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Tabel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <!-- Untuk ke Proses Update -->
                            <div class="modal-body">
                                <form action="proses-update-farmasi.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="id_farmasi" class="form-control" placeholder="Masukkan ID Farmasi" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Farmasi" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="alamat" class="form-control" placeholder="Masukkan Alamat" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="kota" class="form-control" placeholder="Masukkan Kota" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="telepon" class="form-control" placeholder="Masukkan Telepon" required>
                                    </div>
                                </form>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info">Save Changes</button>
                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
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

    <!-- Javascript Alert untuk menambahkan tabel -->
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