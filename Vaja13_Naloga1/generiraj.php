<?php
    $random = rand(1, 100);
    setcookie('stevilo', $random, time()+3600, '/');
    setcookie('i', '0', time()+3600, '/');
    setcookie('x', '3', time()-1, '/');
    header('Location: index.php');
?>