<?php
    require_once "MySQL_connection.php";

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // Start Session
    session_start();

    // Perintah SQL
    $sql = "INSERT INTO tabel_obat VALUES('', '$nama', '$email', '$pesan')";

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

