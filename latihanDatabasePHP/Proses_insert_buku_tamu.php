<?php
    require_once "MySQL_connection.php";

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // Perintah SQL
    $sql = "INSERT INTO tb_tamu VALUES('', '$nama', '$email', '$pesan')";

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

