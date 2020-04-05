<?php
    if (!($_SESSION['login'] == "OK")) {
        header('prijavaForm.php');
    }
    session_start();
    $conn = mysqli_connect("localhost:3306", "root", "", "geografija1") or die("Napaka pri povezavi s stražnikom!");
    $query = "select datumGesla from Uporabnik where uIme = '".$_SESSION['uIme']."'";
    $rs = mysqli_query($conn, $query);
    $line = mysqli_fetch_assoc($rs);

    $datumGesla = date_create($line['datumGesla']);
    $datum = date_create(date("Y-m-d"));

    $razlika = date_diff($datumGesla, $datum);

    if (($razlika->days) > 50) {
        mysqli_close($conn);
        header('Location: spremembaGeslaForm.php');
    }
    
    echo '<a href="odjava.php">Odjava</a>';
?>