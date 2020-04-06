<?php
    setcookie('i', '0', time()-1, '/');
    $rezultat = $_COOKIE['p'] * 1;
    setcookie('p', '0', time()-1, '/');

    if ($rezultat == 10) {
        echo "Odlično!<br>";
    } else if ($rezultat > 7) {
        echo "Solidno!<br>";
    } else if ($rezultat == 7) {
        echo "Skromno!<br>";
    } else {
        echo "Sramota!<br>";
    }
    
    echo '<a href="index.php">Domov</a>'
?>