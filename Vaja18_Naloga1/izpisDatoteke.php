<style>
    #osnovna {
        font-family: Arial;
        font-size: 12px;
        color: blue;
    }
    
    #simple {
        font-family: "Courier New";
        font-size: 10px;
        color: green;
    }
    
    #fancy {
        font-family: Calibri;
        font-size: 10px;
        color: red;
    }
</style>
<?php
    if (!isset($_POST['stil']) || $_POST['stil'] == '1') {
        echo '<div id="osnovna">';
    } else if ($_POST['stil'] == '2') {
        echo '<div id="simple">';
    } else {
        echo '<div id="fancy">';
    }

    $fh = fopen($_POST['izpis'], 'r');
    while ($v = fgets($fh)) {
        echo $v.'<br>';
    }
    fclose($fh);

    echo '</div>';
?>