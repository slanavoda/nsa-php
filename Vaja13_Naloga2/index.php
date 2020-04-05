<?php
    include('include.php');
    if (!isset($_COOKIE['drzava'])) {
        setcookie('drzava', 'slo', time()+3600);
        header("Refresh:0");
    }
    echo $t[$_COOKIE["drzava"]][0].'<br>';
?>
<a href='si.php'>
        <img src='si.gif'>
</a>
<a href='de.php'>
        <img src='de.gif'>
</a>
<a href='us.php'>
        <img src='us.gif'>
</a>
<br><br>
<?php
    include('include.php');
    echo $t[$_COOKIE["drzava"]][1];
?>