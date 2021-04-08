<?php
    require_once "MySQL_connection.php";

  $id = $_GET['idFarmasi'];


   // Start Session
   session_start();
  
    // Perintah SQL
    $sql = "DELETE FROM tabel_farmasi WHERE id_farmasi='$id_farmasi'";

    // Eksekusi Perintah
    if($conn->query($sql) === true) {
        $_SESSION['update_status'] = 1; //nilai "1"-nya boleh berapa aja
        $_SESSION['update_message'] = '<strong>Berhasil!</strong> Data berhasil dihapus!';
        header("location:admin.php");
    } else {
        $_SESSION['update_status'] = 1; //nilai "1"-nya boleh berapa aja
        $_SESSION['update_message'] = '<strong>Gagal!</strong> Data gagal dihapus!';
    }    

?>

