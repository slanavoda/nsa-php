<?php
    setcookie('i', '0', time()-1, '/');
    include('helper.php');
    $rezultat = 0;
    foreach ($t as $k => $d) {
        $rezultat = $rezultat + $d;
    }

    if ($rezultat == 10) {
        echo "Odlično!<br>";
    } else if ($rezultat > 7) {
        echo "Solidno!<br>";
    } else if ($rezultat == 7) {
        echo "Skromno!<br>";
    } else {
        echo "Sramota!<br>";
    }

    foreach ($t as $k => $d) {
        unset($t[$k]);
    }
    
    echo '<a href="index.php">Domov</a>'
?>