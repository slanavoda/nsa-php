<?php
    include('seznamDrzav.php');
    $tabelaDrzav = array();

    foreach ($seznamDrzav1 as $celina => $drzave) {
        foreach ($drzave as $id => $drzava) {
            $tabelaDrzav[] = array($id, $drzava, $celina);
        }
    }

    $steviloDrzav = count($tabelaDrzav);
    $random = rand(1, $steviloDrzav) - 1;
?>
<datalist id="celine">
    <?php
        foreach ($seznamDrzav1 as $celina => $drzave) {
            echo "<option value='".$celina."'>".$celina."</option>";
        }
    ?>
</datalist>
<form action="preveri.php" method="post">
    <?php
        echo "Država: <input type='text' value='".$tabelaDrzav[$random][1]."' name='drzava' readonly><br>";
    ?>
    Celina: <input type="text" list="celine" name="celina" required>
    <input type="submit" value="Preveri!">
</form>