<?php
    if (!isset($_POST['email'])) {
        header('Location: registracijaForm.php');
    }
    $conn = mysqli_connect("localhost:3306", "root", "", "loto") or die("Napaka pri povezavi s strežnikom!");
    $query = "insert into Uporabniki values ('".$_POST['email']."', '".password_hash($_POST['geslo'], PASSWORD_DEFAULT)."', '".date("Y-m-d")."', 50, '".date("Y-m-d h:i:s")."')";

    mysqli_query($conn, $query) or die("Napaka pri registraciji!");
    mysqli_close($conn);
    header('Location: prijavaForm.php');
?>