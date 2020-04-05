<?php
    $drzava1 = $_COOKIE['drzava'];
    $celina1 = $_POST['celina'];

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

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