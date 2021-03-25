<?php
    require_once "MySQL_connection.php";

  $id = $_GET['idTamu'];
  
    // Perintah SQL
    $sql = "DELETE FROM tb_tamu WHERE id_tamu='$id'";

    // Eksekusi Perintah
    if($conn->query($sql) === true) {
        // header("location:Halaman_buku_tamu.php");

        // Menampilkan Pop Up BERHASIL TERHAPUS
        echo "<script>
                alert('Berhasil terhapus');
                location.assign('Halaman_buku_tamu.php');   
            </script>";

        echo "Berhasil terhapus";
    } else {
        // Menampilkan Pop Up GAGAL TERHAPUS
        echo "<script>
                alert('Berhasil terhapus');
                location.assign('Halaman_buku_tamu.php');   
            </script>";

        echo "Gagal terhapus";
    }

?>

