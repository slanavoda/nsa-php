<?php
    if (!isset($_POST['uIme'])) {
        header('Location: prijavaForm.php');
    }

    $conn = mysqli_connect("localhost:3306", "root", "", "geografija1") or die("Napaka pri povezavi s strežnikom");
    $query = "select geslo, stNeveljavnihPoskusov, datumCasPrijave from Uporabnik where uIme = '".$_POST['uIme']."'";
    $rs = mysqli_query($conn, $query) or die("Napaka pri poizvedbi!");

    if (mysqli_num_rows($rs) == 0) {
        header("Location: prijavaForm.php");
    }

    $line = mysqli_fetch_assoc($rs);
    
    if ($line['stNeveljavnihPoskusov'] >= 5) {
        $datumCas1 = date_create($line['datumCasPrijave']);
        $datumCas2 = date_create(date("Y-m-d h:i:s"));
        $razlika = date_diff($datumCas1, $datumCas2);
        if (($razlika->h) < 1) {
            $timespan = 3600;
            $dv = new DateInterval('PT'.$timespan.'S');
            $datumCas3 = date_add($datumCas1, $dv);
            $razlika2 = date_diff($datumCas2, $datumCas3);
            die("Ne moreš se prijaviti še ".$razlika2->i." minut.<br><a href='prijavaForm.php'>Domov</a>");
        }
    }
        
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
        $query = "update uporabnik set stNeveljavnihPoskusov=".$st.", datumCasPrijave='".date("Y-m-d h:i:s")."' where uIme='".$_POST['uIme']."'";
        mysqli_query($conn, $query) or die("Napaka pri poizvedbi 2!");
        mysqli_close($conn);
        header("Location: prijavaForm.php");
    }
?>