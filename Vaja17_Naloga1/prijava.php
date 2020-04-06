<?php
    if (!isset($_POST['uIme'])) {
        header('Location: prijavaForm.php');
    }

    $conn = mysqli_connect("localhost:3306", "root", "", "geografija1") or die("Napaka pri povezavi s strežnikom");
    $query = "select geslo, stNeveljavnihPoskusov from Uporabnik where uIme = '".$_POST['uIme']."'";
    $rs = mysqli_query($conn, $query) or die("Napaka pri poizvedbi!");

    if (mysqli_num_rows($rs) == 0) {
        header("Location: prijavaForm.php");
    }

    $line = mysqli_fetch_assoc($rs);
    
    if (password_verify($_POST['geslo'], $line['geslo'])) {
        $query = "update uporabnik set stNeveljavnihPoskusov=0, datumCasPrijave='".date("Y-m-d h:i:s")."' where uIme='".$_POST['uIme']."'";
        mysqli_query($conn, $query) or die("Napaka pri poizvedbi 2!");
        mysqli_close($conn);
        session_start();
        $_SESSION['uIme'] = $_POST['uIme'];
        $_SESSION['login'] = "OK";
        header("Location: index.php");
    } else {
        $st = ($line['stNeveljavnihPoskusov'] * 1) + 1;
        $query = "update uporabnik set stNeveljavnihPoskusov=".$st." where uIme='".$_POST['uIme']."'";
        mysqli_query($conn, $query) or die("Napaka pri poizvedbi 2!");
        mysqli_close($conn);
        header("Location: prijavaForm.php");
    }
?>