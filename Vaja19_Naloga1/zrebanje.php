<?php
    session_start();
    if (!isset($_SESSION['login'])) {
        header('Location: index.php');
    }

    $st1 = rand(1, 10);
    $st2 = rand(1, 10);
    $st3 = rand(1, 10);
    $st4 = rand(1, 10);

    $conn = mysqli_connect("localhost:3306", "root", "", "loto") or die("Napaka pri povezavi s strežnikom!");
    $query = "select stanjeNaRacunu from Uporabniki where email='".$_SESSION['email']."'";
    $rs = mysqli_query($conn, $query) or die("Napaka pri poizvedbi 1!");
    $line = mysqli_fetch_assoc($rs);
    $stanje = $line['stanjeNaRacunu'] * 1;

    foreach ($_POST['loto'] as $stevilka) {
        $stanje = $stanje - 5;
        if ($stevilka == $st1 || $stevilka == $st2 || $stevilka == $st3 || $stevilka == $st4) {
            $stanje = $stanje + 7;
        }
    }

    $razlika = $stanje - $line['stanjeNaRacunu'] * 1;
    $novoStanje = $stanje*1 + $razlika*1;

    $query = "update Uporabniki set stanjeNaRacunu='".$novoStanje."' where email='".$_SESSION['email']."'";
    mysqli_query($conn, $query) or die("Napaka pri poizvedbi 2!");

    $query = "insert into Zrebanje values(NULL, '".date("Y-m-d h:i:s")."', ".$st1.", ".$st2.", ".$st3.", ".$st4.")";
    mysqli_query($conn, $query) or die("Napaka pri poizvedbi 3!");

    $query = "insert into Igra values('".$_SESSION['email']."', NULL, ".$razlika.")";
    mysqli_query($conn, $query) or die("Napaka pri poizvedbi 4!");

    echo "Izžrebana številka 1: ".$st1."<br>";
    echo "Izžrebana številka 2: ".$st2."<br>";
    echo "Izžrebana številka 3: ".$st3."<br>";
    echo "Izžrebana številka 4: ".$st4."<br><br>";
    echo "Sprememba stanja na računu: ".$razlika."<br>";

    echo "<a href='index.php'>Domov</a>";
?>