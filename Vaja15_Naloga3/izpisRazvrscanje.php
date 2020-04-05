<?php
    $conn = mysqli_connect("localhost:3306", "root", "", "baza1") or die("Napaka pri povezavi s strežnikom");
    if (!isset($_POST['sort'])) {
        $query = "select * from oseba";
    } else if (count($POST['sort']) == 1) {
        $query = "select * from oseba order by ".$_POST['sort']." ".$_POST['s'];
    } else {
        $query = "select * from oseba order by ";
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