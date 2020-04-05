<?php
    if (!isset($_GET['ime'])) {
        header('Location: index.php');
    }
    setcookie('casObiska', date("d.m.Y h:i:s"), time()+86400);
    setcookie('ime', $_GET['ime'].' '.$_GET['priimek'], time()+86400);
    header('Location: index.php');
?>