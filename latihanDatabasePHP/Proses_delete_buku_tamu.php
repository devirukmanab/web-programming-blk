<?php
    require_once "MySQL_connection.php";

  $id = $_GET['idTamu'];

   // Start Session
   session_start();
  
    // Perintah SQL
    $sql = "DELETE FROM tb_tamu WHERE id_tamu='$id'";

    // Eksekusi Perintah
    if($conn->query($sql) === true) {
        $_SESSION['update_status'] = 1; //nilai "1"-nya boleh berapa aja
        $_SESSION['update_message'] = '<strong>Berhasil!</strong> Data berhasil dihapus!';
        header("location:Halaman_buku_tamu.php");
    } else {
        $_SESSION['update_status'] = 1; //nilai "1"-nya boleh berapa aja
        $_SESSION['update_message'] = '<strong>Gagal!</strong> Data gagal dihapus!';
    }    
        // Menampilkan Pop Up BERHASIL TERHAPUS
    //     echo "<script>
    //             alert('Berhasil terhapus');
    //             location.assign('Halaman_buku_tamu.php');   
    //         </script>";

    //     echo "Berhasil terhapus";
    // } else {
    //     // Menampilkan Pop Up GAGAL TERHAPUS
    //     echo "<script>
    //             alert('Berhasil terhapus');
    //             location.assign('Halaman_buku_tamu.php');   
    //         </script>";

    //     echo "Gagal terhapus";
    // }

?>

