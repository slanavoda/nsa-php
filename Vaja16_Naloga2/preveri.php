<?php
    $drzava1 = $_POST['drzava'];
    $celina1 = $_POST['celina'];

    include('seznamDrzav.php');
    foreach ($seznamDrzav1 as $celina => $drzave) {
        foreach ($drzave as $id => $drzava) {
            if ($drzava == $drzava1) {
                if ($celina == $celina1) {
                    echo "Bravo, odgovor je pravilen!"; break;
                } else {
                    echo "Odgovor NI pravilen!"; break;
                }
            }
        }
    }
?>