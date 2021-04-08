<?php
    require_once "MySQL_connection.php";
    
    // Start Session
    session_start();

    // Untuk Tabel Obat
    $id_farmasi = $_POST['id_farmasi'];
    $nama_farmasi = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $telepon = $_POST['telepon'];

    // Perintah SQL
    $sql = "UPDATE tabel_farmasi SET id_farmasi='$id_farmasi', nama_farmasi='$nama_farmasi', alamat_farmasi='$alamat_farmasi', kota_farmasi='$kota_farmasi', WHERE id_obat='$id_farmasi'";

    // Eksekusi Perintah
    if($conn->query($sql) === true) {
        $_SESSION['update_status'] = 1; //nilai "1"-nya boleh berapa aja
        $_SESSION['update_message'] = '<strong>Berhasil!</strong> Data berhasil diupdate!';
        header("location:admin.php");
    } else {
        $_SESSION['update_status'] = 1; //nilai "1"-nya boleh berapa aja
        $_SESSION['update_message'] = '<strong>Gagal!</strong> Data gagal diupdate!';
    }    

?>

