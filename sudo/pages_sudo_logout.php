<?php
    session_start();
    unset($_SESSION['id']);
    session_destroy();

    header("Location: pages_sudo_index.php");
    exit;
?>