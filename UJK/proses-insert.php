<?php
    require_once "MySQL_connection.php";

    $id_obat = $_POST['id'];
    $kategori = $_POST['kategori'];
    $nama_buku = $_POST['nama_buku'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $nama_farmasi = $_POST['nama_farmasi'];

    // Start Session
    session_start();

    // Perintah SQL
    $sql = "INSERT INTO tabel_obat VALUES('$id_obat','$kategori', '$nama_buku', '$harga', '$stok', '$nama_farmasi')";

    // Eksekusi Perintah
    if($conn->query($sql) === true) {
        $_SESSION['update_status'] = 1; //nilai "1"-nya boleh berapa aja
        $_SESSION['update_message'] = '<strong>Berhasil!</strong> Data berhasil dimasukkan!';
        header("location:admin.php");
    } else {
        $_SESSION['update_status'] = 0; //nilai "0"-nya boleh diisi berapa aja
        // $_SESSION['warna_alert'] ='alert alert-danger alert-dismissible fade show'; //warna alert 
        $_SESSION['update_message'] = '<strong>Gagal!</strong> Data gagal dimasukkan! E-mail sudah terpakai';
        $conn->error;
        header("location:admin.php");
    }   

?>

