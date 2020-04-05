<?php
    if (isset($_POST['nova'])) {
        header('Location: generiraj.php');
    } else if (!isset($_POST['ugib'])) {
        header('Location: index.php');
    } else {
        $i = $_COOKIE['i'] * 1 + 1;
        setcookie('i', $i, time()+3600, '/');
        header('Refresh: 0');
    }

    $stevilo = $_COOKIE['stevilo'];
    if ($_POST['ugib'] == $stevilo) {
        setcookie('x', '0', time()+3600, '/');
        header('Location: index.php');
    } else if ($_POST['ugib'] > $stevilo) {
        setcookie('x', '1', time()+3600, '/');
        header('Location: index.php');
    } else if ($_POST['ugib'] < $stevilo) {
        setcookie('x', '2', time()+3600, '/');
        header('Location: index.php');
    }
?>