<?php
    foreach (glob('besedila/*.txt') as $datoteka) {
        $ime = strstr($datoteka, '/');
        $ime = ltrim($ime, '/');
        echo '<a href="'.$datoteka.'">'.$ime.'</a><br>';
    }
?>