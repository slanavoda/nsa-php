<?php
    if (!isset($_COOKIE['stevilo'])) {
        header('Location: generiraj.php');
    }
?>
<form action="ugibaj.php" method="post">
    <input type="number" min="1" max="100" name="ugib" placeholder="Ugibaj!"><br>
    <?php
        if ($_COOKIE['x'] == '0') {
            echo '<input type="text" value="Število ste zadeli v '.$_COOKIE['i'].' poskusih!" disabled><br>';
        } else if ($_COOKIE['x'] == '1') {
            echo '<input type="text" value="Iskano število je manjše!" disabled><br>';
        } else if ($_COOKIE['x'] == '2') {
            echo '<input type="text" value="Iskano število je večje!" disabled><br>';
        } else if ($_COOKIE['x'] == '3') {
            echo '<input type="text" value="" disabled><br>';
        }
    ?>
    <input type="submit" value="Ugibaj!">
    <input type="submit" value="Nova Igra" name="nova">
</form>