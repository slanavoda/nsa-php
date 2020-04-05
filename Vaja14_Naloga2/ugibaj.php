<?php
    $vsota = $_COOKIE['vsota'];
    if (!isset($_GET['ugib'])) {
        //header('Location: index.php');
    }
    if (!isset($_COOKIE['runda'])) {
        setcookie('runda', 1, time()+3600, "/");
        header('Location: index.php');
    } else {
        $runda = $_COOKIE['runda'] * 1 + 1;
        setcookie('runda', $runda, time()+3600, "/");
    }
    if ($_GET['ugib'] == $vsota) {
        setcookie('konec', 1, time()+3600);
        header('Location: konec.php');
    } else {
        header('Location: index.php');
    }
?>