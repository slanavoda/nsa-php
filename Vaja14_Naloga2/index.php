<?php
    include('funkcije.php');
    if ($_GET['x'] == 1) {
        setcookie('vsota', $isci, time()-1, "/");
        setcookie('num', $num, time()-1, "/");
        setcookie('runda', 1, time()-1, "/");
        header('Location: index.php');
    }
    if (!isset($_COOKIE['num'])) {
        generiraj();
    }
    echo "Naključno zgenerirano število: ".$_COOKIE['num']."<br>";
?>
<form action="ugibaj.php" method="get">
    <input type="number" placeholder="Vsota števk" name="ugib" required>
    <input type="submit" value="Pošlji!">
</form>