<?php
    include('funkcije.php');
    if (!isset($_COOKIE['num'])) {
        generiraj();
    }
    echo "Naključno zgenerirano število: ".$_COOKIE['num']."<br>";
?>
<form action="ugibaj.php" method="get">
    <input type="number" placeholder="Vsota števk" name="ugib" required>
    <input type="submit" value="Pošlji!">
</form>