<?php
    require_once "MySQL_connection.php";
    
    // Start Session
    session_start();

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // Perintah SQL
    $sql = "UPDATE tb_tamu SET nama_tamu='$nama', email_tamu='$email', pesan_tamu='$pesan' WHERE id_tamu='$id'";

    // Eksekusi Perintah
    if($conn->query($sql) === true) {
        $_SESSION['update_status'] = 1; //nilai "1"-nya boleh berapa aja
        $_SESSION['update_message'] = '<strong>Berhasil!</strong> Data berhasil diupdate!';
        header("location:Halaman_buku_tamu.php");
    } else {
        $_SESSION['update_status'] = 1; //nilai "1"-nya boleh berapa aja
        $_SESSION['update_message'] = '<strong>Gagal!</strong> Data gagal diupdate!';
    }    

    //     // Menampilkan Pop Up BERHASIL TERSIMPAN
    //     echo "<script>
    //             alert('Berhasil tersimpan');
    //             location.assign('Halaman_buku_tamu.php');   
    //         </script>";

    //     echo "Berhasil tersimpan";
    // } else {
    //     // Menampilkan Pop Up GAGAL TERSIMPAN
    //     echo "<script>
    //             alert('Berhasil tersimpan');
    //             location.assign('Halaman_buku_tamu.php');   
    //         </script>";

    //     echo "Gagal tersimpan";
    // }

?>

