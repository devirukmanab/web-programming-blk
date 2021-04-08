<?php
    require_once "MySQL_connection.php";
    
    // Start Session
    session_start();

    // Untuk Tabel Obat
    $id_obat = $_POST['id'];
    $kategori = $_POST['kategori'];
    $nama_buku = $_POST['nama_buku'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $nama_farmasi = $_POST['nama_farmasi'];

    // Perintah SQL
    $sql = "UPDATE tabel_obat SET id_obat='$id_obat', kategori='$kategori', nama_buku='$nama_buku', harga='$harga', stok='$stok', nama_farmasi='$nama_farmasi' WHERE id_obat='$id'";

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

