<?php
    if (!isset($_POST['s'])) {
        header('Location: izpisRazvrscanjeForm.php');
    }

    echo '<style>table, th, td { border: 1px solid black; border-collapse: collapse; } </style>';

    $conn = mysqli_connect("localhost:3306", "root", "", "baza1") or die("Napaka pri povezavi s strežnikom");
    if (!isset($_POST['sort'])) {
        $query = "select KID, ime, priimek, rojstvo from oseba";
    } else if (count($POST['sort']) == 1) {
        $query = "select KID, ime, priimek, rojstvo from oseba order by ".$_POST['sort']." ".$_POST['s'];
    } else {
        $query = "select KID, ime, priimek, rojstvo from oseba order by ";
        foreach ($_POST['sort'] as $k => $value) {
            if ($k == 0) {
                $query = $query.$value;
            } else {
                $query = $query.", ".$value;
            }
        }
        $query = $query." ".$_POST['s'];
    }

    $rs = mysqli_query($conn, $query) or die ("Napaka pri poizvedbi!");

    echo '<table>';
    while ($line = mysqli_fetch_assoc($rs)) {
        echo '<tr>';
        foreach ($line as $k => $value) {
            echo '<td>'.$value.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    mysqli_close($conn);
?>