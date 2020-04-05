<?php
    include('seznamDrzav.php');
    $i = 1;
    
    echo "<table>";
    foreach ($seznamDrzav1 as $celina => $drzave) {
        echo "<tr><th>".$celina."</th></tr>";
        foreach ($drzave as $id => $drzava) {
            echo "<tr><td>".$i."</td><td>".$drzava."</td></tr>";
            $i++;
        }
    }
?>