<?php
    session_start();
    if (!($_SESSION['login'] == "OK")) {
        header('prijavaForm.php');
    }
    $conn = mysqli_connect("localhost:3306", "root", "", "loto") or die("Napaka pri povezavi s stražnikom!");
    $query = "select stanjeNaRacunu from Uporabniki where email='".$_SESSION['email']."'";
    $rs = mysqli_query($conn, $query) or die("Napaka pri poizvedbi!");
    $stanje = mysqli_fetch_assoc($rs);
    echo "Stanje: ".$stanje['stanjeNaRacunu']." EUR ";
    if (($stanje['stanjeNaRacunu'] * 1) <= 0) {
        header("Location: zguba.php");
    }
    echo '<a href="odjava.php">Odjava</a><br>';
?>
<form action="zrebanje.php" method="post">
    <fieldset style="display: inline-block;">
        <legend>Loto Listek</legend>
        <input type="checkbox" name="loto[]" value="1">1</input>
        <input type="checkbox" name="loto[]" value="2">2</input>
        <input type="checkbox" name="loto[]" value="3">3</input>
        <input type="checkbox" name="loto[]" value="4">4</input>
        <input type="checkbox" name="loto[]" value="5">5</input>
        <input type="checkbox" name="loto[]" value="6">6</input>
        <input type="checkbox" name="loto[]" value="7">7</input>
        <input type="checkbox" name="loto[]" value="8">8</input>
        <input type="checkbox" name="loto[]" value="9">9</input>
        <input type="checkbox" name="loto[]" value="10">10</input>
        <input type="submit" value="Igraj!">
    </fieldset>
</form>