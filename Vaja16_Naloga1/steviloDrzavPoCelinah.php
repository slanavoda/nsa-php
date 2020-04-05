<?php
    include('seznamDrzav.php');

    foreach ($seznamDrzav1 as $celina => $drzave) {
        echo $celina.": ".count($drzave)."<br>";
    }
?>