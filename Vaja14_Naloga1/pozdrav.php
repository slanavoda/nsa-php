<?php
    if (!isset($_COOKIE['ime'])) {
        header('Location: index.php');
    }
    echo 'Pozdravljen, '.$_COOKIE['ime'].'<br>Na zadnje si nas obiskal ob '.$_COOKIE['casObiska'];
    $ime = $_COOKIE['ime'];
    setcookie('casObiska', date("Y.m.d h:i:s"), time()+86400);
    setcookie('ime', $ime, time()+86400);
?>