<?php
    if (!($_SESSION['login'] == "OK")) {
        header('prijavaForm.php');
    }
    if ($_SESSION['uIme'] != $_POST['uIme']) {
        header('index.php');
    }
    session_start();
    $conn = mysqli_connect("localhost:3306", "root", "", "geografija1") or die("Napaka pri povezavi s stražnikom!");
    $query = "select geslo from Uporabnik where uIme = '".$_POST['uIme']."'";
    $rs = mysqli_query($conn, $query) or die("Napaka pri poizvedbi 1!");
    $line = mysqli_fetch_assoc($rs);

    if (password_verify($_POST['staroGeslo'], $line['geslo'])) {
        $query = "update Uporabnik set geslo='".password_hash($_POST['novoGeslo'], PASSWORD_DEFAULT)."', datumGesla='".date("Y-m-d")."' where uIme='".$_POST['uIme']."'";
        mysqli_query($conn, $query) or die("Napaka pri poizvedbi 2!");
        mysqli_close($conn);
        header("Location: index.php");
    }
    
    mysqli_close($conn);
    header("Location: spremembaGeslaForm.php");
?>