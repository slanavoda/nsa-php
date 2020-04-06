<?php
    if (!isset($_POST['email'])) {
        header('Location: prijavaForm.php');
    }

    $conn = mysqli_connect("localhost:3306", "root", "", "loto") or die("Napaka pri povezavi s strežnikom");
    $query = "select geslo from Uporabniki where email = '".$_POST['email']."'";
    $rs = mysqli_query($conn, $query) or die("Napaka pri poizvedbi!");

    if (mysqli_num_rows($rs) == 0) {
        header("Location: prijavaForm.php");
    }

    $line = mysqli_fetch_assoc($rs);
    if (password_verify($_POST['geslo'], $line['geslo'])) {
        $query = "update Uporabniki set datumCasZadnjiLogin='".date("Y-m-d h:i:s")."' where email='".$_POST['email']."'";
        mysqli_query($conn, $query) or die("Napaka pri poizvedbi 2!");
        mysqli_close($conn);
        session_start();
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['login'] = "OK";
        header("Location: index.php");
    } else {
        mysqli_close($conn);
        header("Location: prijavaForm.php");
    }
?>