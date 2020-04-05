<?php
    if (!isset($_POST['sort'])) {
        header('Location: izpisOsebeForm.php');
    }

    $conn = mysqli_connect("localhost:3306", "root", "", "baza1") or die("Napaka pri povezovanju na strežnik!");
    $query = "select ime, priimek from oseba order by priimek, ime";

    if ($_POST['sort'] == "a") {
        $query = $query." asc";
    } else if ($_POST['sort'] == "d") {
        $query = $query." desc";
    }
    
    $rs = mysqli_query($conn, $query);

    echo '<table>';
    while ($vrstica = mysqli_fetch_assoc($rs)) {
        echo "<tr><td>".$vrstica['ime']."</td><td>".$vrstica['priimek']."</td></tr>";
    }
    echo "</table>";
?>