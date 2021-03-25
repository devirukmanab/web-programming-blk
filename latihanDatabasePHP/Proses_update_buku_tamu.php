<?php
    require_once "MySQL_connection.php";

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // Perintah SQL
    $sql = "UPDATE tb_tamu SET nama_tamu='$nama', email_tamu='$email', pesan_tamu='$pesan' WHERE id_tamu='$id'";

    // Eksekusi Perintah
    if($conn->query($sql) === true) {
        // header("location:Halaman_buku_tamu.php");

        // Menampilkan Pop Up BERHASIL TERSIMPAN
        echo "<script>
                alert('Berhasil tersimpan');
                location.assign('Halaman_buku_tamu.php');   
            </script>";

        echo "Berhasil tersimpan";
    } else {
        // Menampilkan Pop Up GAGAL TERSIMPAN
        echo "<script>
                alert('Berhasil tersimpan');
                location.assign('Halaman_buku_tamu.php');   
            </script>";

        echo "Gagal tersimpan";
    }

?>

