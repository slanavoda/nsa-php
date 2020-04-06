<?php
    $poskusi = ($_COOKIE['i'] * 1) + 1;
    setcookie('i', $poskusi, time()+3600, '/');
    $drzava1 = $_POST['drzava'];
    $celina1 = $_POST['celina'];

    include('seznamDrzav.php');
    foreach ($seznamDrzav1 as $celina => $drzave) {
        foreach ($drzave as $id => $drzava) {
            if ($drzava == $drzava1) {
                if ($celina == $celina1) {
                    echo "Bravo, odgovor je pravilen!";
                    echo '<br><a href="index.php?p=1">Domov</a>';
                    break;
                } else {
                    echo "Odgovor NI pravilen!";
                    echo '<br><a href="index.php">Domov</a>';
                    break;
                }
            }
        }
    }
?>