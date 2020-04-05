<?php
    if (!isset($_POST['uIme'])) {
        header('Location: registracijaForm.php');
    }
    $conn = mysqli_connect("localhost:3306", "root", "", "geografija1") or die("Napaka pri povezavi s strežnikom!");
    $query = "insert into Uporabnik values ('".$_POST['uIme']."', '".password_hash($_POST['geslo'], PASSWORD_DEFAULT)."', '".date("Y-m-d")."', '".date("Y-m-d")."', '".$_POST['ime']."', '".$_POST['priimek']."', '".$_POST['telefon']."', 0, '".date("Y-m-d h:i:s")."')";

    mysqli_query($conn, $query) or die("Napaka pri registraciji!");
    mysqli_close($conn);
    header('Location: prijavaForm.php');
?>