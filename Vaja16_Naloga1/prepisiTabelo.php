<?php
    include('seznamDrzav.php');
    $tabelaDrzav = array();

    foreach ($seznamDrzav1 as $celina => $drzave) {
        foreach ($drzave as $id => $drzava) {
            $tabelaDrzav[] = array($id, $drzava, $celina);
        }
    }

    echo '<pre>';
    print_r($tabelaDrzav);
    echo '</pre>';
?>