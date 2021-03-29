<?php
    // Start Session
    session_start();

    $_SESSION['login'] = '';
    $_SESSION['update_status'] = '';
    $_SESSION['update_message'] = '';
    $_SESSION['login'] = '';

    session_unset();
    session_destroy();

    header('location:login.php');

?>