<?php
    session_start();
    foreach($_SESSION as $k => $d) {
        unset($_SESSION[$k]);
    }
    session_destroy();
    header('Location: prijavaForm.php');
?>