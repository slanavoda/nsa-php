<?php
    if (!isset($_COOKIE['ime'])) {
        header('Location: index.php');
    }
    $ime = $_COOKIE['ime'];
    setcookie('casObiska', date("d.m.Y h:i:s"), time()+86400);
    setcookie('ime', $ime, time()+86400);
    echo 'Pozdravljen, '.$_COOKIE['ime'].'<br>Na zadnje si nas obiskal ob '.$_COOKIE['casObiska'];
?>