<?php
    require_once "MySQL_connection.php";

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['password']
    // Perintah SQL
    $sql = "INSERT INTO tb_tamu VALUES('', '$nama', '$email', '$pesan')";

    // Eksekusi Perintah
    if($conn->query($sql) === true) {
        echo "Berhasil tersimpan";
    } else {
        echo "Gagal tersimpan";
    }

?>

