<?php
    if (!isset($_COOKIE['konec'])) {
        header('Location: index.php');
    }

    if ($_COOKIE['runda'] == 1) {
        echo "Odlično!";
    } else if ($_COOKIE['runda'] == 2) {
        echo 'Pravilno, drugič bodi bolj zbran!';
    } else if ($_COOKIE['runda'] >= 3) {
        echo 'Matematika ti ni ravno domača!';
    }
    echo '<br><a href="index.php?x=1">Domov</a>';
?>