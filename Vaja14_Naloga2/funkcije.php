<?php
    function vsotaStevk($n) {
        $vsota = 0;
        $ostanek = 0;
        
        for ($i = 0; $i <= strlen($n); $i++) {
            $ostanek = $n % 10;
            $vsota = $vsota + $ostanek;
            $n = $n / 10;
        }
        
        return $vsota;
    }

    function generiraj() {
        $num = rand(10000, 99999);
        setcookie('num', $num, time()+3600, "/");
        $isci = vsotaStevk($num);
        setcookie('vsota', $isci, time()+3600, "/");
        header('Refresh:0');
    }
?>