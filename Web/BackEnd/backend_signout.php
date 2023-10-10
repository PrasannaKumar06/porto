<?php
session_start();

function signOut() {
    $_SESSION = array();

    session_destroy();

    header("Location: ../FrontEnd/login.php");
    exit();
}
?>