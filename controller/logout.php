<?php
$_SESSION["login"] = false;
    session_start();
    session_unset();
    session_destroy();
    $_SESSION = null;
    // header('location:../view/admin.login.php');
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    ?>
    